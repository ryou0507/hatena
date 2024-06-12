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
                    </div>
                </nav>
            </div>
        </div>
    </header>