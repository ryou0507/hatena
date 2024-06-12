/**********　ハンバーガーボタン　**********/
document.addEventListener('DOMContentLoaded', function () {
  var hamburger = document.getElementById('hamburger');
  var menu = document.querySelector('.hamburger-menu');

  hamburger.addEventListener('click', function () {
    menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
  });
});
