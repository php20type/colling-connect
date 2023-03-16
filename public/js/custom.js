$(document).ready(function(){

	$(".header-btn.header-menu-btn a").click(function() {
		$(this).toggleClass("open");
		$(".menu-drawer-main").toggleClass("drawer-open");
		$("body").toggleClass("menu-drawer-open");
	});

	$("ul.menubar-social-menu li a").mouseover(function(event){
		event.preventDefault();
		$("ul.menubar-social-icons li").css("opacity", "0");
		$("#"+$(this).attr("rel")).css("opacity", "1");
	});
	$("ul.menubar-social-menu").mouseleave(function(){
		$("ul.menubar-social-icons li").css("opacity", "0");
		$(".menubar-social-nav").removeClass("twitter facebook youyube linkedin");
	});

	$("a.social-twitter").mouseover(function() {
		$(".menubar-social-nav").removeClass("facebook youyube linkedin").addClass("twitter");
	});
	$("a.social-facebook").mouseover(function() {
		$(".menubar-social-nav").removeClass("twitter youyube linkedin").addClass("facebook");
	});
	$("a.social-youyube").mouseover(function() {
		$(".menubar-social-nav").removeClass("twitter facebook linkedin").addClass("youyube");
	});
	$("a.social-linkedin").mouseover(function() {
		$(".menubar-social-nav").removeClass("twitter facebook youyube").addClass("linkedin");
	});


	var swiper = new Swiper(".hero-slider-inner .hero-slider", {
		slidesPerView: 1,
	    spaceBetween: 0,
	    loop: true,
	  	speed: 1000,
	  	autoplay: {
	        delay: 2500,
	        disableOnInteraction: false,
	    },
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});

	$(".second-mover-form-link").click(function() {
		$(this).toggleClass("active");
		$(this).next().slideToggle();
	});

    $(".tracker-accord-head").on("click", function () {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $(this).siblings(".tracker-accord-content").slideUp(200);
        } else {
            $(".tracker-accord-head").removeClass("active");
            $(this).addClass("active");
            $(".tracker-accord-content").slideUp(200);
            $(this).siblings(".tracker-accord-content").slideDown(200);
        }
    });

    $(".faqs-accord-head").on("click", function () {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $(this).siblings(".faqs-accord-content").removeClass("active");
        } else {
            $(".faqs-accord-head").removeClass("active");
            $(this).addClass("active");
            $(".faqs-accord-content").removeClass("active");
            $(this).siblings(".faqs-accord-content").addClass("active");
        }
    });

    $(".managers-accord-head").on("click", function () {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $(this).siblings(".managers-accord-content").slideUp(200);
        } else {
            $(".managers-accord-head").removeClass("active");
            $(this).addClass("active");
            $(".managers-accord-content").slideUp(200);
            $(this).siblings(".managers-accord-content").slideDown(200);
        }
    });


	

});