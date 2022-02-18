$(document).ready(function () {
  $(".squeez_sidebar").click(function () {
    $("#mySidenav").css("width", "70px");
    $(".logo").css("display", "none");
    $(".icon").css("display", "block");
    $(".icon-a").css("display", "flex");
    $(".icon-a").css("margin-left", "-7px");
    $(".icon-a span").css("display" , "none");
    $(".nav").css("display", "none");
    $(".nav2").css("display", "block");
    $(".squeez_sidebar").css("display", "none");
  });
  $("#navbar_expand").click(function () {
    $("#mySidenav").css("width", "300px");
    $(".logo").css("display", "block");
    $(".icon-a span").css("display" , "inline-block");
    $(".icon-a").css("justify-content" , "flex-start");
    $(".nav").css("display", "block");
    $(".squeez_sidebar").css("display", "block");
  });
});