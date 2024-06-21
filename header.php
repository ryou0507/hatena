<?php
// 現在のURLを取得する関数
function getCurrentUrl()
{
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = $_SERVER['HTTP_HOST'];
    $requestUri = $_SERVER['REQUEST_URI'];
    return $protocol . $domainName . $requestUri;
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>隠世はてな official site</title>
    <?php wp_head(); ?>
</head>

<body>

    <!-- PCハンバーガーボタン -->
    <header class="header-container-pc" id="pc-header">
        <h1 class="header-logo-pc">
            <p class="jap-pc">隠世はてな</p>
            <p class="roman-pc">hatena kakuriyo</p>
        </h1>
        <div class="hamburger-btn-pc">
            <nav class="header-sp-nav-pc">
                <div class="hamburger-wrapper-pc">
                    <div class="hamburger-pc" id="hamburger-pc">
                        <div class="header-left-line-pc"></div>
                        <div class="header-left-line-pc"></div>
                    </div>
                </div>
                <div class="hamburger-menu-pc" id="hamburger-menu">
                    <div class="header-logo pc">
                        <p class="jap">隠世はてな</p>
                        <p class="roman">hatena kakuriyo</p>
                    </div>
                    <div class="flex-hamburger">
                        <div class="hamburger-text">
                            <div>辛いよね、私も一緒。</div>
                            <div>そんなときの拠り所。</div>
                        </div>
                        <ul class="nav-links pc" id="nav-links">
                            <div class="links-container pc">
                                <li class="top-text"><a href="<?php echo home_url('/'); ?>">home</a></li>
                                <li class="bottom-text"><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
                            </div>
                            <div class="links-container pc">
                                <li class="top-text"><a href="<?php echo home_url('/#profile'); ?>">profile</a></li>
                                <li class="bottom-text"><a href="<?php echo home_url('/#profile'); ?>">プロフィール</a></li>
                            </div>
                            <div class="links-container pc">
                                <li class="top-text"><a href="<?php echo home_url('/#schedule'); ?>">schedule</a></li>
                                <li class="bottom-text"><a href="<?php echo home_url('/#schedule'); ?>">スケジュール</a></li>
                            </div>
                            <div class="links-container pc">
                                <li class="top-text"><a href="<?php echo home_url('/#movies'); ?>">movies</a></li>
                                <li class="bottom-text"><a href="<?php echo home_url('/#movies'); ?>">動画</a></li>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/polygon.svg" alt="" class="hamburger-movies-polygon pc" data-target="movies-submenu-pc">
                            </div>
                            <div class="links-container pc">
                                <li class="top-text"><a href="<?php echo home_url('/#lyrics'); ?>">lyrics</a></li>
                                <li class="bottom-text"><a href="<?php echo home_url('/#lyrics'); ?>">リリック</a></li>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/polygon.svg" alt="" class="hamburger-lyrics-polygon pc" data-target="lyrics-submenu1-pc">
                            </div>
                            <div class="links-container pc">
                                <li class="top-text"><a href="https://nplusy.booth.pm/">goods</a></li>
                                <li class="bottom-text"><a href="https://nplusy.booth.pm/">グッズ</a></li>
                            </div>

                            <div class="hamburger-submenu-sns pc">
                                <div class="hamburger-X-icon">
                                    <a href="https://x.com/hatena_ny">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-x-logo.png" alt="X icon" class="hamburger-X-img" />
                                    </a>
                                </div>
                                <div class="hamburger-youtube-icon">
                                    <a href="https://www.youtube.com/@kakuriyohatena">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-youtube-logo.png" alt="youtube icon" class="hamburger-youtube-img" />
                                    </a>
                                </div>
                                <div class="hamburger-tiktok-icon">
                                    <a href="">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-tictok-logo.png" alt="tiktok icon" class="hamburger-tiktok-img" />
                                    </a>
                                </div>
                                <div class="hamburger-tunecore-text">
                                    <a href="https://www.tunecore.co.jp/artists/kakuriyohatena.?lang=ja">tunecore</a>
                                </div>
                            </div>
                            <div class="contact-button hamburger">
                                <a href="<?php echo home_url('/inquiry'); ?>">お問い合わせ</a>
                            </div>
                        </ul>
                    </div>
                    <div class="submenu-overlay pc" id="movies-submenu-pc">
                        <div class="header-logo pc submenu">
                            <p class="jap">隠世はてな</p>
                            <p class="roman">hatena kakuriyo</p>
                        </div>
                        <div class="flex-hamburger submenu">
                            <div class="hamburger-text s-menu">
                                <div>辛いよね、私も一緒。</div>
                                <div>そんなときの拠り所。</div>
                            </div>

                            <div class="submenu-wrapper">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/polygon-2.svg" alt="" class="hamburger-submenu-prev-polygon pc" data-target="nav-links">
                                <div class="submenu-top-text pc">
                                    <p class="submenu-top-eng">movies</p>
                                    <p class="submenu-top-jap">動画</p>
                                </div>
                                <ul class="submenu pc">
                                    <div class="submenu-pc">
                                        <li><a href="<?php echo home_url('/movies/#movies-01'); ?>">01 拗け</a></li>
                                        <li><a href="<?php echo home_url('/movies/#movies-02'); ?>">02 卒業</a></li>
                                        <li><a href="<?php echo home_url('/movies/#movies-03'); ?>">03 読書</a></li>
                                        <li><a href="<?php echo home_url('/movies/#movies-04'); ?>">04 夜明け</a></li>
                                        <li><a href="<?php echo home_url('/movies/#movies-05'); ?>">05 あいす</a></li>
                                        <li><a href="<?php echo home_url('/movies/#movies-06'); ?>">06 ハッピーエンド</a></li>
                                        <li><a href="<?php echo home_url('/movies/#movies-07'); ?>">07 ペルソナ</a></li>
                                        <li><a href="<?php echo home_url('/movies/#movies-08'); ?>">08 玻璃の心</a></li>
                                        <li><a href="<?php echo home_url('/movies/#movies-09'); ?>">09 かいせい</a></li>
                                        <li><a href="<?php echo home_url('/movies/#movies-10'); ?>">10 せんたく</a></li>
                                    </div>
                                    <div class="submenu-pc">
                                        <li><a href="<?php echo home_url('/movies/#movies-11'); ?>">11 種明かしなんて嫌いだ</a></li>
                                        <li><a href="<?php echo home_url('/movies/#movies-12'); ?>">12 多分うまく笑えてないけど</a></li>
                                        <li><a href="<?php echo home_url('/movies/#movies-13'); ?>">13 匿名</a></li>
                                        <li><a href="<?php echo home_url('/movies/#movies-14'); ?>">14 むじょうけんこうふく</a></li>
                                        <li><a href="<?php echo home_url('/movies/#movies-15'); ?>">15 今日も生き抜いたキミへ</a></li>
                                        <li><a href="<?php echo home_url('/movies/#movies-16'); ?>">16 ステンドグラス</a></li>
                                        <li><a href="<?php echo home_url('/movies/#movies-17'); ?>">17 衷心より</a></li>
                                        <li><a href="<?php echo home_url('/movies/#movies-18'); ?>">18 PERSON</a></li>
                                        <li><a href="<?php echo home_url('/movies/#movies-19'); ?>">19 今日まで生き抜いたキミへ</a></li>
                                        <li><a href="<?php echo home_url('/movies/#movies-20'); ?>">20 妄想GoodNight</a></li>
                                    </div>
                                    <div class="submenu-pc">
                                        <li><a href="<?php echo home_url('/movies/#movies-21'); ?>">21 キミがいる・・・、僕に成る。</a></li>
                                        <li><a href="<?php echo home_url(); ?>"></a></li>
                                        <li><a href="<?php echo home_url(); ?>"></a></li>
                                        <li><a href="<?php echo home_url(); ?>"></a></li>
                                        <li><a href="<?php echo home_url(); ?>"></a></li>
                                        <li><a href="<?php echo home_url(); ?>"></a></li>
                                        <li><a href="<?php echo home_url(); ?>"></a></li>
                                        <li><a href="<?php echo home_url(); ?>"></a></li>
                                        <li><a href="<?php echo home_url(); ?>"></a></li>
                                        <li><a href="<?php echo home_url(); ?>"></a></li>
                                    </div>

                                </ul>
                                <div class="hamburger-submenu-sns pc">
                                    <div class="hamburger-X-icon">
                                        <a href="https://x.com/hatena_ny">
                                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-x-logo.png" alt="X icon" class="hamburger-X-img" />
                                        </a>
                                    </div>
                                    <div class="hamburger-youtube-icon">
                                        <a href="https://www.youtube.com/@kakuriyohatena">
                                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-youtube-logo.png" alt="youtube icon" class="hamburger-youtube-img" />
                                        </a>
                                    </div>
                                    <div class="hamburger-tiktok-icon">
                                        <a href="">
                                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-tictok-logo.png" alt="tiktok icon" class="hamburger-tiktok-img" />
                                        </a>
                                    </div>
                                    <div class="hamburger-tunecore-text">
                                        <a href="https://www.tunecore.co.jp/artists/kakuriyohatena.?lang=ja">tunecore</a>
                                    </div>
                                </div>
                                <div class="contact-button hamburger">
                                    <a href="<?php echo home_url('/inquiry'); ?>">お問い合わせ</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="submenu-overlay pc" id="lyrics-submenu1-pc">
                        <div class="header-logo pc submenu">
                            <p class="jap">隠世はてな</p>
                            <p class="roman">hatena kakuriyo</p>
                        </div>
                        <div class="flex-hamburger submenu">
                            <div class="hamburger-text s-menu">
                                <div>辛いよね、私も一緒。</div>
                                <div>そんなときの拠り所。</div>
                            </div>

                            <div class="submenu-wrapper">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/polygon-2.svg" alt="" class="hamburger-submenu-prev-polygon pc" data-target="nav-links">
                                <div class="submenu-top-text pc">
                                    <p class="submenu-top-eng">lyrics</p>
                                    <p class="submenu-top-jap">リリック</p>
                                </div>
                                <ul class="submenu pc">
                                    <div class="submenu-pc">
                                        <li><a href="<?php echo home_url('/lyrics/#lyrics-01'); ?>">01 拗け</a></li>
                                        <li><a href="<?php echo home_url('/lyrics/#lyrics-02'); ?>">02 卒業</a></li>
                                        <li><a href="<?php echo home_url('/lyrics/#lyrics-03'); ?>">03 読書</a></li>
                                        <li><a href="<?php echo home_url('/lyrics/#lyrics-04'); ?>">04 夜明け</a></li>
                                        <li><a href="<?php echo home_url('/lyrics/#lyrics-05'); ?>">05 あいす</a></li>
                                        <li><a href="<?php echo home_url('/lyrics/#lyrics-06'); ?>">06 ハッピーエンド</a></li>
                                        <li><a href="<?php echo home_url('/lyrics/#lyrics-07'); ?>">07 ペルソナ</a></li>
                                        <li><a href="<?php echo home_url('/lyrics/#lyrics-08'); ?>">08 玻璃の心</a></li>
                                        <li><a href="<?php echo home_url('/lyrics/#lyrics-09'); ?>">09 かいせい</a></li>
                                        <li><a href="<?php echo home_url('/lyrics/#lyrics-10'); ?>">10 せんたく</a></li>
                                    </div>
                                    <div class="submenu-pc">
                                        <li><a href="<?php echo home_url('/lyrics/#lyrics-11'); ?>">11 種明かしなんて嫌いだ</a></li>
                                        <li><a href="<?php echo home_url('/lyrics/#lyrics-12'); ?>">12 多分うまく笑えてないけど</a></li>
                                        <li><a href="<?php echo home_url('/lyrics/#lyrics-13'); ?>">13 匿名</a></li>
                                        <li><a href="<?php echo home_url('/lyrics/#lyrics-14'); ?>">14 むじょうけんこうふく</a></li>
                                        <li><a href="<?php echo home_url('/lyrics/#lyrics-15'); ?>">15 今日も生き抜いたキミへ</a></li>
                                        <li><a href="<?php echo home_url('/lyrics/#lyrics-16'); ?>">16 ステンドグラス</a></li>
                                        <li><a href="<?php echo home_url('/lyrics/#lyrics-17'); ?>">17 衷心より</a></li>
                                        <li><a href="<?php echo home_url('/lyrics/#lyrics-18'); ?>">18 PERSON</a></li>
                                        <li><a href="<?php echo home_url('/lyrics/#lyrics-19'); ?>">19 今日まで生き抜いたキミへ</a></li>
                                        <li><a href="<?php echo home_url('/lyrics/#lyrics-20'); ?>">20 妄想GoodNight</a></li>
                                    </div>
                                    <div class="submenu-pc">
                                        <li><a href="<?php echo home_url('/lyrics/#lyrics-21'); ?>">21 キミがいる・・・、僕に成る。</a></li>
                                        <li><a href="<?php echo home_url(); ?>"></a></li>
                                        <li><a href="<?php echo home_url(); ?>"></a></li>
                                        <li><a href="<?php echo home_url(); ?>"></a></li>
                                        <li><a href="<?php echo home_url(); ?>"></a></li>
                                        <li><a href="<?php echo home_url(); ?>"></a></li>
                                        <li><a href="<?php echo home_url(); ?>"></a></li>
                                        <li><a href="<?php echo home_url(); ?>"></a></li>
                                        <li><a href="<?php echo home_url(); ?>"></a></li>
                                        <li><a href="<?php echo home_url(); ?>"></a></li>
                                    </div>

                                </ul>
                                <div class="hamburger-submenu-sns pc">
                                    <div class="hamburger-X-icon">
                                        <a href="https://x.com/hatena_ny">
                                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-x-logo.png" alt="X icon" class="hamburger-X-img" />
                                        </a>
                                    </div>
                                    <div class="hamburger-youtube-icon">
                                        <a href="https://www.youtube.com/@kakuriyohatena">
                                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-youtube-logo.png" alt="youtube icon" class="hamburger-youtube-img" />
                                        </a>
                                    </div>
                                    <div class="hamburger-tiktok-icon">
                                        <a href="">
                                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-tictok-logo.png" alt="tiktok icon" class="hamburger-tiktok-img" />
                                        </a>
                                    </div>
                                    <div class="hamburger-tunecore-text">
                                        <a href="https://www.tunecore.co.jp/artists/kakuriyohatena.?lang=ja">tunecore</a>
                                    </div>
                                </div>
                                <div class="contact-button hamburger">
                                    <a href="<?php echo home_url('/inquiry'); ?>">お問い合わせ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- .hamburger-menu-pc 終了 -->
            </nav> <!-- .header-sp-nav-pc 終了 -->
        </div> <!-- .hamburger-btn-pc 終了 -->
    </header>




    <!-- spハンバーガーボタン -->
    <header class="header-container" id="sp-header">
        <h1 class="header-logo">
            <p class="jap">隠世はてな</p>
            <p class="roman">hatena kakuriyo</p>
        </h1>
        <div class="hamburger-btn">
            <nav class="header-sp-nav">
                <div class="hamburger-wrapper">
                    <div class="hamburger" id="hamburger">
                        <div class="header-left-line"></div>
                        <div class="header-left-line"></div>
                    </div>
                </div>
                <div class="hamburger-menu">
                    <div class="close-area"></div>
                    <div class="hamburger-logo">
                        <p class="jap">隠世はてな</p>
                        <p class="roman">hatena kakuriyo</p>
                    </div>
                    <ul class="nav-links" id="nav-links">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/polygon.svg" alt="" class="hamburger-movies-polygon" data-target="movies-submenu">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/polygon.svg" alt="" class="hamburger-lyrics-polygon" data-target="lyrics-submenu1">

                        <div class="links-container">
                            <li class="top-text"><a href="<?php echo home_url('/'); ?>">home</a></li>
                            <li class="bottom-text"><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
                        </div>
                        <div class="links-container">
                            <li class="top-text"><a href="<?php echo home_url('/#profile'); ?>">profile</a></li>
                            <li class="bottom-text"><a href="<?php echo home_url('/#profile'); ?>">プロフィール</a></li>
                        </div>
                        <div class="links-container">
                            <li class="top-text"><a href="<?php echo home_url('/#schedule'); ?>">schedule</a></li>
                            <li class="bottom-text"><a href="<?php echo home_url('/#schedule'); ?>">スケジュール</a></li>
                        </div>
                        <div class="links-container">
                            <li class="top-text"><a href="<?php echo home_url('/#movies'); ?>">movies</a></li>
                            <li class="bottom-text"><a href="<?php echo home_url('/#movies'); ?>">動画</a></li>
                        </div>
                        <div class="links-container">
                            <li class="top-text"><a href="<?php echo home_url('/#lyrics'); ?>">lyrics</a></li>
                            <li class="bottom-text"><a href="<?php echo home_url('/#lyrics'); ?>">リリック</a></li>
                        </div>
                        <div class="links-container">
                            <li class="top-text"><a href="https://nplusy.booth.pm/">goods</a></li>
                            <li class="bottom-text"><a href="https://nplusy.booth.pm/">グッズ</a></li>
                        </div>
                    </ul>
                    <div class="hamburger-submenu-sns">
                        <div class="hamburger-X-icon">
                            <a href="https://x.com/hatena_ny">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-x-logo.png" alt="X icon" class="hamburger-X-img" />
                            </a>
                        </div>
                        <div class="hamburger-youtube-icon">
                            <a href="https://www.youtube.com/@kakuriyohatena">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-youtube-logo.png" alt="youtube icon" class="hamburger-youtube-img" />
                            </a>
                        </div>
                        <div class="hamburger-tiktok-icon">
                            <a href="">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-tictok-logo.png" alt="tiktok icon" class="hamburger-tiktok-img" />
                            </a>
                        </div>
                        <div class="hamburger-tunecore-text">
                            <a href="https://www.tunecore.co.jp/artists/kakuriyohatena.?lang=ja">tunecore</a>
                        </div>
                    </div>
                    <div class="contact-button">
                        <a href="<?php echo home_url('/inquiry'); ?>">お問い合わせ</a>
                    </div>

                    <div class="submenu-overlay" id="movies-submenu">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/polygon.svg" alt="" class="hamburger-submenu-next-polygon" data-target="next-movies-submenu">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/polygon-2.svg" alt="" class="hamburger-submenu-prev-polygon" data-target="nav-links">

                        <div class="submenu-top">
                            <div class="submenu-top-text">
                                <p class="submenu-top-eng">movies</p>
                                <p class="submenu-top-jap">動画</p>
                            </div>
                        </div>

                        <ul class="submenu">
                            <li><a href="<?php echo home_url('/movies/#movies-01'); ?>">01 拗け</a></li>
                            <li><a href="<?php echo home_url('/movies/#movies-02'); ?>">02 卒業</a></li>
                            <li><a href="<?php echo home_url('/movies/#movies-03'); ?>">03 読書</a></li>
                            <li><a href="<?php echo home_url('/movies/#movies-04'); ?>">04 夜明け</a></li>
                            <li><a href="<?php echo home_url('/movies/#movies-05'); ?>">05 あいす</a></li>
                            <li><a href="<?php echo home_url('/movies/#movies-06'); ?>">06 ハッピーエンド</a></li>
                            <li><a href="<?php echo home_url('/movies/#movies-07'); ?>">07 ペルソナ</a></li>
                            <li><a href="<?php echo home_url('/movies/#movies-08'); ?>">08 玻璃の心</a></li>
                            <li><a href="<?php echo home_url('/movies/#movies-09'); ?>">09 かいせい</a></li>
                            <li><a href="<?php echo home_url('/movies/#movies-10'); ?>">10 せんたく</a></li>
                        </ul>
                        <div class="hamburger-submenu-sns">
                            <div class="hamburger-X-icon">
                                <a href="https://x.com/hatena_ny">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-x-logo.png" alt="X icon" class="hamburger-X-img" />
                                </a>
                            </div>
                            <div class="hamburger-youtube-icon">
                                <a href="https://www.youtube.com/@kakuriyohatena">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-youtube-logo.png" alt="youtube icon" class="hamburger-youtube-img" />
                                </a>
                            </div>
                            <div class="hamburger-tiktok-icon">
                                <a href="">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-tictok-logo.png" alt="tiktok icon" class="hamburger-tiktok-img" />
                                </a>
                            </div>
                            <div class="hamburger-tunecore-text">
                                <a href="https://www.tunecore.co.jp/artists/kakuriyohatena.?lang=ja">tunecore</a>
                            </div>
                        </div>
                        <div class="contact-button">
                            <a href="<?php echo home_url('/inquiry'); ?>">お問い合わせ</a>
                        </div>
                    </div>
                    <div class="submenu-overlay" id="next-movies-submenu">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/polygon.svg" alt="" class="hamburger-submenu-next-polygon" data-target="new-submenu">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/polygon-2.svg" alt="" class="hamburger-submenu-prev-polygon" data-target="movies-submenu">

                        <div class="submenu-top">
                            <div class="submenu-top-text">
                                <p class="submenu-top-eng">movies</p>
                                <p class="submenu-top-jap">動画</p>
                            </div>
                        </div>
                        <ul class="submenu">
                            <li><a href="<?php echo home_url('/movies/#movies-11'); ?>">11 種明かしなんて嫌いだ</a></li>
                            <li><a href="<?php echo home_url('/movies/#movies-12'); ?>">12 多分うまく笑えてないけど</a></li>
                            <li><a href="<?php echo home_url('/movies/#movies-13'); ?>">13 匿名</a></li>
                            <li><a href="<?php echo home_url('/movies/#movies-14'); ?>">14 むじょうけんこうふく</a></li>
                            <li><a href="<?php echo home_url('/movies/#movies-15'); ?>">15 今日も生き抜いたキミへ</a></li>
                            <li><a href="<?php echo home_url('/movies/#movies-16'); ?>">16 ステンドグラス</a></li>
                            <li><a href="<?php echo home_url('/movies/#movies-17'); ?>">17 衷心より</a></li>
                            <li><a href="<?php echo home_url('/movies/#movies-18'); ?>">18 PERSON</a></li>
                            <li><a href="<?php echo home_url('/movies/#movies-19'); ?>">19 今日まで生き抜いたキミへ</a></li>
                            <li><a href="<?php echo home_url('/movies/#movies-20'); ?>">20 妄想GoodNight</a></li>
                        </ul>
                        <div class="hamburger-submenu-sns">
                            <div class="hamburger-X-icon">
                                <a href="https://x.com/hatena_ny">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-x-logo.png" alt="X icon" class="hamburger-X-img" />
                                </a>
                            </div>
                            <div class="hamburger-youtube-icon">
                                <a href="https://www.youtube.com/@kakuriyohatena">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-youtube-logo.png" alt="youtube icon" class="hamburger-youtube-img" />
                                </a>
                            </div>
                            <div class="hamburger-tiktok-icon">
                                <a href="">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-tictok-logo.png" alt="tiktok icon" class="hamburger-tiktok-img" />
                                </a>
                            </div>
                            <div class="hamburger-tunecore-text">
                                <a href="https://www.tunecore.co.jp/artists/kakuriyohatena.?lang=ja">tunecore</a>
                            </div>
                        </div>
                        <div class="contact-button">
                            <a href="<?php echo home_url('/inquiry'); ?>">お問い合わせ</a>
                        </div>
                    </div>

                    <div class="submenu-overlay-last" id="new-submenu">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/polygon-2.svg" alt="" class="hamburger-submenu-prev-polygon" data-target="next-movies-submenu">

                        <div class="submenu-top-last">
                            <div class="submenu-top-text">
                                <p class="submenu-top-eng">movies</p>
                                <p class="submenu-top-jap">動画</p>
                            </div>
                        </div>
                        <ul class="submenu">
                            <li><a href="<?php echo home_url('/movies/#movies-21'); ?>">21 キミがいる・・・、僕に成る。</a></li>
                            <li><a href="<?php echo home_url(); ?>"></a></li>
                            <li><a href="<?php echo home_url(); ?>"></a></li>
                            <li><a href="<?php echo home_url(); ?>"></a></li>
                            <li><a href="<?php echo home_url(); ?>"></a></li>
                            <li><a href="<?php echo home_url(); ?>"></a></li>
                            <li><a href="<?php echo home_url(); ?>"></a></li>
                            <li><a href="<?php echo home_url(); ?>"></a></li>
                            <li><a href="<?php echo home_url(); ?>"></a></li>
                            <li><a href="<?php echo home_url(); ?>"></a></li>
                        </ul>
                        <div class="hamburger-submenu-sns-last">
                            <div class="hamburger-X-icon">
                                <a href="https://x.com/hatena_ny">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-x-logo.png" alt="X icon" class="hamburger-X-img" />
                                </a>
                            </div>
                            <div class="hamburger-youtube-icon">
                                <a href="https://www.youtube.com/@kakuriyohatena">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-youtube-logo.png" alt="youtube icon" class="hamburger-youtube-img" />
                                </a>
                            </div>
                            <div class="hamburger-tiktok-icon">
                                <a href="">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-tictok-logo.png" alt="tiktok icon" class="hamburger-tiktok-img" />
                                </a>
                            </div>
                            <div class="hamburger-tunecore-text">
                                <a href="https://www.tunecore.co.jp/artists/kakuriyohatena.?lang=ja">tunecore</a>
                            </div>
                        </div>
                        <div class="contact-button">
                            <a href="<?php echo home_url('/inquiry'); ?>">お問い合わせ</a>
                        </div>
                    </div>

                    <!-- 新しいサブメニュー -->
                    <div class="submenu-overlay" id="lyrics-submenu1">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/polygon.svg" alt="" class="hamburger-submenu-next-polygon" data-target="lyrics-submenu2">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/polygon-2.svg" alt="" class="hamburger-submenu-prev-polygon" data-target="nav-links">
                        <div class="submenu-top">
                            <div class="submenu-top-text">
                                <p class="submenu-top-eng">lyrics</p>
                                <p class="submenu-top-jap">リリック</p>
                            </div>
                        </div>
                        <ul class="submenu">
                            <li><a href="<?php echo home_url('/lyrics/#lyrics-01'); ?>">01 拗け</a></li>
                            <li><a href="<?php echo home_url('/lyrics/#lyrics-02'); ?>">02 卒業</a></li>
                            <li><a href="<?php echo home_url('/lyrics/#lyrics-03'); ?>">03 読書</a></li>
                            <li><a href="<?php echo home_url('/lyrics/#lyrics-04'); ?>">04 夜明け</a></li>
                            <li><a href="<?php echo home_url('/lyrics/#lyrics-05'); ?>">05 あいす</a></li>
                            <li><a href="<?php echo home_url('/lyrics/#lyrics-06'); ?>">06 ハッピーエンド</a></li>
                            <li><a href="<?php echo home_url('/lyrics/#lyrics-07'); ?>">07 ペルソナ</a></li>
                            <li><a href="<?php echo home_url('/lyrics/#lyrics-08'); ?>">08 玻璃の心</a></li>
                            <li><a href="<?php echo home_url('/lyrics/#lyrics-09'); ?>">09 かいせい</a></li>
                            <li><a href="<?php echo home_url('/lyrics/#lyrics-10'); ?>">10 せんたく</a></li>
                        </ul>
                        <div class="hamburger-submenu-sns">
                            <div class="hamburger-X-icon">
                                <a href="https://x.com/hatena_ny">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-x-logo.png" alt="X icon" class="hamburger-X-img" />
                                </a>
                            </div>
                            <div class="hamburger-youtube-icon">
                                <a href="https://www.youtube.com/@kakuriyohatena">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-youtube-logo.png" alt="youtube icon" class="hamburger-youtube-img" />
                                </a>
                            </div>
                            <div class="hamburger-tiktok-icon">
                                <a href="">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-tictok-logo.png" alt="tiktok icon" class="hamburger-tiktok-img" />
                                </a>
                            </div>
                            <div class="hamburger-tunecore-text">
                                <a href="https://www.tunecore.co.jp/artists/kakuriyohatena.?lang=ja">tunecore</a>
                            </div>
                        </div>
                        <div class="contact-button">
                            <a href="<?php echo home_url('/inquiry'); ?>">お問い合わせ</a>
                        </div>
                    </div>

                    <div class="submenu-overlay" id="lyrics-submenu2">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/polygon.svg" alt="" class="hamburger-submenu-next-polygon" data-target="lyrics-submenu3">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/polygon-2.svg" alt="" class="hamburger-submenu-prev-polygon" data-target="lyrics-submenu1">
                        <div class="submenu-top">
                            <div class="submenu-top-text">
                                <p class="submenu-top-eng">lyrics</p>
                                <p class="submenu-top-jap">リリック</p>
                            </div>
                        </div>
                        <ul class="submenu">
                            <li><a href="<?php echo home_url('/lyrics/#lyrics-11'); ?>">11 種明かしなんて嫌いだ</a></li>
                            <li><a href="<?php echo home_url('/lyrics/#lyrics-12'); ?>">12 多分うまく笑えてないけど</a></li>
                            <li><a href="<?php echo home_url('/lyrics/#lyrics-13'); ?>">13 匿名</a></li>
                            <li><a href="<?php echo home_url('/lyrics/#lyrics-14'); ?>">14 むじょうけんこうふく</a></li>
                            <li><a href="<?php echo home_url('/lyrics/#lyrics-15'); ?>">15 今日も生き抜いたキミへ</a></li>
                            <li><a href="<?php echo home_url('/lyrics/#lyrics-16'); ?>">16 ステンドグラス</a></li>
                            <li><a href="<?php echo home_url('/lyrics/#lyrics-17'); ?>">17 衷心より</a></li>
                            <li><a href="<?php echo home_url('/lyrics/#lyrics-18'); ?>">18 PERSON</a></li>
                            <li><a href="<?php echo home_url('/lyrics/#lyrics-19'); ?>">19 今日まで生き抜いたキミへ</a></li>
                            <li><a href="<?php echo home_url('/lyrics/#lyrics-20'); ?>">20 妄想GoodNight</a></li>
                        </ul>
                        <div class="hamburger-submenu-sns">
                            <div class="hamburger-X-icon">
                                <a href="https://x.com/hatena_ny">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-x-logo.png" alt="X icon" class="hamburger-X-img" />
                                </a>
                            </div>
                            <div class="hamburger-youtube-icon">
                                <a href="https://www.youtube.com/@kakuriyohatena">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-youtube-logo.png" alt="youtube icon" class="hamburger-youtube-img" />
                                </a>
                            </div>
                            <div class="hamburger-tiktok-icon">
                                <a href="">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-tictok-logo.png" alt="tiktok icon" class="hamburger-tiktok-img" />
                                </a>
                            </div>
                            <div class="hamburger-tunecore-text">
                                <a href="https://www.tunecore.co.jp/artists/kakuriyohatena.?lang=ja">tunecore</a>
                            </div>
                        </div>
                        <div class="contact-button">
                            <a href="<?php echo home_url('/inquiry'); ?>">お問い合わせ</a>
                        </div>
                    </div>

                    <div class="submenu-overlay-last" id="lyrics-submenu3">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/polygon-2.svg" alt="" class="hamburger-submenu-prev-polygon" data-target="lyrics-submenu2">
                        <div class="submenu-top-last">
                            <div class="submenu-top-text">
                                <p class="submenu-top-eng">lyrics</p>
                                <p class="submenu-top-jap">リリック</p>
                            </div>
                        </div>
                        <ul class="submenu">
                            <li><a href="<?php echo home_url('/lyrics/#lyrics-21'); ?>">21 キミがいる・・・、僕に成る。</a></li>
                            <li><a href="<?php echo home_url(); ?>"></a></li>
                            <li><a href="<?php echo home_url(); ?>"></a></li>
                            <li><a href="<?php echo home_url(); ?>"></a></li>
                            <li><a href="<?php echo home_url(); ?>"></a></li>
                            <li><a href="<?php echo home_url(); ?>"></a></li>
                            <li><a href="<?php echo home_url(); ?>"></a></li>
                            <li><a href="<?php echo home_url(); ?>"></a></li>
                            <li><a href="<?php echo home_url(); ?>"></a></li>
                            <li><a href="<?php echo home_url(); ?>"></a></li>
                        </ul>
                        <div class="hamburger-submenu-sns-last">
                            <div class="hamburger-X-icon">
                                <a href="https://x.com/hatena_ny">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-x-logo.png" alt="X icon" class="hamburger-X-img" />
                                </a>
                            </div>
                            <div class="hamburger-youtube-icon">
                                <a href="https://www.youtube.com/@kakuriyohatena">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-youtube-logo.png" alt="youtube icon" class="hamburger-youtube-img" />
                                </a>
                            </div>
                            <div class="hamburger-tiktok-icon">
                                <a href="">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-tictok-logo.png" alt="tiktok icon" class="hamburger-tiktok-img" />
                                </a>
                            </div>
                            <div class="hamburger-tunecore-text">
                                <a href="https://www.tunecore.co.jp/artists/kakuriyohatena.?lang=ja">tunecore</a>
                            </div>
                        </div>
                        <div class="contact-button">
                            <a href="<?php echo home_url('/inquiry'); ?>">お問い合わせ</a>
                        </div>
                    </div>

                </div> <!-- .hamburger-menu 終了 -->
            </nav>
        </div> <!-- .hamburger-btn 終了 -->



    </header>