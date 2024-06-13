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
    <title>隠世はてなホームページ</title>
    <?php wp_head(); ?>
</head>

<body>

    <header>
        <div class="header-container">

            <div class="hamburger-btn">
                <nav class="header-sp-nav">
                    <div class="hamburger" id="hamburger">
                        <div class="header-left-line"></div>
                        <div class="header-left-line"></div>
                    </div>
                    <div class="hamburger-menu">
                        <h1 class="hamburger-logo">
                            <p class="jap">隠世はてな</p>
                            <p class="roman">hatena kakuriyo</p>
                        </h1>
                        <ul class="nav-links" id="nav-links">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/polygon.svg" alt="" class="hamburger-movies-polygon" data-target="movies-submenu">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/polygon.svg" alt="" class="hamburger-lyrics-polygon" data-target="lyrics-submenu">

                            <div class="links-container">
                                <li class="top-text"><a href="<?php echo home_url('/'); ?>">home</a></li>
                                <li class="bottom-text"><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
                            </div>
                            <div class="links-container">
                                <li class="top-text"><a href="<?php echo home_url(''); ?>">profile</a></li>
                                <li class="bottom-text"><a href="<?php echo home_url(); ?>">プロフィール</a></li>
                            </div>
                            <div class="links-container">
                                <li class="top-text"><a href="<?php echo home_url(''); ?>">schedule</a></li>
                                <li class="bottom-text"><a href="<?php echo home_url(); ?>">スケジュール</a></li>
                            </div>
                            <div class="links-container">
                                <li class="top-text"><a href="<?php echo home_url(''); ?>">movies</a></li>
                                <li class="bottom-text"><a href="<?php echo home_url(); ?>">動画</a></li>
                            </div>
                            <div class="links-container">
                                <li class="top-text"><a href="<?php echo home_url(''); ?>">lyrics</a></li>
                                <li class="bottom-text"><a href="<?php echo home_url(); ?>">リリック</a></li>
                            </div>
                            <div class="links-container">
                                <li class="top-text"><a href="<?php echo home_url(''); ?>">goods</a></li>
                                <li class="bottom-text"><a href="<?php echo home_url(); ?>">グッズ</a></li>
                            </div>
                        </ul>
                        <div class="submenu-overlay" id="movies-submenu">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/polygon.svg" alt="" class="hamburger-submenu-next-polygon" data-target="next-movies-submenu">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/polygon-2.svg" alt="" class="hamburger-submenu-prev-polygon" data-target="nav-links">

                            <div class="submenu-top">
                                <div class="submenu-top-text">
                                    <p class="submenu-top-eng">movies</p>
                                    <p class="submenu-top-jap">動画</p>
                                </div>
                                <div class="submenu-page-number">
                                    <p>11~20</p>
                                    <p>21~30</p>
                                </div>
                            </div>

                            <ul class="submenu">
                                <li><a href="<?php echo home_url(); ?>">01 拗け</a></li>
                                <li><a href="<?php echo home_url(); ?>">02 卒業</a></li>
                                <li><a href="<?php echo home_url(); ?>">03 読書</a></li>
                                <li><a href="<?php echo home_url(); ?>">04 夜明け</a></li>
                                <li><a href="<?php echo home_url(); ?>">05 あいす</a></li>
                                <li><a href="<?php echo home_url(); ?>">06 ハッピーエンド</a></li>
                                <li><a href="<?php echo home_url(); ?>">07 ペルソナ</a></li>
                                <li><a href="<?php echo home_url(); ?>">08 玻璃の心</a></li>
                                <li><a href="<?php echo home_url(); ?>">09 かいせい</a></li>
                                <li><a href="<?php echo home_url(); ?>">10 せんたく</a></li>
                            </ul>
                            <div class="hamburger-submenu-sns">
                                <div class="hamburger-X-icon">
                                    <a href="">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-x-logo.png" alt="X icon" class="hamburger-X-img" />
                                    </a>
                                </div>
                                <div class="hamburger-youtube-icon">
                                    <a href="">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-youtube-logo.png" alt="youtube icon" class="hamburger-youtube-img" />
                                    </a>
                                </div>
                                <div class="hamburger-tiktok-icon">
                                    <a href="">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-tictok-logo.png" alt="tiktok icon" class="hamburger-tiktok-img" />
                                    </a>
                                </div>
                                <div class="hamburger-tunecore-text">
                                    <a href="">tunecore</a>
                                </div>
                            </div>
                            <div class="contact-button">
                                <a href="">お問い合わせ</a>
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
                                <div class="submenu-page-number">
                                    <p>1~10</p>
                                    <p>21~30</p>
                                </div>
                            </div>
                            <ul class="submenu">
                                <li><a href="<?php echo home_url(); ?>">11 種明かしなんて嫌いだ</a></li>
                                <li><a href="<?php echo home_url(); ?>">12 多分うまく笑えてないけど</a></li>
                                <li><a href="<?php echo home_url(); ?>">13 匿名</a></li>
                                <li><a href="<?php echo home_url(); ?>">14 むじょうけんこうふく</a></li>
                                <li><a href="<?php echo home_url(); ?>">15 今日も生き抜いたキミへ</a></li>
                                <li><a href="<?php echo home_url(); ?>">16 ステンドグラス</a></li>
                                <li><a href="<?php echo home_url(); ?>">17 衷心より</a></li>
                                <li><a href="<?php echo home_url(); ?>">18 PERSON</a></li>
                                <li><a href="<?php echo home_url(); ?>">19 今日まで生き抜いたキミへ</a></li>
                                <li><a href="<?php echo home_url(); ?>">20 妄想GoodNight</a></li>
                            </ul>
                            <div class="hamburger-submenu-sns">
                                <div class="hamburger-X-icon">
                                    <a href="">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-x-logo.png" alt="X icon" class="hamburger-X-img" />
                                    </a>
                                </div>
                                <div class="hamburger-youtube-icon">
                                    <a href="">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-youtube-logo.png" alt="youtube icon" class="hamburger-youtube-img" />
                                    </a>
                                </div>
                                <div class="hamburger-tiktok-icon">
                                    <a href="">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-tictok-logo.png" alt="tiktok icon" class="hamburger-tiktok-img" />
                                    </a>
                                </div>
                                <div class="hamburger-tunecore-text">
                                    <a href="">tunecore</a>
                                </div>
                            </div>
                            <div class="contact-button">
                                <a href="">お問い合わせ</a>
                            </div>
                        </div>

                        <div class="submenu-overlay-last" id="new-submenu">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/polygon-2.svg" alt="" class="hamburger-submenu-prev-polygon" data-target="next-movies-submenu">

                            <div class="submenu-top-last">
                                <div class="submenu-top-text">
                                    <p class="submenu-top-eng">movies</p>
                                    <p class="submenu-top-jap">動画</p>
                                </div>
                                <div class="submenu-page-number">
                                    <p>1~10</p>
                                    <p>11~20</p>
                                </div>
                            </div>
                            <ul class="submenu">
                                <li><a href="<?php echo home_url(); ?>">21 キミがいる・・・、僕に成る。</a></li>
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
                                    <a href="">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-x-logo.png" alt="X icon" class="hamburger-X-img" />
                                    </a>
                                </div>
                                <div class="hamburger-youtube-icon">
                                    <a href="">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-youtube-logo.png" alt="youtube icon" class="hamburger-youtube-img" />
                                    </a>
                                </div>
                                <div class="hamburger-tiktok-icon">
                                    <a href="">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-tictok-logo.png" alt="tiktok icon" class="hamburger-tiktok-img" />
                                    </a>
                                </div>
                                <div class="hamburger-tunecore-text">
                                    <a href="">tunecore</a>
                                </div>
                            </div>
                            <div class="contact-button">
                                <a href="">お問い合わせ</a>
                            </div>
                        </div>


                        <div class="submenu-overlay" id="lyrics-submenu">
                            <ul class="submenu">
                                <li><a href="<?php echo home_url(); ?>">リリック1</a></li>
                                <li><a href="<?php echo home_url(); ?>">リリック2</a></li>
                            </ul>
                        </div>
                        <div class="hamburger-sns">
                            <div class="hamburger-X-icon">
                                <a href="">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-x-logo.png" alt="X icon" class="hamburger-X-img" />
                                </a>
                            </div>
                            <div class="hamburger-youtube-icon">
                                <a href="">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-youtube-logo.png" alt="youtube icon" class="hamburger-youtube-img" />
                                </a>
                            </div>
                            <div class="hamburger-tiktok-icon">
                                <a href="">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/hamburger-tictok-logo.png" alt="tiktok icon" class="hamburger-tiktok-img" />
                                </a>
                            </div>
                            <div class="hamburger-tunecore-text">
                                <a href="">tunecore</a>
                            </div>
                        </div>
                        <div class="contact-button">
                            <a href="">お問い合わせ</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>