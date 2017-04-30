/**
 * Created by Emilio Gaitan on 25/4/2017.
 */
var header_height;
var fixed_section;
var floating = false;

$().ready(function(){
    suggestions_distance = $("#suggestions").offset();
    pay_height = $('.fixed-section').outerHeight();

    $(window).on('scroll', materialKit.checkScrollForTransparentNavbar);

    // the body of this function is in assets/material-kit.js
    materialKit.initSliders();
});