<?php

/*
Template Name: confirmation
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

    <section class="confirmation-section">
        <div class="confirmationDetails-container">
            <div id="confirmationDetails">
                <!-- ここにJavaScriptを使って入力内容を表示する -->
            </div>
        </div>

        <div class="input-grid-container">
            <div class="black-bar"></div>
            <div class="policy-container">
                <a href="" class="policy-text">プライバシーポリシー</a>
            </div>
        </div>

        <div class="input-grid-container">
            <div class="black-bar"></div>
            <div class="confirmation-btn">
                <div class="ctc-container custom">
                    <a href="<?php echo home_url(); ?>/inquiry/" class="contact-btn short-btn">戻る</a>
                </div>
                <div class="ctc-container custom">
                    <a type="button" id="confirmSubmit" class="contact-btn middle-btn">送信</a>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // セッションストレージからフォームデータを取得
        var formData = JSON.parse(sessionStorage.getItem('formData'));

        // カテゴリー名を英語から日本語に変換するためのマッピング
        var categoryMapping = {
            'appearance': '出演依頼',
            'music': '楽曲制作依頼',
            'ticket': 'チケット予約',
            'inquiry': 'その他お問い合わせ'
        };

        // ライブ情報名を英語から日本語に変換するためのマッピング
        var liveInfoMapping = {
            'shinjuku': '新宿Cat\'s hole',
            'other1': '○○○○',
            'other2': '○○○○',
            'other3': '○○○○'
        };

        // 入力内容を表示するエレメントを取得
        var detailsDiv = document.getElementById('confirmationDetails');

        // 基本情報をHTMLに変換して表示
        detailsDiv.innerHTML = `
        <div class="input-grid-container confirmation">
            <div class="black-bar"></div>
            <div class="contact-row">
                <p class="contact-option">カテゴリー</p>
                <p class="contact-answer">${categoryMapping[formData.category] || '選択されていません'}</p>
            </div>
        </div>        `;

        // チケット予約が選択されている場合のみライブ情報とチケット枚数を追加表示
        if (formData.category === 'ticket') {
            detailsDiv.innerHTML += `
        <div class="input-grid-container confirmation">
            <div class="black-bar"></div>
            <div class="contact-row">
                <p class="contact-option">ライブ情報</p>
                <p class="contact-answer">${liveInfoMapping[formData.liveInfo] || '選択されていません'}</p>
            </div>
        </div>
        <div class="input-grid-container confirmation">
            <div class="black-bar"></div>
            <div class="contact-row">
                <p class="contact-option">チケット枚数</p>
                <p class="contact-answer">${formData.ticketCount || '選択されていません'}</p>
            </div>
        </div>
            `;
        }

        // 基本情報の残りを追加表示
        detailsDiv.innerHTML += `
        <div class="input-grid-container confirmation">
            <div class="black-bar"></div>
            <div class="contact-row">
                <p class="contact-option">お名前</p>
                <p class="contact-answer">${formData.Name}</p>
            </div>
        </div>
        <div class="input-grid-container confirmation">
            <div class="black-bar"></div>
            <div class="contact-row">
                <p class="contact-option">メールアドレス</p>
                <p class="contact-answer long-answer">${formData.email}</p>
            </div>
        </div>        `;


        // 送信ボタンのクリックイベントリスナーを追加
        document.getElementById('confirmSubmit').addEventListener('click', function() {
            // フォームデータをサーバーに送信する関数
            function sendFormData(formData) {
                // フォームデータをサーバーに送信
                fetch('https://homcri.com/proxy.php', {
                        method: 'POST', // 送信メソッド
                        headers: {
                            'Content-Type': 'application/json' // ヘッダー
                        },
                        body: JSON.stringify(formData) // ボディにフォームデータをJSON形式で設定
                    })
                    .then(response => {
                        if (response.ok) {
                            // 送信が成功した場合の処理
                            window.location.href = '<?php echo home_url(); ?>/thankyou/'; // 送信完了ページへのリダイレクト
                        } else {
                            throw new Error('Network response was not ok.');
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }

            // フォームデータを送信
            sendFormData(formData);
        });
    });
</script>

<?php get_footer(); ?>