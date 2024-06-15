<?php

// スタイルとスクリプトの読み込み
function load_custom_styles_and_scripts()
{
    // 既存のCSSファイルの読み込み
    wp_enqueue_style('layout-style', get_template_directory_uri() . '/css/layout.css');
    wp_enqueue_style('btn-style', get_template_directory_uri() . '/css/btn.css');
    // JavaScriptファイルの読み込み
    wp_enqueue_script('script-js', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
    // Googleフォントの読み込み
    wp_enqueue_style('google-font-hina-mincho', 'https://fonts.googleapis.com/css2?family=Hina+Mincho&display=swap');
}
add_action('wp_enqueue_scripts', 'load_custom_styles_and_scripts');

// カスタム投稿タイプ 'schedule' の作成
function create_post_type_news()
{
    register_post_type(
        'schedule',
        array(
            'labels' => array(
                'name' => __('Schedule'),
                'singular_name' => __('Schedule')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'), // サムネイルをサポート
            'show_in_rest' => true,
        )
    );
}
add_action('init', 'create_post_type_news');
// サムネイルをサポート
add_theme_support('post-thumbnails');

// カスタムフィールドを有効にする
function enable_custom_fields()
{
    add_post_type_support('schedule', 'custom-fields');
}
add_action('init', 'enable_custom_fields');

// カスタムフィールドの保存
function save_custom_field($post_id)
{
    // 投稿タイプが'schedule'であることを確認
    if (get_post_type($post_id) !== 'schedule') {
        return;
    }

    // 非表示フィールドが設定されていない場合は終了
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // カスタムフィールドの値を取得
    $google_map_link = isset($_POST['google_map_link']) ? $_POST['google_map_link'] : '';

    // カスタムフィールドを更新
    update_post_meta($post_id, 'google_map_link', sanitize_text_field($google_map_link));
}
add_action('save_post', 'save_custom_field');

// 投稿編集画面にカスタムフィールドを表示
function add_custom_meta_box()
{
    add_meta_box(
        'custom_meta_box', // メタボックスID
        'Googleマップリンク', // タイトル
        'show_custom_meta_box', // コールバック関数
        'schedule', // 投稿タイプ
        'normal', // 表示場所
        'high' // 表示優先度
    );
}
add_action('add_meta_boxes', 'add_custom_meta_box');

// メタボックスの内容を表示
function show_custom_meta_box()
{
    global $post;
    $google_map_link = get_post_meta($post->ID, 'google_map_link', true);
    echo '<label for="google_map_link">Googleマップリンク:</label>';
    echo '<input type="url" id="google_map_link" name="google_map_link" value="' . esc_attr($google_map_link) . '" style="width:100%;" />';
}




// 抜粋の文字数を調整
function custom_excerpt_length($content, $length = 40)
{
    $content = strip_tags($content);
    if (mb_strlen($content) > $length) {
        $content = mb_substr($content, 0, $length) . '...';
    }
    return $content;
}

// Scheduleリストのコンテンツを表示
function custom_schedule_list_content($paged = 1, $posts_per_page = 4, $show_pagination = true)
{
    $query_args = array(
        'post_type'      => 'schedule',
        'posts_per_page' => $posts_per_page,
        'paged'          => $paged,
        'order'          => 'DESC',
        'orderby'        => 'date'
    );
    $the_query = new WP_Query($query_args);
    if ($the_query->have_posts()) {
        echo '<ul class="custom-schedule-list">';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $content = get_the_content();
            $date_format = 'Y.m.d';
            $date = get_the_date($date_format);
            $timestamp = get_the_time('U');
            $weekday = date('D', $timestamp);
            $excerpt = mb_substr(strip_tags($content), 0, 80);
            $remaining_content = mb_substr(strip_tags($content), 80);
            $google_map_link = get_post_meta(get_the_ID(), 'google_map_link', true);

            echo '<li class="schedule-item">';
            if (has_post_thumbnail()) {
                echo '<div class="schedule-thumbnail">' . get_the_post_thumbnail() . '</div>';
            }
            echo '<div class="schedule-date">' . $date . ' (' . strtoupper($weekday) . ')</div>';
            echo '<div class="schedule-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></div>';
            echo '<div class="schedule-content-wrapper">';
            echo '<div class="schedule-content">' . $excerpt . '</div>';
            if (!empty($remaining_content)) {
                echo '<div class="schedule-remaining-content" style="display:none;">' . $remaining_content . '</div>';
                echo '<div class="schedule-btn"><button class="toggle-content-btn">▼</button></div>';
            }
            if ($google_map_link) {
                $page_class = is_front_page() ? 'top-page-schedule' : 'schedule-page-schedule';
                echo '<a href="' . esc_url($google_map_link) . '" class="google-map-link ' . $page_class . '">Google Map</a>';
            }
            echo '</div>';
            echo '</li>';
        }
        echo '</ul>';

        if ($show_pagination) {
            // ページネーションリンクの生成
            $big = 999999999; // need an unlikely integer
            $pagination_args = array(
                'base'    => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format'  => '?paged=%#%',
                'current' => max(1, $paged),
                'total'   => $the_query->max_num_pages
            );
            echo '<div class="pagination">';
            echo paginate_links($pagination_args);
            echo '</div>';
        }
    } else {
        echo '<p class="no-schedule">Scheduleはまだありません。</p>';
    }
    wp_reset_postdata();
}

// カスタムスケジュールリストのショートコード
function custom_schedule_list_shortcode($atts)
{
    ob_start();
    $atts = shortcode_atts(array('posts_per_page' => 4, 'show_pagination' => true), $atts, 'schedule_list');
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    custom_schedule_list_content($paged, $atts['posts_per_page'], filter_var($atts['show_pagination'], FILTER_VALIDATE_BOOLEAN));
    return ob_get_clean();
}
add_shortcode('schedule_list', 'custom_schedule_list_shortcode');
