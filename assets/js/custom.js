
function enviar() {
  $(document).ready(function () {
    $('#block2A').removeClass("block2").addClass( "activeblock2" );
    $( "#b2" ).removeClass( "circulo" ).addClass( "activecirculo");
    $('#p').addClass("progreso1");
    $('.icon1').addClass("fa fa-check");
    $('#next1').hide();
    $('#next2').show();
  });

}

function enviar2() {
  $(document).ready(function () {
    $('#p').addClass("progreso2");
    $('#block3A').removeClass("block3").addClass( "activeblock3");
    $( "#b3" ).removeClass( "circulo" ).addClass( "activecirculo");
    $('.icon2').addClass("fa fa-check");
    $('#next2').hide();
    $('#next3').show();
  });
}

function enviar3(){
  $('#p').addClass("progreso3");
  $('.icon3').addClass("fa fa-check");
  $('#block3A').removeClass("block3").addClass( "activeblock3");
  $( "#b3" ).removeClass( "circulo" ).addClass( "activecirculo");
  $('#block4A').removeClass("block4").addClass( "activeblock4");
  $( "#b4" ).removeClass( "circulo" ).addClass( "activecirculo");
  $('#next3').hide();
}

/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
dropdown[i].addEventListener("click", function() {
this.classList.toggle("active");
var dropdownContent = this.nextElementSibling;
if (dropdownContent.style.display === "block") {
dropdownContent.style.display = "none";
} else {
dropdownContent.style.display = "block";
}
});
}

jQuery(function ($) {

$(".sidebar-dropdown > a").click(function() {
$(".sidebar-submenu").slideUp(200);
if (
$(this)
.parent()
.hasClass("active")
) {
$(".sidebar-dropdown").removeClass("active");
$(this)
.parent()
.removeClass("active");
} else {
$(".sidebar-dropdown").removeClass("active");
$(this)
.next(".sidebar-submenu")
.slideDown(200);
$(this)
.parent()
.addClass("active");
}
});

$("#close-sidebar").click(function() {
$(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
$(".page-wrapper").addClass("toggled");
});




});
