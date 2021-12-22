$(document).ready(function(){
  $('.slider').slick({
		autoplay: true,
		dots: false,
		infinite: true,
		speed: 200,
		fade: true,
		cssEase: 'linear'
  });
});

var list = document.querySelectorAll(".menu_bar-item");
console.log(list);
list.onclick = function() {
	list.classList.add("active");
}