// para transformar el menu
$("<select />").appendTo("nav");
$("<option />", {
   "selected": "selected",
   "value"   : "",
   "text"    : "Menú"
}).appendTo("nav select");
$("nav a").each(function() {
 var el = $(this);
 $("<option />", {
     "value"   : el.attr("href"),
     "text"    : el.text()
 }).appendTo("nav select");
});
$("nav select").change(function() {
  window.location = $(this).find("option:selected").val();
});


//para el scroll del menu
var num = 1; //number of pixels before modifying styles
$(window).bind('scroll', function () {
	if ($(window).scrollTop() > num) {
		$('#contenido').addClass('scrolled');
		$('header').addClass('fijo');
		$('a.logo-grande').hide();
		$('a.logo-chico').removeClass('ocultar');
	} else {
		$('#contenido').removeClass('scrolled');
		$('header').removeClass('fijo');
		$('a.logo-grande').show();
		$('a.logo-chico').addClass('ocultar');
	}
});

//slider-home
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});
