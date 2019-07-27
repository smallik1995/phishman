var div_menu = document.getElementsByClassName('navbar-container');
window.onscroll = function (e) {
  console.log('123');
  if (div_menu) {
    div_menu.style.top = window.pageYOffset + 'px';
    console.log('321');
  }
}

window.onscroll = function() {
  console.log('135');
}

alert('123')


// $(window).scroll(function() {
//   console.log('sdfsf')
// })
