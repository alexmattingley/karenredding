var $ = jQuery.noConflict();

$(document).ready(function(){
    hero_banner_height();
});


/***********************
 * function for setting hero_banner height
 */

function hero_banner_height() {
    var viewport_width = document.documentElement.clientWidth;
    var viewport_height = document.documentElement.clientHeight;
    var hero_height;
    if(viewport_width <= 1200) {
        hero_height = (viewport_height * .8);
    }else {
        hero_height = (viewport_height *.75);
    }
    $('.hero-banner').height(hero_height);
}