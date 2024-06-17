<?php

/*
Template Name: inquiry
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

    <section class="input-section">
        <div class="input-container">
            <form id="contactForm">
                <div class="input-grid-container">
                    <div class="black-bar"></div>
                    <div class="input-content">
                        <label for="category" class="text-area">カテゴリー</label>
                        <select name="category" id="category" required>
                            <option value="">選択してください</option>
                            <option value="appearance">出演依頼</option>
                            <option value="music">楽曲制作依頼</option>
                            <option value="ticket">チケット予約</option>
                            <option value="inquiry">その他お問い合わせ</option>
                        </select>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/polygon-4.svg" id="dropdown-icon" style="position: absolute; right: 35px; top: 70%; transform: translateY(-50%); cursor: pointer;" />
                    </div>
                </div>

                <div id="additional-fields"></div>

                <div class="input-grid-container">
                    <div class="black-bar"></div>
                    <div class="input-content">
                        <label for="Name" class="text-area">お名前</label>
                        <input class="input-area" type="text" id="Name" name="Name">
                    </div>
                </div>

                <div class="input-grid-container">
                    <div class="black-bar"></div>
                    <div class="input-content">
                        <label for="email" class="text-area">メールアドレス</label>
                        <input class="input-area" type="email" id="email" name="email" required>
                    </div>
                </div>
            </form>
        </div>

        <div class="input-grid-container">
            <div class="black-bar"></div>
            <div class="policy-container">
                <a href="" class="policy-text">プライバシーポリシー</a>
            </div>
        </div>

        <div class="input-grid-container">
            <div class="black-bar"></div>
            <div class="ctc-container custom inquiry-btn">
                <a type="button" id="goToConfirmation" class="contact-btn">入力確認</a>
            </div>
        </div>

        <div id="image-paths" data-polygon4-url="<?php echo esc_url(get_template_directory_uri()); ?>/images/polygon-4.svg" data-polygon3-url="<?php echo esc_url(get_template_directory_uri()); ?>/images/polygon-3.svg"></div>

        <script>
            document.getElementById('dropdown-icon').addEventListener('click', function() {
                document.getElementById('category').click(); // クリックイベントをトリガーしてデフォルトのプルダウンを表示
            });


            document.getElementById('goToConfirmation').addEventListener('click', function() {
                var formElement = document.getElementById('contactForm');

                // フォームデータをJSON形式に変換
                var formData = new FormData(formElement);
                var object = {};
                formData.forEach(function(value, key) {
                    object[key] = value;
                });
                var json = JSON.stringify(object);

                // セッションストレージにJSONデータを保存
                sessionStorage.setItem('formData', json);

                // confirmationに移動
                window.location.href = '<?php echo home_url(); ?>/confirmation/';
            });
        </script>

    </section>
</div>

<?php get_footer(); ?>