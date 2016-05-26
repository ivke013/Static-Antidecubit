/*-------------------------------------------------------------------------------------------------------------------------------
 * This is main JS file that contains custom style rules used in this template
 *-------------------------------------------------------------------------------------------------------------------------------
 *
 * Version: 1.0
 * Author: Ivan Stojmenovic Ivke
 * Email: office.stojmenovic@gmail.com
 * Website: www.is-dev.info
 * Copyright: (C) 2013-2016
 *
 *-------------------------------------------------------------------------------------------------------------------------------*/

/*
 * Ready
 */
$(document).ready(function ()
{
     //initialize swiper when document ready
    var homeSlider = new Swiper ('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 30
    })
});