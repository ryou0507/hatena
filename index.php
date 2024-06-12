<?php get_header(); // ヘッダーの読み込み 
?>

<section class="firstview-container" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/images/firstview.png'); background-color: #500E70; background-blend-mode: multiply; background-size: cover; background-position: center;">
    <h1 class="firstview-logo">
        <p class="jap">隠世はてな</p>
        <p class="roman">hatena kakuriyo</p>
    </h1>
    <div class="firstview-text">
        <div class="vertical-text right-text">辛いよね、私も一緒。</div>
        <div class="vertical-text center-text">そんなときの拠り所。</div>
        <div class="vertical-text left-text">
            <p>隠世はてな</p>
        </div>
    </div>
</section>

<section class="jacket-container">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/jacket01.jpg" alt="" class="">
</section>

<div class="main-container">
    <div class="zabuton-vertical">
        <div class="profile-vertical text01">何も捨ててしまわなくていいよおもいなら僕が預かるから</div>
    </div>

    <div class="all-container">
        <section class="profile-container">
            <p class="kana kana01">profile</p>
            <h2 class="zabuton-beside top-h2">プロフィール</h2>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/profile.png" alt="" class="profile-image">
            <ul>
                <p class="furigana">かくりよ</p>
                <p class="profile-name">隠世はてな</p>
                <li>匿名と陰鬱をコンセプトとして、2020年7月に活動を開始。</li><br>
                <li>2022年には初のワンマンライブでチケットをソールドアウト。</li><br>
                <li>現在は弾き語りライブ、クラブイベントなど、ソロアーティストとしてステージに立っている。</li>
            </ul>
        </section>

        <section class="schedule-container">
            <p class="kana kana02">schedule</p>
            <h2 class="zabuton-beside-2 top-h2">スケジュール</h2>
            <div class="profile-vertical text02">どんな一日も生き抜いただけで満点◎</div>
            <?php custom_schedule_list_content(); ?>

            <div class="btn-container">
                <a href="" class="custom-btn">view more</a>
            </div>
        </section>

        <section class="movie-container">
            <p class="kana kana03">movie</p>
            <h2 class="zabuton-beside-3 top-h2">動画</h2>
            <div class="profile-vertical text03">明日は僕が電車をとめてしまうかも</div>

            <div class="btn-container">
                <a href="" class="custom-btn">view more</a>
            </div>

        </section>

    </div>
</div>

<?php get_footer(); ?>