$(".bean").click(function(){
  $(this).toggleClass("closed");
  if($(".bean").hasClass("closed")){
    $(".hide_member").slideDown();
  } else {
    $(".hide_member").slideUp();
  }
});


$("#btnSearch").click(function(){
  $(this).toggleClass("closed");
  if($("#btnSearch").hasClass("closed")){
    $(".search_box").slideDown();
    $("#upper").attr("class", "fa fa-times");
  } else {
    $(".search_box").slideUp();
    $("#upper").attr("class", "fa fa-search");
  }
});

$("ul > li").mouseenter(function(){
$(this).children(".depth2").stop().slideDown(400);
});
$("ul > li").mouseleave(function(){
$(this).children(".depth2").stop().slideUp(100);
});





// 메인페이지 슬라이드
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2500); // Change image every 2 seconds
}



// md's pick 슬라이드
$(document).ready(function(){
  $('.autoplay').slick({

  });
});


$('.autoplay').slick({
  slidesToShow: 4,
  slidesToScroll: 2,
  autoplay: true,
  autoplaySpeed: 1500,
});

$('#second_auto').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});




$( window ).scroll( function() {
	if ( $( this ).scrollTop() > 200 ) {
		$( '.top' ).fadeIn();
	} else {
		$( '.top' ).fadeOut();
	}
} );



$( '.top' ).click( function() {
	$( 'html, body' ).animate( { scrollTop : 0 }, 400 );
	return false;
} );
