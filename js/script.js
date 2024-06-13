/**********　ハンバーガーボタン　**********/
document.addEventListener('DOMContentLoaded', function () {
  var hamburger = document.getElementById('hamburger');
  var menu = document.querySelector('.hamburger-menu');

  hamburger.addEventListener('click', function () {
    // メニューの表示非表示を切り替え
    menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
    // ハンバーガーアイコンの形状変更のトグル
    hamburger.classList.toggle('change');
    // サブメニューも非表示にする
    hideAllSubmenus();
    // ボディのスクロールを切り替え
    document.body.classList.toggle('no-scroll');
  });

  // サブメニューのトグル機能
  var submenuToggles = document.querySelectorAll(
    '.hamburger-movies-polygon, .hamburger-lyrics-polygon, .hamburger-submenu-next-polygon, .hamburger-submenu-prev-polygon'
  );
  submenuToggles.forEach(function (toggle) {
    toggle.addEventListener('click', function () {
      var targetId = this.getAttribute('data-target');
      var submenu = document.getElementById(targetId);
      if (submenu) {
        hideAllSubmenus(); // 他のサブメニューを非表示
        submenu.style.display =
          submenu.style.display === 'flex' ? 'none' : 'flex';
      }
    });
  });

  // 全てのサブメニューを非表示にする関数
  function hideAllSubmenus() {
    var submenus = document.querySelectorAll('.submenu-overlay');
    submenus.forEach(function (submenu) {
      submenu.style.display = 'none';
    });
  }
  function hideAllSubmenus() {
    var submenus = document.querySelectorAll('.submenu-overlay-last');
    submenus.forEach(function (submenu) {
      submenu.style.display = 'none';
    });
  }
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
