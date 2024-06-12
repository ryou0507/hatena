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
            <h2 class="zabuton-beside top-h2">
                <p>プロフィール</p>
            </h2>
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
            <h2 class="zabuton-beside-2 top-h2 ">
                <p class="schedule-h2">スケジュール</p>
            </h2>
            <div class="profile-vertical text02">どんな一日も生き抜いただけで満点◎</div>
            <?php custom_schedule_list_content(); ?>

            <div class="btn-container">
                <a href="" class="custom-btn">view more</a>
            </div>
        </section>

        <section class="movie-container">
            <p class="kana kana03">movie</p>
            <h2 class="zabuton-beside-3 top-h2 movie-h2">動画</h2>
            <div class="profile-vertical text03">夢を人質に奪われた世界を取り戻せるかな</div>
            <div class="movie-thumbnail-content">
                <div class="movie-thumbnail-container">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movie-1.png" alt="" class="movie-thumbnail" id="thumbnail-1">
                </div>
                <div id="videoModal-1" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <iframe id="video-1" width="320" height="180" src="https://www.youtube.com/embed/gsvgu-dlJz8?si=ljobtv4u_9zYa24-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="movie-thumbnail-container">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movie-2.png" alt="" class="movie-thumbnail" id="thumbnail-2">
                </div>
                <div id="videoModal-2" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <iframe id="video-2" width="320" height="180" src="https://www.youtube.com/embed/hq_3UqFaXFE?si=N06ZSHoDfHZKVfZm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="movie-thumbnail-container">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movie-3.png" alt="" class="movie-thumbnail" id="thumbnail-3">
                </div>
                <div id="videoModal-3" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <iframe id="video-3" width="320" height="180" src="https://www.youtube.com/embed/beRsnPv4yNc?si=isNNiUfhxYcZoS6i" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="movie-btn-container">
                <a href="" class="custom-btn">view more</a>
            </div>
        </section>

        <section class="lyrics-container">
            <p class="kana kana04">lyrics</p>
            <h2 class="zabuton-beside-4 top-h2 lyrics-h2">リリック</h2>
            <div class="profile-vertical text04">明日は僕が電車をとめてしまうかも</div>
            <div class="lyrics-items">
                <div class="lyrics-sub">
                    <h3>
                        <p><span>01</span>拗け</p>
                    </h3>
                </div>
            </div>
    </div>
</div>

<?php get_footer(); ?>