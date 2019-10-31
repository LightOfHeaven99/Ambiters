$(window).scroll(showButton);
function showButton() {
  var clientHeight = document.getElementById('content-text').clientHeight;
  var y = $(window).scrollTop();
  if (y > clientHeight) {
    button = document.getElementById('end-button');
    text = document.getElementById('end-button-text');
    button.style.opacity = "1";
    button.style.padding = "0 0 0 0";
    text.style.fontSize = "15px";

  }
}
