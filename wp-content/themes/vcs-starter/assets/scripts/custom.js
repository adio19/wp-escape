$(document).ready(function() {

  $("nav-list").click(function() {

    var hrefAttr = $(this).attr('href');
    var currentPosition = $(document).scrollTop();
    var PositionToGo = $(hrefAttr).offset().top;

    $("lol").click(function() {

    var hrefAttr = $(this).attr('href');
    var currentPosition = $(document).scrollTop();
    var PositionToGo = $(hrefAttr).offset().top;

  });
});
