<?php

/*
Template Name: movies
*/
get_header(); // ヘッダーの読み込み

?>
<div class="movies-all-container">
    <section class="movies-firstview-section">
        <div class="movies-firstview-container">
            <div class="vertical-bar"></div>
            <p class="movies-subtitle">movies</p>
            <div class="horizontal-bar">
                <h1 class="movies-title">動画</h1>
            </div>
        </div>
    </section>

    <section class="movies-jacket-section">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movies-top-item.jpg" alt="" class="movies-jacket">
    </section>

    <section class="movies-thumbnail-section custom">
        <div class="grid-container">
            <div class="black-bar"></div>
            <div class="thumbnail-container scroll-up" id="movies-01">
                <div class="thumbnail-01">
                    <p class="thumbnail-title">01　拗け</p>
                    <div class="video-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movie-1.png" alt="">
                        <a href="https://www.youtube.com/watch?v=gsvgu-dlJz8" target="_blank">
                            <svg class="play-icon-movies" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                                <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                            </svg>
                        </a>
                    </div>
                    <a class="to-lyrics" href="<?php echo home_url('/lyrics/#lyrics-01'); ?>">lyricsはこちら<svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                            <path d="M1.25732 11.5146L6.51464 6.25733L1.25732 1.00002" stroke="white" />
                        </svg></a>
                </div>
            </div>
        </div>

        <div class="grid-container">
            <div class="black-bar"></div>
            <div class="thumbnail-container scroll-up" id="movies-02">
                <div class="thumbnail-02">
                    <p class="thumbnail-title">02　卒業</p>
                    <div class="video-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movie-2.png" alt="">
                        <a href="https://www.youtube.com/watch?v=hq_3UqFaXFE" target="_blank">
                            <svg class="play-icon-movies" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                                <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                            </svg>
                    </div>
                    <a class="to-lyrics" href="<?php echo home_url('/lyrics/#lyrics-02'); ?>">lyricsはこちら<svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                            <path d="M1.25732 11.5146L6.51464 6.25733L1.25732 1.00002" stroke="white" />
                        </svg></a>
                </div>
            </div>
        </div>
        <div class="grid-container">
            <div class="black-bar"></div>
            <div class="thumbnail-container scroll-up" id="movies-03">
                <div class="thumbnail-03">
                    <p class="thumbnail-title">03　読書</p>
                    <div class="video-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movie-3.png" alt="">
                        <a href="https://www.youtube.com/watch?v=beRsnPv4yNc" target="_blank"><svg class="play-icon-movies" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                                <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                            </svg>
                    </div>
                    <a class="to-lyrics" href="<?php echo home_url('/lyrics/#lyrics-03'); ?>">lyricsはこちら<svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                            <path d="M1.25732 11.5146L6.51464 6.25733L1.25732 1.00002" stroke="white" />
                        </svg></a>
                </div>
            </div>
        </div>
        <div class="grid-container">
            <div class="black-bar"></div>
            <div class="thumbnail-container scroll-up" id="movies-04">
                <div class="thumbnail-04">
                    <p class="thumbnail-title">04　夜明け</p>
                    <div class="video-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movies-4.png" alt="">
                        <a href="https://www.youtube.com/watch?v=6nyWg0ycjaA" target="_blank"><svg class="play-icon-movies" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                                <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                            </svg>
                    </div>
                    <a class="to-lyrics" href="<?php echo home_url('/lyrics/#lyrics-04'); ?>">lyricsはこちら<svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                            <path d="M1.25732 11.5146L6.51464 6.25733L1.25732 1.00002" stroke="white" />
                        </svg></a>
                </div>
            </div>
        </div>
        <div class="grid-container">
            <div class="black-bar"></div>
            <div class="thumbnail-container scroll-up" id="movies-05">
                <div class="thumbnail-05">
                    <p class="thumbnail-title">05　あいす</p>
                    <div class="video-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movies-5.png" alt="">
                        <a href="https://www.youtube.com/watch?v=P15PMDSIUb0" target="_blank"><svg class="play-icon-movies" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                                <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                            </svg>
                    </div>
                    <a class="to-lyrics" href="<?php echo home_url('/lyrics/#lyrics-05'); ?>">lyricsはこちら<svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                            <path d="M1.25732 11.5146L6.51464 6.25733L1.25732 1.00002" stroke="white" />
                        </svg></a>
                </div>
            </div>
        </div>
        <div class="grid-container">
            <div class="black-bar"></div>
            <div class="thumbnail-container scroll-up" id="movies-06">
                <div class="thumbnail-06">
                    <p class="thumbnail-title">06　ハッピーエンド</p>
                    <div class="video-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movies-6.png" alt="">
                        <a href="https://www.youtube.com/watch?v=ZBNbUn4yYrk" target="_blank"><svg class="play-icon-movies" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                                <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                            </svg>
                    </div>
                    <a class="to-lyrics" href="<?php echo home_url('/lyrics/#lyrics-06'); ?>">lyricsはこちら<svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                            <path d="M1.25732 11.5146L6.51464 6.25733L1.25732 1.00002" stroke="white" />
                        </svg></a>
                </div>
            </div>
        </div>
        <div class="grid-container">
            <div class="black-bar"></div>
            <div class="thumbnail-container scroll-up" id="movies-07">
                <div class="thumbnail-07">
                    <p class="thumbnail-title">07　ペルソナ</p>
                    <div class="video-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movies-7.png" alt="">
                        <a href="https://www.youtube.com/watch?v=mV4quLRSdu8" target="_blank"><svg class="play-icon-movies" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                                <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                            </svg>
                    </div>
                    <a class="to-lyrics" href="<?php echo home_url('/lyrics/#lyrics-07'); ?>">lyricsはこちら<svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                            <path d="M1.25732 11.5146L6.51464 6.25733L1.25732 1.00002" stroke="white" />
                        </svg></a>
                </div>
            </div>
        </div>
        <div class="grid-container">
            <div class="black-bar"></div>
            <div class="thumbnail-container scroll-up" id="movies-08">
                <div class="thumbnail-08">
                    <p class="thumbnail-title">08　玻璃の心</p>
                    <div class="video-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movies-8.png" alt="">
                        <a href="https://www.youtube.com/watch?v=gj7iRs9y59U" target="_blank"><svg class="play-icon-movies" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                                <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                            </svg>
                    </div>
                    <a class="to-lyrics" href="<?php echo home_url('/lyrics/#lyrics-08'); ?>">lyricsはこちら<svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                            <path d="M1.25732 11.5146L6.51464 6.25733L1.25732 1.00002" stroke="white" />
                        </svg></a>
                </div>
            </div>
        </div>
        <div class="grid-container">
            <div class="black-bar"></div>
            <div class="thumbnail-container scroll-up" id="movies-09">
                <div class="thumbnail-09">
                    <p class="thumbnail-title">09　かいせい</p>
                    <div class="video-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movies-9.png" alt="">
                        <a href="https://www.youtube.com/watch?v=VHULefgz_ow" target="_blank"><svg class="play-icon-movies" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                                <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                            </svg>
                    </div>
                    <a class="to-lyrics" href="<?php echo home_url('/lyrics/#lyrics-09'); ?>">lyricsはこちら<svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                            <path d="M1.25732 11.5146L6.51464 6.25733L1.25732 1.00002" stroke="white" />
                        </svg></a>
                </div>
            </div>
        </div>
        <div class="grid-container">
            <div class="black-bar"></div>
            <div class="thumbnail-container scroll-up" id="movies-10">
                <div class="thumbnail-10">
                    <p class="thumbnail-title">10　せんたく</p>
                    <div class="video-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movies-10.png" alt="">
                        <a href="https://www.youtube.com/watch?v=7aAHycbsr5c" target="_blank"><svg class="play-icon-movies" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                                <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                            </svg>
                    </div>
                    <a class="to-lyrics" href="<?php echo home_url('/lyrics/#lyrics-10'); ?>">lyricsはこちら<svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                            <path d="M1.25732 11.5146L6.51464 6.25733L1.25732 1.00002" stroke="white" />
                        </svg></a>
                </div>
            </div>
        </div>
        <div class="grid-container">
            <div class="black-bar"></div>
            <div class="thumbnail-container scroll-up" id="movies-11">
                <div class="thumbnail-11">
                    <p class="thumbnail-title">11　種明かしなんて嫌いだ</p>
                    <div class="video-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movies-11.png" alt="">
                        <a href="https://www.youtube.com/watch?v=toUKFmqvYKE" target="_blank"><svg class="play-icon-movies" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                                <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                            </svg>
                    </div>
                    <a class="to-lyrics" href="<?php echo home_url('/lyrics/#lyrics-11'); ?>">lyricsはこちら<svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                            <path d="M1.25732 11.5146L6.51464 6.25733L1.25732 1.00002" stroke="white" />
                        </svg></a>
                </div>
            </div>
        </div>
        <div class="grid-container">
            <div class="black-bar"></div>
            <div class="thumbnail-container scroll-up" id="movies-12">
                <div class="thumbnail-12">
                    <p class="thumbnail-title long-title-12">12　多分うまく笑えてないけど</p>
                    <div class="video-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movies-12.png" alt="">
                        <a href="https://www.youtube.com/watch?v=2v3T7fP_P2I" target="_blank"><svg class="play-icon-movies" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                                <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                            </svg>
                    </div>
                    <a class="to-lyrics long-12" href="<?php echo home_url('/lyrics/#lyrics-12'); ?>">lyricsはこちら<svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                            <path d="M1.25732 11.5146L6.51464 6.25733L1.25732 1.00002" stroke="white" />
                        </svg></a>
                </div>
            </div>
        </div>
        <div class="grid-container">
            <div class="black-bar"></div>
            <div class="thumbnail-container scroll-up" id="movies-13">
                <div class="thumbnail-13">
                    <p class="thumbnail-title">13　匿名</p>
                    <div class="video-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movies-13.png" alt="">
                        <a href="https://www.youtube.com/watch?v=zQIUGyDDPV0" target="_blank"><svg class="play-icon-movies" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                                <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                            </svg>
                    </div>
                    <a class="to-lyrics" href="<?php echo home_url('/lyrics/#lyrics-13'); ?>">lyricsはこちら<svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                            <path d="M1.25732 11.5146L6.51464 6.25733L1.25732 1.00002" stroke="white" />
                        </svg></a>
                </div>
            </div>
        </div>
        <div class="grid-container">
            <div class="black-bar"></div>
            <div class="thumbnail-container scroll-up" id="movies-14">
                <div class="thumbnail-14">
                    <p class="thumbnail-title">14　むじょうけんこうふく</p>
                    <div class="video-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movies-14.png" alt="">
                        <a href="https://www.youtube.com/watch?v=K5Qi3riKvXM" target="_blank"><svg class="play-icon-movies" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                                <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                            </svg>
                    </div>
                    <a class="to-lyrics" href="<?php echo home_url('/lyrics/#lyrics-14'); ?>">lyricsはこちら<svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                            <path d="M1.25732 11.5146L6.51464 6.25733L1.25732 1.00002" stroke="white" />
                        </svg></a>
                </div>
            </div>
        </div>
        <div class="grid-container">
            <div class="black-bar"></div>
            <div class="thumbnail-container scroll-up" id="movies-15">
                <div class="thumbnail-15">
                    <p class="thumbnail-title">15　今日も生き抜いたキミへ</p>
                    <div class="video-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movies-15.png" alt="">
                        <a href="https://www.youtube.com/watch?v=bwtomFQIEcQ" target="_blank"><svg class="play-icon-movies" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                                <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                            </svg>
                    </div>
                    <a class="to-lyrics" href="<?php echo home_url('/lyrics/#lyrics-15'); ?>">lyricsはこちら<svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                            <path d="M1.25732 11.5146L6.51464 6.25733L1.25732 1.00002" stroke="white" />
                        </svg></a>
                </div>
            </div>
        </div>
        <div class="grid-container">
            <div class="black-bar"></div>
            <div class="thumbnail-container scroll-up" id="movies-16">
                <div class="thumbnail-16">
                    <p class="thumbnail-title">16　ステンドグラス</p>
                    <div class="video-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movies-16.png" alt="">
                        <a href="https://www.youtube.com/watch?v=r0ul_aZalew" target="_blank"><svg class="play-icon-movies" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                                <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                            </svg>
                    </div>
                    <a class="to-lyrics" href="<?php echo home_url('/lyrics/#lyrics-16'); ?>">lyricsはこちら<svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                            <path d="M1.25732 11.5146L6.51464 6.25733L1.25732 1.00002" stroke="white" />
                        </svg></a>
                </div>
            </div>
        </div>
        <div class="grid-container">
            <div class="black-bar"></div>
            <div class="thumbnail-container scroll-up" id="movies-17">
                <div class="thumbnail-17">
                    <p class="thumbnail-title">17　衷心より</p>
                    <div class="video-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movies-17.png" alt="">
                        <a href="https://www.youtube.com/watch?v=UbkNiU2zuaE" target="_blank"><svg class="play-icon-movies" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                                <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                            </svg>
                    </div>
                    <a class="to-lyrics" href="<?php echo home_url('/lyrics/#lyrics-17'); ?>">lyricsはこちら<svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                            <path d="M1.25732 11.5146L6.51464 6.25733L1.25732 1.00002" stroke="white" />
                        </svg></a>
                </div>
            </div>
        </div>
        <div class="grid-container">
            <div class="black-bar"></div>
            <div class="thumbnail-container scroll-up" id="movies-18">
                <div class="thumbnail-18">
                    <p class="thumbnail-title">18　PERSON</p>
                    <div class="video-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movies-18.png" alt="">
                        <a href="https://www.youtube.com/watch?v=tJfMAwtk-xo" target="_blank"><svg class="play-icon-movies" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                                <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                            </svg>
                    </div>
                    <a class="to-lyrics" href="<?php echo home_url('/lyrics/#lyrics-18'); ?>">lyricsはこちら<svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                            <path d="M1.25732 11.5146L6.51464 6.25733L1.25732 1.00002" stroke="white" />
                        </svg></a>
                </div>
            </div>
        </div>
        <div class="grid-container">
            <div class="black-bar"></div>
            <div class="thumbnail-container scroll-up" id="movies-19">
                <div class="thumbnail-19">
                    <p class="thumbnail-title long-title-12">19　今日まで生き抜いたキミへ</p>
                    <div class="video-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movies-19.png" alt="">
                        <a href="https://www.youtube.com/watch?v=cGgDIW-5QAo" target="_blank"><svg class="play-icon-movies movies19" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                                <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                            </svg>
                    </div>
                    <a class="to-lyrics long-12" href="<?php echo home_url('/lyrics/#lyrics-19'); ?>">lyricsはこちら<svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                            <path d="M1.25732 11.5146L6.51464 6.25733L1.25732 1.00002" stroke="white" />
                        </svg></a>
                </div>
            </div>
        </div>
        <div class="grid-container">
            <div class="black-bar"></div>
            <div class="thumbnail-container scroll-up" id="movies-20">
                <div class="thumbnail-20">
                    <p class="thumbnail-title">20　妄想GoodNight</p>
                    <div class="video-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movies-20.png" alt="">
                        <a href="https://www.youtube.com/watch?v=pzrQo0zWebA" target="_blank"><svg class="play-icon-movies" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                                <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                            </svg>
                    </div>
                    <a class="to-lyrics" href="<?php echo home_url('/lyrics/#lyrics-20'); ?>">lyricsはこちら<svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                            <path d="M1.25732 11.5146L6.51464 6.25733L1.25732 1.00002" stroke="white" />
                        </svg></a>
                </div>
            </div>
        </div>
        <div class="grid-container">
            <div class="black-bar"></div>
            <div class="thumbnail-container scroll-up" id="movies-21">
                <div class="thumbnail-21">
                    <p class="thumbnail-title long-title-14">21　キミがいる・・・、僕に成る。</p>
                    <div class="video-container">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/movies-21.png" alt="">
                        <a href="https://www.youtube.com/watch?v=LvkTpAbeRP8" target="_blank">
                            <svg class="play-icon-movies movies21" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
                                <circle cx="25" cy="25" r="25" fill="black" fill-opacity="0.5" />
                                <path d="M33.5 24.134C34.1667 24.5189 34.1667 25.4811 33.5 25.866L21.5 32.7942C20.8333 33.1791 20 32.698 20 31.9282V18.0718C20 17.302 20.8333 16.8209 21.5 17.2058L33.5 24.134Z" fill="white" />
                            </svg>
                    </div>
                    <a class="to-lyrics long-14" href="<?php echo home_url('/lyrics/#lyrics-21'); ?>">lyricsはこちら<svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12" fill="none">
                            <path d="M1.25732 11.5146L6.51464 6.25733L1.25732 1.00002" stroke="white" />
                        </svg></a>
                </div>
                <div class="ctc-container custom">
                    <a href="<?php echo home_url('/inquiry'); ?>" class="contact-btn">お問い合わせ</a>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>