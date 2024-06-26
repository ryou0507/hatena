<!-- SP トップページ -->




<section class="firstview-container" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/images/firstview.png'); background-color: #500E70; background-blend-mode: multiply; background-size: cover; background-position: center;">
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

<?php get_header(); // ヘッダーの読み込み 
?>
<div class="sp-index-all-container">
    <section class="profile-container" id="profile">
        <div class="vertical-zabuton">
            <div class="vertical-zabuton-text">何も捨ててしまわなくていいよおもいなら僕が預かるから</div>
        </div>
        <div class="profile-header">
            <div class="horizontal-zabuton scroll-animate"></div>
            <p class="profile-subtitle scroll-animate">profile</p>
            <h2 class="profile-title scroll-animate">プロフィール</h2>
        </div>
        <div class="profile-content">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/profile.png" alt="" class="profile-image scroll-up">
            <div class="profile-box">
                <div class="profile-name scroll-up">
                    <p class="furigana">かくりよ</p>
                    <p class="main-name">隠世はてな</p>
                </div>
                <ul class="profile-description">
                    <li class="scroll-up">匿名と陰鬱をコンセプトとして、2020年7月に活動を開始。</li><br>
                    <li class="scroll-up">2022年には初のワンマンライブでチケットをソールドアウト。</li><br>
                    <li class="scroll-up">現在は弾き語りライブ、クラブイベントなど、ソロアーティストとしてステージに立っている。</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="schedule-container" id="schedule">
        <div class="vertical-zabuton">
            <div class="vertical-zabuton-text">どんな一日も生き抜いただけで満点◎</div>
        </div>
        <div class="schedule-header">
            <div class="horizontal-zabuton scroll-animate"></div>
            <p class="schedule-subtitle scroll-animate">schedule</p>
            <h2 class="schedule-title1 scroll-animate">スケジュール</h2>
        </div>
        <div class="schedule-content1 scroll-up">
            <?php echo do_shortcode('[schedule_list posts_per_page="2" show_pagination="false"]'); // トップページでは2件を表示 
            ?>
        </div>

        <div class="btn-container">
            <a href="<?php echo home_url(); ?>/schedule/" class="custom-btn">view more</a>
        </div>
    </section>

    <section class="movie-container" id="movies">
        <div class="vertical-zabuton">
            <div class="vertical-zabuton-text">夢を人質に奪われた世界を取り戻せるかな</div>
        </div>
        <div class="movie-header">
            <div class="horizontal-zabuton movie scroll-animate"></div>
            <p class="movie-subtitle scroll-animate">movies</p>
            <h2 class="movie-title scroll-animate">動画</h2>
        </div>

        <div class="movie-thumbnail-content">
            <div class="movie-thumbnail-container scroll-up">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movie-1.png" alt="" class="movie-thumbnail" id="thumbnail-1">
                <svg class="play-icon-movies top" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                    <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                    <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                </svg>
            </div>
            <div id="videoModal-1" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <iframe id="video-1" width="320" height="180" src="https://www.youtube.com/embed/gsvgu-dlJz8?si=ljobtv4u_9zYa24-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

            <div class="movie-thumbnail-container scroll-up">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movie-2.png" alt="" class="movie-thumbnail" id="thumbnail-2">
                <svg class="play-icon-movies top" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                    <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                    <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                </svg>
            </div>
            <div id="videoModal-2" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <iframe id="video-2" width="320" height="180" src="https://www.youtube.com/embed/hq_3UqFaXFE?si=N06ZSHoDfHZKVfZm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="movie-thumbnail-container scroll-up">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movie-3.png" alt="" class="movie-thumbnail" id="thumbnail-3">
                <svg class="play-icon-movies top" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                    <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                    <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                </svg>
            </div>
            <div id="videoModal-3" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <iframe id="video-3" width="320" height="180" src="https://www.youtube.com/embed/beRsnPv4yNc?si=isNNiUfhxYcZoS6i" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="btn-container">
                <a href="<?php echo home_url(); ?>/movies/" class="custom-btn">view more</a>
            </div>
        </div>
    </section>

    <section class="lyrics-container" id="lyrics">
        <div class="vertical-zabuton">
            <div class="vertical-zabuton-text">夢を人質に奪われた世界を取り戻せるかな</div>
        </div>
        <div class="lyrics-header">
            <div class="horizontal-zabuton lyrics scroll-animate"></div>
            <p class="lyrics-subtitle scroll-animate">lyrics</p>
            <h2 class="lyrics-title scroll-animate">リリック</h2>
        </div>
        <div class="lyrics-content">
            <div class="song-title-container">
                <h3 class="song-title scroll-animate-left">01 拗け</h3>
                <div class="horizontal-zabuton song scroll-animate-left"></div>
            </div>
            <div class="song-details">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>\images\movie-1.png" alt="拗け" class="song-thumbnail">
                <p class="song-lyrics">
                    理非も真偽もわからずに<br>
                    絆され翻弄され続けて<br>
                    誰かを信じることが怖くて<br>
                    一人を選んだの
                </p>
                <a href="<?php echo home_url('/lyrics/#lyrics-01'); ?>" class="more-link">more ></a>
            </div>
        </div>
        <div class="lyrics-content">
            <div class="song-title-container">
                <h3 class="song-title scroll-animate-left">02 卒業</h3>
                <div class="horizontal-zabuton song scroll-animate-left"></div>
            </div>
            <div class="song-details">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>\images\movie-2.png" alt="卒業" class="song-thumbnail">
                <p class="song-lyrics">
                    友達とふざけ合った休み時間<br>
                    寄り道した帰り道<br>
                    恋話した自習もふざけ合った体育も<br>
                    全部今だけだから
                </p>
                <a href="<?php echo home_url('/lyrics/#lyrics-02'); ?>" class="more-link">more ></a>
            </div>
        </div>
        <div class="lyrics-content">
            <div class="song-title-container">
                <h3 class="song-title scroll-animate-left">03 読書</h3>
                <div class="horizontal-zabuton song scroll-animate-left"></div>
            </div>
            <div class="song-details">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>\images\movie-3.png" alt="読書" class="song-thumbnail">
                <p class="song-lyrics">
                    失った時間、引き換えに得たものは<br>
                    あまり多くはありませんでした。<br>
                    失った視力、引き換えに得たものは<br>
                    自分を卑下する語彙ばかり。
                </p>
                <a href="<?php echo home_url('/lyrics/#lyrics-03'); ?>" class="more-link">more ></a>
            </div>
        </div>
        <div class="btn-container">
            <a href="<?php echo home_url(); ?>/lyrics/" class="custom-btn">view more</a>
        </div>
    </section>

    <section class="goods-container">
        <div class="vertical-zabuton">
            <div class="vertical-zabuton-text">宝箱の中身なんて知りたくなかった</div>
        </div>
        <div class="goods-header">
            <div class="horizontal-zabuton goods scroll-animate"></div>
            <p class="goods-subtitle scroll-animate">goods</p>
            <h2 class="goods-title scroll-animate">グッズ</h2>
        </div>
        <div class="goods-content">
            <div class="goods-item scroll-up">
                <div class="goods-image-container">
                    <svg xmlns="http://www.w3.org/2000/svg" width="167" height="167" viewBox="0 0 167 167" fill="none">
                        <circle cx="83.5" cy="83.5" r="83.5" fill="black" />
                    </svg>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hatena-stand.png" alt="Hatena Stand" class="goods-image">
                </div>
            </div>
        </div>
        <div class="btn-container">
            <a href="https://nplusy.booth.pm/" class="custom-btn">view more</a>
        </div>
        <div class="ctc-container">
            <a href="<?php echo home_url('/inquiry'); ?>" class="contact-btn">お問い合わせ</a>
        </div>
    </section>
</div>

<!-- PC トップページ -->
<div class="pc-index-all-container">
    <?php get_header(); // ヘッダーの読み込み 
    ?>

    <section class="pc-firstview-section">
        <div class="pc-firstview-container">
            <div class="firstview-left-container" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/images/pc-firstview-left.png'); background-color: #500E70; background-blend-mode: multiply; background-size: cover; background-position: center;">
                <div class="pc-firstview-text">
                    <div class="pc-vertical-text pc-right-text">辛いよね、私も一緒。</div>
                    <div class="pc-vertical-text pc-center-text">そんなときの拠り所。</div>
                    <div class="pc-vertical-text pc-left-text">
                        <p>隠世はてな</p>
                    </div>
                </div>
            </div>
            <div class="firstview-right-container">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/pc-firstview-right.png" alt="" class="">
                <div class="pc-firstview-nav">
                    <div class="pc-nav-text">
                        <a href="<?php echo home_url(); ?>/schedule/">schedule</a>
                        <a href="<?php echo home_url(); ?>/movies/">movie</a>
                        <a href="<?php echo home_url(); ?>/lyrics/">lyrics</a>
                        <a href="https://nplusy.booth.pm/">goods</a>
                        <a href="<?php echo home_url(); ?>/inquiry/">contact</a>
                    </div>
                    <div class="pc-nav-sns">
                        <div class="pc-nav-X-icon">
                            <a href="https://x.com/hatena_ny">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/pc-nav-x.png" alt="X icon" class="pc-nav-X-img" />
                            </a>
                        </div>
                        <div class="pc-nav-youtube-icon">
                            <a href="https://www.youtube.com/@kakuriyohatena">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/pc-nav-youtube.png" alt="youtube icon" class="pc-nav-youtube-img" />
                            </a>
                        </div>
                        <div class="pc-nav-tiktok-icon">
                            <a href="">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/pc-nav-tictok.png" alt="tiktok icon" class="pc-nav-tiktok-img" />
                            </a>
                        </div>
                        <div class="pc-nav-tunecore-text">
                            <a href="https://www.tunecore.co.jp/artists/kakuriyohatena.?lang=ja">tunecore</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pc-profile-section">
        <div class="pc-profile-container">
            <div class="profile-1st-container">
                <div class="top-horizontal-bar-left"></div>
                <div class="bottom-horizontal-bar-left"></div>
                <div class="pc-vertical-bar-left"></div>
            </div>
            <div class="profile-2nd-container">
                <div class="top-horizontal-bar"></div>
                <div class="bottom-horizontal-bar"></div>
                <div class="pc-vertical-bar">
                    <p>何も捨ててしまわなくていいよおもいなら僕が預かるから</p>
                </div>
            </div>
            <div class="profile-3rd-container">
                <div class="top-horizontal-bar-center"></div>
                <div class="bottom-horizontal-bar-center"></div>
                <div class="top-subtitle-horizontal-bar">
                    <p>profile</p>
                </div>
                <div class="bottom-title-horizontal-bar">
                    <p>プロフィール</p>
                </div>
                <div class="profile-main-content">
                    <div class="pc-profile-image-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/profile.png" alt="" class="pc-profile-img">
                    </div>
                    <div class="pc-profile-border"></div>
                    <div class="pc-profile-text-container">
                        <p class="name">隠世はてな</p>
                        <p class="details">匿名と陰鬱をコンセプトとして、2020年7月に活動を開始。<br>2022年には初のワンマンライブでチケットをソールドアウト。<br>現在は弾き語りライブ、クラブイベントなど、ソロアーティストとしてステージに立っている。</p>
                    </div>
                </div>
            </div>
            <div class="profile-4th-container">
                <div class="top-horizontal-bar-right"></div>
                <div class="bottom-horizontal-bar-right"></div>
                <div class="pc-vertical-bar-right"></div>
            </div>
        </div>
    </section>

    <section class="pc-schedule-section">
        <div class="pc-schedule-container">
            <div class="schedule-1st-container">
                <div class="top-horizontal-bar-left"></div>
                <div class="bottom-horizontal-bar-left"></div>
                <div class="pc-vertical-bar-left schedule">
                    <p>夢を人質に奪われた世界を取り戻せるかな</p>
                </div>
            </div>
            <div class="schedule-2nd-container">
                <div class="top-horizontal-bar"></div>
                <div class="bottom-horizontal-bar"></div>
                <div class="pc-vertical-bar schedule"></div>
            </div>
            <div class="schedule-3rd-container">
                <div class="top-horizontal-bar-center schedule">
                    <p>schedule</p>
                </div>
                <div class="bottom-horizontal-bar-center schedule">
                    <p>スケジュール</p>
                </div>
                <div class="schedule-main-content">
                    <?php echo do_shortcode('[schedule_list posts_per_page="2" show_pagination="false"]'); // トップページでは2件を表示 
                    ?>
                    <a href="<?php echo home_url(); ?>/schedule/" class="custom-btn pc-btn">view more</a>
                </div>
            </div>
            <div class="schedule-4th-container">
                <div class="pc-vertical-bar-right">
                    <p>どんな一日も生き抜いただけで満点◎</p>
                </div>
            </div>
        </div>

    </section>


    <section class="pc-movie-and-lyrics-section">
        <div class="pc-movies-and-lyrics-container">
            <div class="movies-1st-container">
                <div class="top-horizontal-bar-left"></div>
                <div class="bottom-horizontal-bar-left"></div>
                <div class="pc-vertical-bar-left-inner">
                    <p>宝箱の中身なんて知りたくなかった</p>
                </div>
                <div class="pc-vertical-bar-left movies"></div>
            </div>
            <div class="movies-2nd-container">
                <div class="top-horizontal-bar"></div>
                <div class="bottom-horizontal-bar"></div>
                <div class="pc-vertical-bar schedule movies"></div>
            </div>
            <div class="movies-3rd-container">
                <div class="top-horizontal-bar movies">
                    <p>movies</p>
                </div>
                <div class="bottom-horizontal-bar movies">
                    <p>動画</p>
                </div>
                <div class="movies-and-lyrics-main-content">
                    <div class="movie-thumbnail-content pc-movies">
                        <div class="movie-thumbnail-container scroll-up pc-movies">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movie-1.png" alt="" class="movie-thumbnail pc-movies" id="thumbnail-1">
                            <svg class="play-icon-movies top pc-movies" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                                <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                            </svg>
                        </div>
                        <div id="videoModal-1" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <iframe id="video-1" width="320" height="180" src="https://www.youtube.com/embed/gsvgu-dlJz8?si=ljobtv4u_9zYa24-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>

                        <div class="movie-thumbnail-container scroll-up pc-movies">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movie-2.png" alt="" class="movie-thumbnail pc-movies" id="thumbnail-2">
                            <svg class="play-icon-movies top pc-movies" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                                <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                            </svg>
                        </div>
                        <div id="videoModal-2" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <iframe id="video-2" width="320" height="180" src="https://www.youtube.com/embed/hq_3UqFaXFE?si=N06ZSHoDfHZKVfZm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="movie-thumbnail-container scroll-up pc-movies">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movie-3.png" alt="" class="movie-thumbnail pc-movies" id="thumbnail-3">
                            <svg class="play-icon-movies top pc-movies" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                                <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                            </svg>
                        </div>
                        <div id="videoModal-3" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <iframe id="video-3" width="320" height="180" src="https://www.youtube.com/embed/beRsnPv4yNc?si=isNNiUfhxYcZoS6i" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="btn-container pc-movies-btn">
                            <a href="<?php echo home_url(); ?>/movies/" class="custom-btn pc-movie-btn">view more</a>
                        </div>
                    </div>

                    <div class="pc-lyrics-container">
                        <div class="top-subtitle-horizontal-bar lyrics">
                            <p>lyrics</p>
                        </div>
                        <div class="bottom-title-horizontal-bar lyrics">
                            <p>リリック</p>
                        </div>
                        <div class="bottom-title-horizontal-bar lyrics-01">
                            <p>01 拗け</p>
                        </div>
                        <div class="pc-lyrics-text-container lyrics-text-01">
                            <p>理非も真偽もわからずに　絆され翻弄され続けて
                                誰かを信じることが怖くて　一人を選んだの</p>
                            <p>そっと呟く単純な四文字
                                ずっとずっと言って未だ
                                成功はしてないけど</p>
                            <p>冗談ぽく言った本当の言葉を君は拾ってくれるから</p>
                            <a href="<?php echo home_url('/lyrics/#lyrics-01'); ?>" class="more-link pc-link">more ></a>
                        </div>
                        <div class="bottom-title-horizontal-bar lyrics-02">
                            <p>02 卒業</p>
                        </div>
                        <div class="pc-lyrics-text-container lyrics-text-02">
                            <p>友達とふざけ合った休み時間
                                寄り道した帰り道
                                恋話した自習もふざけ合った体育も
                                全部今だけだから</p>
                            教科書に載ってない　たくさんの知識<br>
                            <p>わかんない授業のお話なんて　今度聞きに行けばいいから</p>
                            <a href="<?php echo home_url('/lyrics/#lyrics-02'); ?>" class="more-link pc-link">more ></a>
                        </div>
                        <div class="bottom-title-horizontal-bar lyrics-03">
                            <p>03 読書</p>
                        </div>
                        <div class="pc-lyrics-text-container lyrics-text-03">
                            <p>失った時間、引き換えに得たものは
                                あまり多くはありませんでした。
                                失った視力、引き換えに得たものは
                                自分を卑下する語彙ばかり。</p>
                            <p>取り繕った言葉のほつれ
                                気づいても直す術を知らず
                                汚い部分が露呈してゆく</p>
                            <a href="<?php echo home_url('/lyrics/#lyrics-03'); ?>" class="more-link pc-link">more ></a>
                        </div>
                        <div class="btn-container lyrics">
                            <a href="<?php echo home_url(); ?>/lyrics/" class="custom-btn pc-lyrics-btn">view more</a>
                        </div>
                    </div>
                </div>

                <div class="ctc-container pc-btn">
                    <a href="<?php echo home_url('/inquiry'); ?>" class="contact-btn pc-btn">お問い合わせ</a>
                </div>

            </div>
            <div class="movies-4th-container">
                <div class="top-horizontal-bar-right movies"></div>
                <div class="bottom-horizontal-bar-right movies"></div>
                <div class="pc-vertical-bar-right movies">
                    <p>明日は僕が電車をとめてしまうかも</p>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>