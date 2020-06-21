$(function(){
  // gestioni des menus du header
  $(".sub-menu").hide();

  $(".menu-menu-de-navigation li").mouseenter(function(){
    $(this).css("background", "cadetblue");
  })

  $(".menu-item-159").mouseenter(function(){
    $(".menu-item-159 .sub-menu").show();
  });
  $("#menu-menu-de-navigation").mouseleave(function(){
    $(".menu-item-159 .sub-menu").hide();
  });
  $(".menu-item-31").mouseenter(function(){
    $(".menu-item-31 .sub-menu").show();
  });
  $("#menu-choix-de-lecole").mouseleave(function(){
    $(".menu-item-31 .sub-menu").hide();
  });
  $(".menu-item-27").mouseenter(function(){
    $(".menu-item-27 .sub-menu").show();
  });
  $("#menu-choix-des-labs").mouseleave(function(){
    $(".menu-item-27 .sub-menu").hide();
  });

  //bouton switch

});
