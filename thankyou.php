<?php

/*
Template Name: thankyou
*/
get_header(); // ヘッダーの読み込み
?>

<div class="movies-all-container">
    <section class="movies-firstview-section">
        <div class="movies-firstview-container">
            <div class="vertical-bar"></div>
            <p class="movies-subtitle">inquiry</p>
            <div class="horizontal-bar long-bar">
                <h1 class="movies-title">お問い合わせ</h1>
            </div>
        </div>
    </section>

    <div class="input-grid-container">
        <div class="black-bar"></div>
        <div class="thankyou-container">
            <p class="thankyou-text">ありがとうございました</p>
        </div>
    </div>

    <div class="input-grid-container">
        <div class="black-bar"></div>
        <div class="ctc-container custom">
            <a href="<?php echo home_url('/'); ?>" class="contact-btn">ホームへ</a>
        </div>
    </div>

</div>

<?php get_footer(); ?>