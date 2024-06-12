/**********　ハンバーガーボタン　**********/
document.addEventListener('DOMContentLoaded', function () {
  var hamburger = document.getElementById('hamburger');
  var menu = document.querySelector('.hamburger-menu');

  hamburger.addEventListener('click', function () {
    // メニューの表示非表示を切り替え
    menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
    // ハンバーガーアイコンの形状変更のトグル
    hamburger.classList.toggle('change');
  });
});

/********** movie モーダルウインドウ ***********/
document.addEventListener('DOMContentLoaded', function () {
  function setupModal(thumbnailId, modalId, videoId) {
    var modal = document.getElementById(modalId);
    var thumbnail = document.getElementById(thumbnailId);
    var span = modal.getElementsByClassName('close')[0];
    var video = document.getElementById(videoId);

    thumbnail.onclick = function () {
      modal.classList.add('show');
    };

    span.onclick = function () {
      modal.classList.remove('show');
      video.contentWindow.postMessage(
        '{"event":"command","func":"pauseVideo","args":""}',
        '*'
      );
    };

    window.onclick = function (event) {
      if (event.target == modal) {
        modal.classList.remove('show');
        video.contentWindow.postMessage(
          '{"event":"command","func":"pauseVideo","args":""}',
          '*'
        );
      }
    };
  }

  setupModal('thumbnail-1', 'videoModal-1', 'video-1');
  setupModal('thumbnail-2', 'videoModal-2', 'video-2');
  setupModal('thumbnail-3', 'videoModal-3', 'video-3');
});
