/*
 *  Toggles header search on and off
 */

jQuery(document).ready(function($){
  $(".search-toggle").click(function(){
    $(".search-form").toggleClass('active');
  });
});