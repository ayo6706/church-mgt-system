
jQuery(document).ready(function($){


      $(window).scroll(function() {
        
        
        
        if($(window).scrollTop() < 80 ) {
            
            
            $('header').css({
                'background-color': '#12ab63'
                
            });
            
        } else {
            
            $('header').css ({
               'margin-top': '0px',
                'opacity': '1'
                
            });
            
            $('header').css({
                'background-color': 'rgba(59, 59 , 59, 0.7)',
                'border-color': '#444'
                
            });
            
            $('.cd-logo img').css({
               'height': '35px',
                'padding-top': '0px'
                
            });
            
            $('.cd-main-nav > li > a ').css({
                'padding-top': '15px'
                
                
            });
            
            
        }
       
        
        });
    
    
    

//add smooth scrolling
    
   
    
    $('.cd-main-nav li, #scroll-to-top').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
 
   
});




  //move nav element position according to window width
  moveNavigation();
  $(window).on('resize', function(){
    (!window.requestAnimationFrame) ? setTimeout(moveNavigation, 300) : window.requestAnimationFrame(moveNavigation);
  });


        //mobile version - open/close navigation
  $('.cd-nav-trigger').on('click', function(event){
    event.preventDefault();
    if($('header').hasClass('nav-is-visible')) $('.moves-out').removeClass('moves-out');
    
    $('header').toggleClass('nav-is-visible');
    $('.cd-main-nav').toggleClass('nav-is-visible');
    $('.cd-main-content').toggleClass('nav-is-visible');
  });

  //mobile version - go back to main navigation
  $('.go-back').on('click', function(event){
    event.preventDefault();
    $('.cd-main-nav').removeClass('moves-out');
  });

  //open sub-navigation
  $('.cd-subnav-trigger').on('click', function(event){
    event.preventDefault();
    $('.cd-main-nav').toggleClass('moves-out');
  });

  function moveNavigation(){
    var navigation = $('.cd-main-nav-wrapper');
      var screenSize = checkWindowWidth();
        if ( screenSize ) {
          //desktop screen - insert navigation inside header element
      navigation.detach();
      navigation.insertBefore('.cd-nav-trigger');
    } else {
      //mobile screen - insert navigation after .cd-main-content element
      navigation.detach();
      navigation.insertAfter('.cd-main-content');
    }
  }

  function checkWindowWidth() {
    var mq = window.getComputedStyle(document.querySelector('header'), '::before').getPropertyValue('content').replace(/"/g, '').replace(/'/g, "");
    return ( mq == 'mobile' ) ? false : true;
  }

             
 $(".owl-demo").owlCarousel({
              items : 4,
              lazyLoad : true,
              autoPlay: true,
              pagination : false,
              animationSpeed: 3000,
              itemsDesktop : [1199,4],
              itemsDesktopSmall : [979,4],
              itemsTablet : [768,2],
              itemsTabletSmall : false,
              itemsMobile : [480,1],
              singleItem : false,
              itemsScaleUp : false,
              slideSpeed : 200,              
              rewindSpeed : 1000,
              stopOnHover : true,
              rewindNav : true,
              scrollPerPage : false,
              responsive : true,
              responsiveRefreshRate : 200,
              responsiveBaseWidth : window,
              

                });
                         
  // ===== Scroll to Top ==== 
  $(window).scroll(function() {
      if ($(this).scrollTop() >= 100) {       
          $('#return-to-top').fadeIn(200);   
      } else {
          $('#return-to-top').fadeOut(200);  
      }
  });
  $('#return-to-top').click(function() {     
      $('body,html').animate({
          scrollTop : 0                
      }, 500);
  });


  
});
//contact form ajax request
	$("#contactForm input,#contactForm textarea").jqBootstrapValidation({
    preventSubmit: true,
    submitError: function($form, event, errors) {
      // additional error messages or events
    },
    submitSuccess: function($form, event) {
      event.preventDefault(); // prevent default submit behaviour
      // get values from FORM
      var name = $("input#name").val();
      var email = $("input#email").val();
      var phone = $("input#phone").val();
      var Subject = $("input#Subject").val();
      var message = $("textarea#message").val();
      var firstName = name; // For Success/Failure Message
      // Check for white space in name for Success/Fail message
      if (firstName.indexOf(' ') >= 0) {
        firstName = name.split(' ').slice(0, -1).join(' ');
      }
      $this = $("#sendMessageButton");
      $this.prop("disabled", true); // Disable submit button until AJAX call is complete to prevent duplicate messages
      $.ajax({
        url: "./php/form.php",
        type: "POST",
        data: {
          name: name,
          phone: phone,
          email: email,
          Subject: Subject,
          message: message
        },
        cache: false,
        success: function() {
          // Success message
          $('#success').html("<div class='alert alert-success'>");
          $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</button>");
          $('#success > .alert-success')
            .append("<strong>Your message has been sent. </strong>");
          $('#success > .alert-success')
            .append('</div>');
          //clear all fields
          $('#contactForm').trigger("reset");
        },
        error: function() {
          // Fail message
          $('#success').html("<div class='alert alert-danger'>");
          $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</button>");
          $('#success > .alert-danger').append($("<strong>").text("Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!"));
          $('#success > .alert-danger').append('</div>');
          //clear all fields
          $('#contactForm').trigger("reset");
        },
        complete: function() {
          setTimeout(function() {
            $this.prop("disabled", false); // Re-enable submit button when AJAX call is complete
          }, 1000);
        }
      });
    },
    filter: function() {
      return $(this).is(":visible");
    },
  });

  $("a[data-toggle=\"tab\"]").click(function(e) {
    e.preventDefault();
    $(this).tab("show");
  });



/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
  $('#success').html('');

             

});






