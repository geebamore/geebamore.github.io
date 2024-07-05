(function ($) {
    "use strict";
    
    // loader
    var loader = function () {
        setTimeout(function () {
            if ($('#loader').length > 0) {
                $('#loader').removeClass('show');
            }
        }, 1000);
    };
    $('.navbar-brand').css('color','#ffff');
   // 'background:#EF233C';
    loader();
    
    
    // Initiate the wowjs
    new WOW().init();
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });
    
    
    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('.navbar').addClass('nav-sticky');
            $('.navbar-brand').css('color','#EF233C');
        } else {
            $('.navbar').removeClass('nav-sticky');
            $('.navbar-brand').css('color','#ffff');
        }
    });
    
    
    // Smooth scrolling on the navbar links
    $(".navbar-nav a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            
            $('html, body').animate({
                scrollTop: $(this.hash).offset().top - 45
            }, 1500, 'easeInOutExpo');
            
            if ($(this).parents('.navbar-nav').length) {
                $('.navbar-nav .active').removeClass('active');
                $(this).closest('a').addClass('active');
            }
        }
    });
    
    
    // Typed Initiate
    if ($('.hero .hero-text h2').length == 1) {
        var typed_strings = $('.hero .hero-text .typed-text').text();
        var typed = new Typed('.hero .hero-text h2', {
            strings: typed_strings.split(', '),
            typeSpeed: 100,
            backSpeed: 20,
            smartBackspace: false,
            loop: true
        });
    }
    
    
    // Skills
    $('.skills').waypoint(function () {
        $('.progress .progress-bar').each(function () {
            $(this).css("width", $(this).attr("aria-valuenow") + '%');
        });
    }, {offset: '80%'});


    // Testimonials carousel
    $(".testimonials-carousel").owlCarousel({
        center: true,
        autoplay: true,
        dots: true,
        loop: true,
        responsive: {
            0:{
                items:1
            }
        }
    });
    
    
    
    // Portfolio filter
    var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });

    $('#portfolio-filter li').on('click', function () {
        $("#portfolio-filter li").removeClass('filter-active');
        $(this).addClass('filter-active');
        portfolioIsotope.isotope({filter: $(this).data('filter')});
    });
    
})(jQuery);
$(document).ready(function () {
            $.get("post.xml", function (xml){
                $('content',xml).each(function (index){
                    const divpara=document.createElement("div");
                    const contain=document.getElementById("post");
                    const parabr= document.createElement("br");
                    const parah2 = document.createElement("h2");
                    const paraimg = document.createElement("img");
                    const paradate = document.createElement("a");
                    const parap= document.createElement("p");
                    const pararef=$(this).children("ref").text();
                    divpara.style.css="cursor:hand";
                    divpara.href=pararef;
                    divpara.onclick=function(){window.location.href= pararef;};
                    contain.appendChild(divpara);
                    parah2.innerText = $(this).children("heading").text();
                    divpara.appendChild(parah2);
                    paraimg.src= $(this).children("image").text();
                    paraimg.alt='img';
                    paraimg.loading='lazy';
                    paraimg.width='50%';
                    paraimg.height='30vh';
                    divpara.appendChild(paraimg);
                    divpara.appendChild(parabr);
                    paradate.href='#';
                    paradate.innerText = $(this).children("date").text();
                    divpara.appendChild(paradate);
                    parap.innerText = $(this).children("body").text()+" ... Read More";
                    divpara.appendChild(parap);
                });
            });
        });
$(document).ready(function(){
    $(".lb-cancel").attr("href","#");
    $(".lb-prev").attr("href","#");
    $(".lb-next").attr("href","#");
    $(".lb-close").attr("href","#");
    console.clear();
    console.log("%cGeebamore","position: absolute; top: 10px;color: #fff; padding:5px; font-weight: bold; font-family: helvetica; pading:10px; background: linear-gradient(rgba(239, 35, 60, .95), rgba(239, 35, 60, .95)); font-size: 40px; margin:0 auto; align:center;");
})

