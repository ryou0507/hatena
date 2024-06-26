/**********　ヘッダー固定　**********/
document.addEventListener("DOMContentLoaded", function () {
  const header = document.getElementById("sp-header");
  const jacketContainer = document.getElementById("jacket-container");
  const headerOffsetTop = header.offsetTop;
  const offset = 100; // この値を調整して、固定が始まる位置を変えます

  function checkHeaderPosition() {
    const scrollTop = window.scrollY;
    const jacketContainerHeight = jacketContainer
      ? jacketContainer.offsetHeight
      : 0;

    if (scrollTop > headerOffsetTop + jacketContainerHeight - offset) {
      if (!header.classList.contains("fixed")) {
        header.classList.add("fixed");
      }
    } else {
      if (header.classList.contains("fixed")) {
        header.classList.remove("fixed");
      }
    }
  }

  window.addEventListener("scroll", checkHeaderPosition);
  check;
});

/********** ハンバーガーボタン（PC用） **********/
document.addEventListener("DOMContentLoaded", function () {
  const hamburgerPcBtn = document.getElementById("hamburger-pc");
  const hamburgerPcMenu = document.getElementById("hamburger-menu");

  hamburgerPcBtn.addEventListener("click", function () {
    console.log("Hamburger button clicked");

    if (window.innerWidth >= 768) {
      // PCにだけ適用
      if (hamburgerPcMenu.classList.contains("open")) {
        hamburgerPcMenu.classList.remove("open");
        document.body.classList.remove("no-scroll");
        hamburgerPcBtn.classList.remove("active");
        resetPcMainMenu(); // メニューを閉じるときにトップに戻す
        console.log("Menu closed");
      } else {
        hamburgerPcMenu.classList.add("open");
        document.body.classList.add("no-scroll");
        hamburgerPcBtn.classList.add("active");
        console.log("Menu opened");
      }
    } else {
      hamburgerPcMenu.classList.toggle("open");
      console.log("Menu toggled (mobile)");
    }
  });

  // サブメニューを開くトリガー
  const pcNextSubmenuToggles = document.querySelectorAll(
    ".hamburger-movies-polygon.pc, .hamburger-lyrics-polygon.pc"
  );
  pcNextSubmenuToggles.forEach(function (toggle) {
    toggle.addEventListener("click", function () {
      if (window.innerWidth >= 768) {
        const targetId = this.getAttribute("data-target");
        const submenu = document.getElementById(targetId);
        if (submenu) {
          hideAllPcSubmenus();
          submenu.style.display = "flex";
          console.log(`Submenu ${targetId} opened`);
          hamburgerPcBtn.classList.add("active"); // ボタンを×に保つ
        }
      }
    });
  });

  // サブメニューを閉じるトリガー
  const pcPrevSubmenuToggles = document.querySelectorAll(
    ".hamburger-submenu-prev-polygon.pc"
  );
  pcPrevSubmenuToggles.forEach(function (toggle) {
    toggle.addEventListener("click", function () {
      if (window.innerWidth >= 768) {
        const targetId = this.getAttribute("data-target");
        if (targetId === "nav-links") {
          hideAllPcSubmenus();
          resetPcMainMenu();
          console.log("Returned to main menu");
          hamburgerPcBtn.classList.add("active"); // ボタンを×に保つ
        } else {
          const submenu = document.getElementById(targetId);
          if (submenu) {
            hideAllPcSubmenus();
            submenu.style.display = "flex";
            console.log(`Submenu ${targetId} opened`);
            hamburgerPcBtn.classList.add("active"); // ボタンを×に保つ
          }
        }
      }
    });
  });

  // 全てのサブメニューを隠す関数
  function hideAllPcSubmenus() {
    const pcSubmenus = document.querySelectorAll(
      ".submenu-overlay.pc, .submenu-overlay-last.pc"
    );
    pcSubmenus.forEach(function (submenu) {
      submenu.style.display = "none";
    });
  }

  // メインメニューにリセットする関数
  function resetPcMainMenu() {
    const navLinks = document.getElementById("nav-links");
    navLinks.style.display = "flex"; // メインメニューを表示
    const linksContainers = navLinks.querySelectorAll(".links-container.pc");
    linksContainers.forEach(function (container) {
      container.style.display = "block"; // 各リンクコンテナを表示
    });
    hideAllPcSubmenus(); // サブメニューをすべて閉じる
    // ハンバーガーボタンの状態をリセット
    hamburgerPcBtn.classList.remove("active");
  }
});

/********** ハンバーガーボタン（モバイル用） **********/
document.addEventListener("DOMContentLoaded", function () {
  var hamburger = document.getElementById("hamburger");
  var menu = document.querySelector(".hamburger-menu");
  var body = document.body;
  var scrollPosition = 0;

  hamburger.addEventListener("click", function () {
    if (menu.style.display === "block") {
      menu.style.display = "none";
      body.classList.remove("no-scroll");
      window.scrollTo(0, scrollPosition); // スクロール位置を元に戻す
      showHamburgerLines(); // ハンバーガーメニューを閉じたときに線を再表示
    } else {
      scrollPosition = window.scrollY; // 現在のスクロール位置を保存
      body.style.top = `-${scrollPosition}px`;
      menu.style.display = "block";
      body.classList.add("no-scroll");
      hideHamburgerLines(); // ハンバーガーメニューを開いたときに線を非表示
    }
    hamburger.classList.toggle("change");
    hideAllSubmenus();
  });

  var submenuToggles = document.querySelectorAll(
    ".hamburger-movies-polygon, .hamburger-lyrics-polygon, .hamburger-submenu-prev-polygon, .hamburger-submenu-next-polygon"
  );
  submenuToggles.forEach(function (toggle) {
    toggle.addEventListener("click", function () {
      if (window.innerWidth < 768) {
        const targetId = this.getAttribute("data-target");
        const submenu = document.getElementById(targetId);
        if (submenu) {
          hideAllSubmenus();
          submenu.style.display = "flex";
        } else if (targetId === "nav-links") {
          hideAllSubmenus();
          menu.style.display = "block";
          resetMainMenu();
        }
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
    body.style.top = ""; // bodyのtopスタイルをリセット
    document.documentElement.style.scrollBehavior = "auto"; // スムーススクロールを無効にする
    window.scrollTo(0, scrollPosition); // スクロール位置を元に戻す
    document.documentElement.style.scrollBehavior = "smooth"; // スムーススクロールを再度有効にする
    hideAllSubmenus();
    showHamburgerLines(); // ハンバーガーメニューを閉じたときに線を再表示
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
      body.style.top = ""; // bodyのtopスタイルをリセット
      document.documentElement.style.scrollBehavior = "auto"; // スムーススクロールを無効にする
      window.scrollTo(0, scrollPosition); // スクロール位置を元に戻す
      document.documentElement.style.scrollBehavior = "smooth"; // スムーススクロールを再度有効にする
      hideAllSubmenus();
      showHamburgerLines(); // ハンバーガーメニューを閉じたときに線を再表示

      // ハッシュ付きURLに遷移する
      setTimeout(function () {
        window.location.href = href;
      }, 100); // 少し遅延を入れる
    });
  });

  // 追加: ハンバーガーボタンの線をクリックで非表示にするイベントリスナー
  var headerLeftLines = document.querySelectorAll(".header-left-line");
  headerLeftLines.forEach(function (line) {
    line.addEventListener("click", function () {
      hideHamburgerLines();
    });
  });

  // ハンバーガーメニューを閉じたときに線を再表示する関数
  function showHamburgerLines() {
    var headerLeftLines = document.querySelectorAll(".header-left-line");
    headerLeftLines.forEach(function (line) {
      line.style.display = "block";
    });
  }

  // ハンバーガーメニューを開いたときに線を非表示にする関数
  function hideHamburgerLines() {
    var headerLeftLines = document.querySelectorAll(".header-left-line");
    headerLeftLines.forEach(function (line) {
      line.style.display = "none";
    });
  }
});

/********** movie モーダルウインドウ ***********/
document.addEventListener("DOMContentLoaded", function () {
  function setupModal(thumbnailId, modalId, videoId) {
    var modal = document.getElementById(modalId);
    var thumbnail = document.getElementById(thumbnailId);
    var svgIcon = thumbnail.nextElementSibling; // SVGアイコンを取得
    var span = modal.getElementsByClassName("close")[0];
    var video = document.getElementById(videoId);
    var scrollPosition = 0;

    function openModal(event) {
      event.preventDefault(); // デフォルトの動作を防ぐ
      event.stopPropagation(); // クリックイベントの伝播を停止
      scrollPosition = window.scrollY;
      modal.style.display = "block";
      setTimeout(function () {
        modal.classList.add("show");
      }, 10); // トランジションのための遅延を追加
      document.body.style.overflow = "hidden";
      document.body.style.position = "fixed";
      document.body.style.width = "100%";
      document.body.style.top = `-${scrollPosition}px`;
    }

    function closeModal() {
      modal.classList.remove("show");
      setTimeout(function () {
        modal.style.display = "none";
        document.body.style.overflow = "auto";
        document.body.style.position = "";
        document.body.style.width = "";
        document.body.style.top = "";

        // スムーススクロールを無効化
        document.documentElement.style.scrollBehavior = "auto";
        window.scrollTo(0, scrollPosition); // 元のスクロール位置に戻る
        // スムーススクロールを再度有効化
        setTimeout(function () {
          document.documentElement.style.scrollBehavior = "";
        }, 10); // 少しの遅延を追加してスムーススクロールを再度有効化
      }, 300); // トランジション時間を考慮
      video.contentWindow.postMessage(
        '{"event":"command","func":"pauseVideo","args":""}',
        "*"
      );
    }

    thumbnail.addEventListener("click", openModal);
    svgIcon.addEventListener("click", openModal);

    span.onclick = closeModal;

    window.onclick = function (event) {
      if (event.target == modal) {
        closeModal();
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

/********** schedule アコーディオン ***********/
document.addEventListener("DOMContentLoaded", function () {
  var buttons = document.querySelectorAll(".toggle-content-btn");
  var downArrow =
    '<svg xmlns="http://www.w3.org/2000/svg" width="12" height="8" viewBox="0 0 12 8" fill="none"><path d="M11.5146 1.25732L6.25733 6.51464L1.00002 1.25732" stroke="white"/></svg>';
  var upArrow =
    '<svg xmlns="http://www.w3.org/2000/svg" width="12" height="7" viewBox="0 0 12 7" fill="none"><path d="M11.5146 6.25732L6.25733 1.00001L1.00002 6.25732" stroke="white"/></svg>';

  buttons.forEach(function (button) {
    button.innerHTML = downArrow; // 初期状態では下矢印を表示
    var content = button
      .closest(".schedule-item")
      .querySelector(".schedule-remaining-content");
    content.style.display = "none"; // 初期状態で非表示

    button.addEventListener("click", function () {
      if (content.style.display === "none" || content.style.display === "") {
        content.style.display = "block";
        this.innerHTML = upArrow; // 内容が表示されたら上矢印に変更
      } else {
        content.style.display = "none";
        this.innerHTML = downArrow; // 内容が非表示なら下矢印に変更
      }
    });
  });
});

/********** 右から左へアニメーション ********** */

document.addEventListener("DOMContentLoaded", function () {
  const animateElements = document.querySelectorAll(".scroll-animate");

  function animateOnScroll() {
    animateElements.forEach((element) => {
      const rect = element.getBoundingClientRect();
      if (rect.top < window.innerHeight && rect.bottom > 0) {
        element.classList.add("active");
      }
    });
  }

  window.addEventListener("scroll", animateOnScroll);
  animateOnScroll(); // Initial check in case elements are already in view
});

/********** 左から右へアニメーション ********** */

document.addEventListener("DOMContentLoaded", function () {
  const animateElements = document.querySelectorAll(
    ".scroll-animate, .scroll-animate-left"
  );

  function animateOnScroll() {
    animateElements.forEach((element) => {
      const rect = element.getBoundingClientRect();
      if (rect.top < window.innerHeight && rect.bottom > 0) {
        element.classList.add("active");
      }
    });
  }

  window.addEventListener("scroll", animateOnScroll);
  animateOnScroll(); // Initial check in case elements are already in view
});

/********** 下から上へアニメーション ********** */
document.addEventListener("DOMContentLoaded", function () {
  var scrollElements = document.querySelectorAll(".scroll-up");

  var elementInView = function (element, offset = 100) {
    var elementTop = element.getBoundingClientRect().top;
    return (
      elementTop <=
      (window.innerHeight || document.documentElement.clientHeight) - offset
    );
  };

  var displayScrollElement = function (element) {
    element.classList.add("scroll-up-active");
  };

  var handleScrollAnimation = function () {
    scrollElements.forEach(function (el) {
      if (elementInView(el, 100)) {
        displayScrollElement(el);
      }
    });
  };

  window.addEventListener("scroll", function () {
    handleScrollAnimation();
  });

  handleScrollAnimation();
});

/********** ページIDジャンプ **********/
document.addEventListener("DOMContentLoaded", function () {
  // ページ内リンクのクリックイベントを監視
  var anchorLinks = document.querySelectorAll('a[href^="#"]');

  anchorLinks.forEach(function (link) {
    link.addEventListener("click", function (event) {
      var targetId = link.getAttribute("href").substring(1); // 先頭の#を取り除く
      var targetElement = document.getElementById(targetId);

      if (targetElement) {
        // モーダル内の要素かどうかを確認
        var isInModal = targetElement.closest(".modal.show");

        if (isInModal) {
          return; // モーダル内の要素の場合、スムーススクロールを無視
        }

        event.preventDefault();

        // ヘッダーの高さを取得（例: 40px）
        var headerHeight =
          document.querySelector(".header-container").offsetHeight;
        // 追加のオフセットを設定（例: 20px）
        var additionalOffset = 20; // この値を調整してさらに上にスクロール

        // 現在のスクロール位置を取得
        var elementPosition = targetElement.getBoundingClientRect().top;
        var offsetPosition =
          elementPosition +
          window.pageYOffset -
          headerHeight -
          additionalOffset;

        // スムーススクロールを実行
        window.scrollTo({
          top: offsetPosition,
          behavior: "smooth",
        });

        // スクロールアップアニメーションを適用
        setTimeout(function () {
          targetElement.classList.add("scroll-up-active");
        }, 500); // スクロールアニメーションの後にアクティブクラスを追加

        // 余白を動的に調整
        document.querySelector(".movies-thumbnail-section").style.paddingTop =
          "80px";
      }
    });
  });

  // 追加: ページ読み込み後のハッシュ処理
  if (window.location.hash) {
    var targetId = window.location.hash.substring(1);
    var targetElement = document.getElementById(targetId);

    if (targetElement) {
      // モーダル内の要素かどうかを確認
      var isInModal = targetElement.closest(".modal.show");

      if (isInModal) {
        return; // モーダル内の要素の場合、スムーススクロールを無視
      }

      setTimeout(function () {
        var headerHeight =
          document.querySelector(".header-container").offsetHeight;
        var additionalOffset = 40; // この値を調整してさらに上にスクロール
        var elementPosition = targetElement.getBoundingClientRect().top;
        var offsetPosition =
          elementPosition +
          window.pageYOffset -
          headerHeight -
          additionalOffset;
        window.scrollTo({
          top: offsetPosition,
          behavior: "smooth",
        });

        // 余白を動的に調整
        document.querySelector(
          ".movies-thumbnail-section.custom"
        ).style.paddingTop = "120px";
      }, 100); // 少し遅延を入れてスクロールを調整
    }
  }
});

/********** お問い合わせページ チケット予約選択時 **********/
document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("category").addEventListener("change", function () {
    var additionalFields = document.getElementById("additional-fields");
    additionalFields.innerHTML = ""; // 既存の追加フィールドをクリア

    if (this.value === "ticket") {
      var liveInfoField =
        `
              <div class="input-grid-container">
                  <div class="black-bar"></div>
                  <div class="input-content">
                      <label for="liveInfo" class="text-area">ライブ情報</label>
                      <select name="liveInfo" id="liveInfo">
                          <option value="">選択してください</option>
                          <option value="shinjuku">新宿Cat's hole</option>
                          <option value="other1">○○○○</option>
                          <option value="other2">○○○○</option>
                          <option value="other3">○○○○</option>
                      </select>
                      <img src="` +
        templateDir +
        `/images/polygon-4.svg" id="dropdown-icon-liveInfo" style="position: absolute; right: 35px; top: 70%; transform: translateY(-50%); cursor: pointer;" />
                  </div>
              </div>
              <div class="input-grid-container">
                  <div class="black-bar"></div>
                  <div class="input-content">
                      <label for="ticketCount" class="text-area">チケット枚数</label>
                      <select name="ticketCount" id="ticketCount">
                          <option value="">選択してください</option>
                          <option value="1">1枚</option>
                          <option value="2">2枚</option>
                      </select>
                      <img src="` +
        templateDir +
        `/images/polygon-4.svg" id="dropdown-icon-ticketCount" style="position: absolute; right: 35px; top: 70%; transform: translateY(-50%); cursor: pointer;" />
                  </div>
              </div>
          `;
      additionalFields.innerHTML = liveInfoField;

      addDropdownIcon("dropdown-icon-liveInfo", "liveInfo");
      addDropdownIcon("dropdown-icon-ticketCount", "ticketCount");
    }
  });

  function addDropdownIcon(iconId, selectId) {
    document.getElementById(iconId).addEventListener("click", function () {
      document.getElementById(selectId).click(); // クリックイベントをトリガーしてデフォルトのプルダウンを表示
    });
  }
});
