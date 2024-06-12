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
    // JavaScriptファイルの読み込み
    wp_enqueue_script('script-js', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
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
            'supports' => array('title', 'editor', 'thumbnail'),
            'show_in_rest' => true,
        )
    );
}
add_action('init', 'create_post_type_news');

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
function custom_schedule_list_content()
{
    $posts_per_page = 4;
    $query_args = array(
        'post_type'      => 'schedule',
        'posts_per_page' => $posts_per_page,
        'paged'          => 1, // 常に最初のページを表示
        'order'          => 'DESC',
        'orderby'        => 'date'
    );
    $the_query = new WP_Query($query_args);
    if ($the_query->have_posts()) {
        echo '<ul class="custom-schedule-list">';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            $content = get_the_content();
            echo '<li class="schedule-item">';
            echo '<div class="schedule-date">' . get_the_date('Y.m.d') . '</div>';
            echo '<div class="schedule-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></div>';
            echo '<div class="schedule-content" data-content="' . esc_attr($content) . '">' . custom_excerpt_length($content, 40) . '</div>';
            echo '</li>';
        }
        echo '</ul>';
    } else {
        echo '<p class="no-schedule">Scheduleはまだありません。</p>';
    }
    wp_reset_postdata();
}
