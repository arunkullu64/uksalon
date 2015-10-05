$(document).ready(function(){

	var header_height = $('#header').height();

	/* parallax header */
	function parallax(){
	  var scrolled = $(window).scrollTop();
	  $('#header .backstretch img').css('top',''+-(scrolled*0.6)+'px');
      $('.heading').css('background-position', 'center '+-(scrolled*0.5)+'px');
	}


    /* backstretch slider */
    $('.header-slide').backstretch([
      "assets/images/bg01.jpg",
      "assets/images/bg02.jpg",
      "assets/images/bg03.jpg"

      ], {
        fade: 850,
        duration: 4000
    });


    /* navbar */
	$(window).scroll(function(){
		parallax();
		if($(window).scrollTop() > header_height){
            //$('.navbar').css('border-bottom-color', '#e9573f');
		}else{
            //$('.navbar').css('border-bottom-color', '#fff');
		}
	});


    /* nice scroll */
    $( 'html' ).niceScroll({
        cursorcolor: '#434a54',
        cursorwidth: '10px',
        cursorborder: '1px solid #434a54',
        cursoropacitymax: 0.9,                
        scrollspeed: 200,
        zindex: 1060
    });


    /* carousel testimony */
    $('#testislider').carousel({
        interval: 6000
    })

	/* carousel partner */
	var jcarousel = $('.jcarousel');

    jcarousel
        .on('jcarousel:reload jcarousel:create', function () {
            var width = jcarousel.innerWidth();

            if(width >= 992){
            	width = width / 5;
            } else if (width >= 768) {
                width = width / 4;
            } else if (width >= 480) {
                width = width / 3;
            } else if(width >= 350){
            	width = width / 2;
            }

            jcarousel.jcarousel('items').css('width', width + 'px');
        })
        .jcarousel({
            wrap: 'circular'
        });

    $('.jcarousel-control-prev')
        .jcarouselControl({
            target: '-=1'
        });

    $('.jcarousel-control-next')
        .jcarouselControl({
            target: '+=1'
    	});

    $('.jcarousel-pagination')
        .on('jcarouselpagination:active', 'a', function() {
            $(this).addClass('active');
        })
        .on('jcarouselpagination:inactive', 'a', function() {
            $(this).removeClass('active');
        })
        .on('click', function(e) {
            e.preventDefault();
        })
        .jcarouselPagination({
            perPage: 1,
            item: function(page) {
                return '<a href="#' + page + '">' + page + '</a>';
        }
    });


    /* scrolltop */
    $('.scroltop').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });


    /* masonry layout */
    var $container = $('.container-realestate');
    $container.imagesLoaded( function(){
        $container.masonry();
    });


    /* modal */
    $('.modal').on('shown.bs.modal', function () {
        var curModal = this;
        $('.modal').each(function(){
            if(this != curModal){
                $(this).modal('hide');
            }
        });
    });


    /* tooltip */
    $('[rel="tooltip"]').tooltip();


    /* map contact */
    $("#map").gmap3({
        map: {
            options: {
              center: [-7.866315,110.389574],
              zoom: 12,
              scrollwheel: false
            }  
         },
        marker:{
            latLng: [-7.866315,110.389574],
            options: {
             icon: new google.maps.MarkerImage(
               "https://dl.dropboxusercontent.com/u/29545616/Preview/location.png",
               new google.maps.Size(48, 48, "px", "px")
             )
            }
         }
    });


    /* carousel single */
    $('#slider-property').carousel({
        interval: 6500
    })


    /* map property */
    $('a[href="#location"]').on('shown.bs.tab', function(){
        $("#map-property").gmap3({
            map: {
                options: {
                  center: [-7.866315,110.389574],
                  zoom: 13,
                  scrollwheel: false
                }  
             },
            marker:{
                latLng: [-7.866315,110.389574],
                options: {
                 icon: new google.maps.MarkerImage(
                   "https://dl.dropboxusercontent.com/u/29545616/Preview/location.png",
                   new google.maps.Size(48, 48, "px", "px")
                 )
                }
             }
        });
    });

    var agreed = $("#agree, #t-and-c");
       
    agreed_terms(agreed);

    $(document).on("change","#agree, #t-and-c", function(){
        var agreed = $(this);
        agreed_terms(agreed);
    });

});

$(function(){
    $("#signup_submit").click(function(){
        var _token = $('input[name=_token]').val();
        var signupEmail = $("#signup_email").val();
        var signup_fname = $("#signup_fname").val();
        var signup_password = $("#signup_password").val();
        var signup_lname = $("#signup_lname").val();
        var signup_profile_name = $("#signup_profile_name").val();
        var signup_postal_code = $("#signup_postal_code").val();
        
        var gender = $('input[name=gender]:checked').val();
        resp = "";
        $.ajax({
            url : __base_url+'/ajax',
            data : {'email' : signupEmail,'_token' : _token,'fname' : signup_fname,'gender' : gender,'password' : signup_password,'lname' : signup_lname,'profile_name' : signup_profile_name,'postal_code' : signup_postal_code},
            type: 'post',
            success : function(resp){
                resp = $.parseJSON(resp);
                if(resp.success == true){
                    $("#success_msg").fadeIn().html("Successfully Sign up!");
                }else{
                    error = "";
                    if(resp.errors.email[0] != ""){
                        error += resp.errors.email[0]+'<br />';   
                    }
                    if(resp.errors.password[0] != ""){
                        error += resp.errors.password[0]+'<br />';   
                    }
                    if(resp.errors.fname[0] != ""){
                        error += resp.errors.fname[0]+'<br />';   
                    }
                    $("#error_msg").fadeIn().html(error);
                }
            },
            error : function(resp){
                
            }
        })   
    })
})

function agreed_terms(agreed){

    signup_submit = $("#signup_submit, #main-button");

    if(agreed.prop("checked"))
    {
        signup_submit.removeAttr('disabled');
        $(document).find("#t-and-c-label").addClass('checked');
    }
    else
    {
        signup_submit.attr('disabled','disabled');
        $(document).find("#t-and-c-label").removeClass('checked');
    }
}