/**********　ハンバーガーボタン　**********/
document.addEventListener("DOMContentLoaded", function () {
  var hamburger = document.getElementById("hamburger");
  var menu = document.querySelector(".hamburger-menu");
  var body = document.body;

  hamburger.addEventListener("click", function () {
    if (menu.style.display === "block") {
      menu.style.display = "none";
      body.classList.remove("no-scroll");
    } else {
      menu.style.display = "block";
      body.classList.add("no-scroll");
    }
    hamburger.classList.toggle("change");
    hideAllSubmenus();
  });

  var submenuToggles = document.querySelectorAll(
    ".hamburger-movies-polygon, .hamburger-lyrics-polygon, .hamburger-submenu-next-polygon, .hamburger-submenu-prev-polygon"
  );
  submenuToggles.forEach(function (toggle) {
    toggle.addEventListener("click", function () {
      var targetId = this.getAttribute("data-target");
      var submenu = document.getElementById(targetId);
      if (submenu) {
        hideAllSubmenus();
        submenu.style.display = "flex";
      } else if (targetId === "nav-links") {
        hideAllSubmenus();
        menu.style.display = "block";
        resetMainMenu();
      }
    });
  });

  function hideAllSubmenus() {
    var submenus = document.querySelectorAll(
      ".submenu-overlay, .submenu-overlay-last"
    );
    submenus.forEach(function (submenu) {
      submenu.style.display = "none";
    });
  }

  function resetMainMenu() {
    var navLinks = document.getElementById("nav-links");
    navLinks.style.display = "flex"; // メインメニューを表示
    var linksContainers = navLinks.querySelectorAll(".links-container");
    linksContainers.forEach(function (container) {
      container.style.display = "block"; // 各リンクコンテナを表示
    });
    // ハンバーガーボタンの状態をリセット
    hamburger.classList.remove("change");
  }

  // 追加: 閉じるボタンのクリックエリアのイベントリスナー
  var closeArea = document.querySelector(".close-area");
  closeArea.addEventListener("click", function () {
    menu.style.display = "none";
    body.classList.remove("no-scroll");
    hamburger.classList.remove("change");
    hideAllSubmenus();
  });

  // 修正: リンクをクリックしたときにメニューを閉じる処理
  var menuLinks = document.querySelectorAll(".nav-links a, .submenu a");
  menuLinks.forEach(function (link) {
    link.addEventListener("click", function (event) {
      event.preventDefault(); // デフォルトのリンク動作を防ぐ
      var href = this.getAttribute("href");

      menu.style.display = "none";
      body.classList.remove("no-scroll");
      hamburger.classList.remove("change");
      hideAllSubmenus();

      // ハッシュ付きURLに遷移する
      setTimeout(function () {
        window.location.href = href;
      }, 100); // 少し遅延を入れる
    });
  });
});

/********** movie モーダルウインドウ ***********/
document.addEventListener("DOMContentLoaded", function () {
  function setupModal(thumbnailId, modalId, videoId) {
    var modal = document.getElementById(modalId);
    var thumbnail = document.getElementById(thumbnailId);
    var span = modal.getElementsByClassName("close")[0];
    var video = document.getElementById(videoId);

    thumbnail.onclick = function () {
      modal.classList.add("show");
    };

    span.onclick = function () {
      modal.classList.remove("show");
      video.contentWindow.postMessage(
        '{"event":"command","func":"pauseVideo","args":""}',
        "*"
      );
    };

    window.onclick = function (event) {
      if (event.target == modal) {
        modal.classList.remove("show");
        video.contentWindow.postMessage(
          '{"event":"command","func":"pauseVideo","args":""}',
          "*"
        );
      }
    };
  }

  setupModal("thumbnail-1", "videoModal-1", "video-1");
  setupModal("thumbnail-2", "videoModal-2", "video-2");
  setupModal("thumbnail-3", "videoModal-3", "video-3");
});

/********** lyrics アコーディオン ***********/

document.addEventListener("DOMContentLoaded", function () {
  const toggleButtons = document.querySelectorAll(".accordion-toggle");
  const hiddenParts = document.querySelectorAll(
    ".lyrics-page-container.hidden-part"
  );
  let scrollPosition = 0;

  toggleButtons.forEach((toggleButton, index) => {
    toggleButton.addEventListener("click", function () {
      const hiddenPart = hiddenParts[index];
      if (!toggleButton.classList.contains("open")) {
        scrollPosition = window.scrollY;
        hiddenPart.style.display = "block";
        setTimeout(() => {
          hiddenPart.classList.add("open");
          window.scrollTo(0, scrollPosition);
        }, 0);
        toggleButton.classList.add("open");
      } else {
        hiddenPart.classList.remove("open");
        toggleButton.classList.remove("open");
        setTimeout(() => {
          hiddenPart.style.display = "none";
          window.scrollTo(0, scrollPosition);
        }, 200);
      }
    });
  });
});
