


var navBarHeight = null;
var navbar = null;
var inner = null;

var sideNavBar = jQuery('#sideNavBar');

var sidebarStatus = false;

function navScrollFixed() {

    if (navbar != null && inner != null) {

        if (window.pageYOffset > 0) {
            inner[0].classList.add("fixedNav")

            navbar.css({
                'height': navBarHeight + 'px'
            });


            jQuery('.jet-popup.jet-popup--front-mode').css({
                'top': navBarHeight - 5 + 'px'
            });


        } else {
            inner[0].classList.remove("fixedNav");
            navbar.css('height', '');
            jQuery('.jet-popup.jet-popup--front-mode').css('top', '');
        }
    }
}

function setResize() {

    navBarHeight = inner.height();
    window.addEventListener('resize', function (event) {

        navBarHeight = inner.height();


        navScrollFixed();
        headerBandSticky();

    }, true);

}

function headerBandSticky() {

    var banner = jQuery('section.headerband_promo_freeclass_t1.customSection.sectionParent');
    if (!banner.length) {
        jQuery('header').removeClass('bannerSticky');
        return;
    }

    if (!banner.data('stickyAnchor')) {
        banner.data('stickyAnchor', banner.offset().top || 0);
    }

    var bannerAnchor = banner.data('stickyAnchor');
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop || 0;
    var bannerHeight = banner.outerHeight() || 0;

    if (scrollTop > bannerAnchor) {
        banner.addClass('is-fixed');
        jQuery('header').addClass('bannerSticky');
        jQuery('header.bannerSticky nav.fixedNav').css('top', bannerHeight + 'px');
    } else {
        banner.removeClass('is-fixed');
        jQuery('header').removeClass('bannerSticky');
        jQuery('header nav.fixedNav').css('top', '0');
    }

}

function _serializeFormToObject(form) {

    var paramObj = {};
    jQuery.each(jQuery(form).serializeArray(), function (_, kv) {
        if (paramObj.hasOwnProperty(kv.name)) {
            paramObj[kv.name] = jQuery.makeArray(paramObj[kv.name]);
            paramObj[kv.name].push(kv.value);
        }
        else {
            paramObj[kv.name] = kv.value;
        }
    });

    return paramObj;

}


function _openSideNav(type) {

    if (type == 'close') {
        jQuery('nav', sideNavBar)[0].classList.add("animate__slideOutRight");
        jQuery('nav', sideNavBar)[0].addEventListener('animationend', function (e) {
            // do something
            if (e.animationName == 'slideOutRight') {
                sideNavBar.css({
                    'display': 'none'
                });
                jQuery('nav', sideNavBar)[0].classList.add("animate__slideInRight")
                jQuery('nav', sideNavBar)[0].classList.remove("animate__slideOutRight")
                // sideNavBar[0].classList.add("animate__fadeOut")

                e.target.removeEventListener('animationend', function () {

                });

            }

        });

        sidebarStatus = false;
    }

    if (type == 'open') {

        // animate__slideInRight
        let w = window.innerWidth;
        if (w <= 991) {

            sideNavBar.css({
                'display': 'block'
            });
            // sideNavBar[0].classList.add("animate__fadeIn")
            jQuery('nav', sideNavBar)[0].classList.add("animate__slideInRight")

        }

        sidebarStatus = true;

    }

}


function setInnerElement() {

    if (jQuery('header').length > 0) {

        navbar = jQuery('header')

        if (jQuery('.elementor-inner', navbar).length > 0) {

            inner = jQuery('.elementor-inner', navbar);

        } else if (jQuery('nav.principal.navbar', navbar).length > 0) {

            inner = jQuery('nav.principal.navbar', navbar);

        }

    }

    // if(jQuery('.elementor-section.elementor-top-section.elementor-element.navbar').length > 0){

    //     navbar = jQuery('.elementor-section.elementor-top-section.elementor-element.navbar');

    //     if (jQuery('.elementor-container', navbar).length > 0) {

    //         inner = jQuery('.elementor-container', navbar);

    //     }
    // }



}

function deviceType() {

    let w = window.innerWidth;

    if (w <= 991) {

        return 'mobile';

    }
    if (w >= 992) {

        return 'desktop';

    }


}



function closingSidebarClick() {

    jQuery('#sideNavBar').on('click', function (e) {
        if (e.target === this) {

            // closeSidebarButton
            if (sidebarStatus == true) {

                _openSideNav('close');

            }

        }
    });

}



var escalaLeadFormLoadLock = true;

function scrollToLeadForm(smooth) {
    var element = jQuery('#lead-form .formatForm')[0];
    if (!element) {
        return;
    }

    var yOffset = window.innerWidth <= 999 ? -110 : -160;
    var y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;

    window.scrollTo({
        top: Math.max(0, y),
        behavior: smooth ? 'smooth' : 'auto'
    });
}

/**
 * Evita que al cargar la landing el navegador o CF7 hagan scroll al formulario
 * (rompe el hero/banner). Solo bloquea el arranque; los clics en .goToHash sí desplazan.
 */
function preventLeadFormScrollOnLoad() {
    if (!document.getElementById('lead-form')) {
        return;
    }

    if ('scrollRestoration' in history) {
        history.scrollRestoration = 'manual';
    }

    if (window.location.hash === '#lead-form') {
        history.replaceState(
            null,
            '',
            window.location.pathname + window.location.search
        );
    }

    var resetScroll = function () {
        if (!escalaLeadFormLoadLock) {
            return;
        }
        window.scrollTo(0, 0);
    };

    resetScroll();
    window.addEventListener('load', resetScroll);
    jQuery(document).on('wpcf7DOMContentLoaded', resetScroll);
    [0, 80, 250, 600, 1000].forEach(function (ms) {
        setTimeout(resetScroll, ms);
    });

    setTimeout(function () {
        escalaLeadFormLoadLock = false;
    }, 1200);
}

function scrollToHash() {
    jQuery(document).on('click', '.goToHash', function (e) {
        var href = this.getAttribute('href') || '';

        if (href.indexOf('#lead-form') === -1) {
            return;
        }

        e.preventDefault();
        escalaLeadFormLoadLock = false;
        scrollToLeadForm(true);
    });
}

function showTestimonials(type) {

    var l = jQuery('#landing-AllInOne-bootstrap .testimonial');


    if (l.length > 0) {

        if (type == 'show') {

            l.each((idx, element) => {

                jQuery(element).css({
                    'display': 'block'
                });

            });

            jQuery('.showMore').remove();

        }

        if (type == 'hide') {

            l.each((idx, element) => {


                if (idx > 2) {

                    jQuery(element).css({
                        'display': 'none'
                    });

                }
            });

        }

    }

}


function removeYoutubeElements(type){

    var aux = jQuery(type) || null;
    if( (aux != null && aux != undefined) ){

        try {

        jQuery(type).remove();
        } catch (error) {
            console.error('no se pudo retirar ', type);
        }

    }

}



function instanceYoutube() {

    var youtube = document.querySelectorAll(".youtube");

    if(youtube.length > 0){

    for (var i = 0; i < youtube.length; i++) {

        var x = jQuery(youtube[i]).attr('videoCover');

        var source = '';

        if(x != null && x != undefined){
            source = x;
        }else{
            source = "https://img.youtube.com/vi/" + youtube[i].dataset.embed + "/maxresdefault.jpg";
            // source = "https://i3.ytimg.com/vi/" + youtube[i].dataset.embed + "/sddefault.jpg";

            // https://i3.ytimg.com/vi/AHgA0QTtWBY/maxresdefault.jpg
        }

        var image = new Image();
        image.src = source;
        image.addEventListener("load", function () {
            youtube[i].appendChild(image);
        }(i));

        youtube[i].addEventListener("click", function () {

            var iframe = document.createElement("iframe");

            iframe.setAttribute("frameborder", "0");
            iframe.setAttribute("allowfullscreen", "");
            iframe.setAttribute("allow", "autoplay");
            iframe.setAttribute("src", "https://www.youtube.com/embed/" + this.dataset.embed + "?showinfo=0&amp;rel=0&amp;enablejsapi=1&autoplay=1");

            this.innerHTML = "";
            this.appendChild(iframe);
        });
    };

    }

    if( jQuery('.video-js').length > 0 ){

         var aux_video = jQuery('.video-js');



    for (var i = 0; i < aux_video.length; i++) {


     videojs( jQuery(aux_video[i])[0]  /* or selector string */, {

        techOrder: ['html5', 'flash'],
        controls: false,
        autoplay: false,
        preload: 'false'

        // flash: {
        //     swf: 'video-js.swf'
        // }
    }, function(){
        // Player (this) is initialized and ready.
        this.on('pause', function(){

        });
        this.on('ended', function(){

            this.posterImage.show(); //shows your poster image//
            this.currentTime(0);
            this.controlBar.hide(); //hides your controls//
            this.bigPlayButton.show(); //shows your play button//
            // this.hasStarted(false);

        });

        this.on("play", function()  //function to play the video again//
        {
            this.posterImage.hide(); //hides your poster//
            this.controlBar.show(); //shows your controls//
            this.bigPlayButton.hide(); //hides your play button//
        });
    });

    }
    }

}


function setInitSlizeButton(){

    if( !jQuery('[slizeRadioButton]').length > 0 ){

        return;

    }


    let pillButtonOnText = jQuery('.pill-button-selection_on'),
    pillButtonOffText = jQuery('.pill-button-selection_off'),
    pillButtonHighlight = jQuery('.pill-button-highlight'),
    pillButtonOnTextWidth = pillButtonOnText.outerWidth(),
    pillButtonOffTextWidth = pillButtonOffText.outerWidth(),
    pillButtonOnTextPosition = pillButtonOnText.position(),
    pillButtonOffTextPosition = pillButtonOffText.position(),
    pillButtonInput = jQuery('.pill-button-input');

jQuery('.pillButtonHighlight').css('width', pillButtonOnTextWidth);

jQuery('.pill-button-selection').on('click', function() {
  if(!jQuery(this).hasClass('pill-button-selection_active')) {

    jQuery('.pill-button-selection').removeClass('pill-button-selection_active');
    jQuery(this).addClass('pill-button-selection_active');

    jQuery('input.pill-button-input')[0].click();

    // if(jQuery(this).hasClass('pill-button-selection_off') && pillButtonInput.prop('checked',true)) {
    if(jQuery(this).hasClass('pill-button-selection_off') && pillButtonInput.prop('checked',true)) {

    //   pillButtonInput.prop('checked',false);
      pillButtonHighlight.css({
        'width': pillButtonOffTextWidth,
        // 'left': pillButtonOffTextPosition.left
        'left': 'unset',
        'right': 0
      });
    }
    else {
    //   pillButtonInput.prop('checked',true);
      pillButtonHighlight.css({
        'width': pillButtonOnTextWidth,
        // 'left': pillButtonOnTextPosition.left
        'left': 0,
        'right': 'unset'
      });
    }

  }
});

// if(pillButtonInput.prop('checked',true)) {// default on cold start
//   pillButtonHighlight.css('width', pillButtonOnTextWidth);
// } else {
//   pillButtonHighlight.css('width', pillButtonOffTextWidth);
// }

}


function _preventResetForms(){

    jQuery(document).on('reset', 'form.wpcf7-form', function(e) {
        e.preventDefault();

        jQuery('.ewp-phone-text').val('');

    });

        jQuery('.ewp-phone-text').on('focus click keypress', function () {

        if (this.value == '   -   -    ') {
            this.value = "";
        }

    });

}


function _openLinks(){

    jQuery('a[openLink]').click(function (e) {
        e.preventDefault();

        // console.log('force openLink', e.attr('href') );
        // console.log('force openLink', e );
        // console.log('force openLink', e.currentTarget.href );

        let aux = e.currentTarget.href || null;

        if( aux != null ){
            window.location.href = aux;
        }

    });

}


_preventResetForms();



jQuery(document).ready(function () {

    preventLeadFormScrollOnLoad();

    setInnerElement();

    scrollToHash();

    _openLinks();

    window.onload = function () {
        setResize();
        headerBandSticky();
    }

    window.onscroll = function () { navScrollFixed(); headerBandSticky(); };

    closingSidebarClick();

    instanceYoutube();

    jQuery('.customHeader .dropdown').hover(function() {
        jQuery(this).find('.dropdown-menu').first().stop(true, true).delay(100).fadeIn(100);
    }, function() {
        jQuery(this).find('.dropdown-menu').first().stop(true, true).delay(200).fadeOut(200);
    });


    setInitSlizeButton();


    jQuery(".hoverClick").hover(function(){

        jQuery(this).click();

        }, function(){

    });


});




jQuery(document).ready(function($) {
    $('#no-website').change(function() {
        if(this.checked) {
            $('#website-field').val('').attr('readonly', true).css('opacity', '0.5');
        } else {
            $('#website-field').attr('readonly', false).css('opacity', '1');
        }
    });
});

jQuery(document).ready(function($) {
    $('#no-asesores').change(function() {
        if(this.checked) {
            $('#asesores-field').val('').attr('readonly', true).css('opacity', '0.5');
        } else {
            $('#asesores-field').attr('readonly', false).css('opacity', '1');
        }
    });
});


