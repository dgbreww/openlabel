$(function(){
	$("#ham").click(function(){
        $(this).toggleClass('open');
        $(".sidebar").toggleClass("show");
    });
    $('header .searching').click(function(){
    	$('.search-main').addClass('open');
    });
    $('.search-main .close').click(function(){
    	$('.search-main').removeClass('open');
    });
    $(window).scroll(function(){
    	if($(window).scrollTop() > 50){
    		$('.stickey').css({
    			'position':'fixed',
    			'z-index':'999999',
    			'width':'100%',
    			'background':'#fff'
    		});
    	}else{
    		$('.stickey').css({
    			'position':'unset'
    		});
    	}
    });
    $(document).on('click', '.like', function(event) {
		event.preventDefault();
		$(this).toggleClass('active');
	});
    $('.trending-jobs-cards').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		infinite: false,
		 prevArrow:"<button type='button' class='slick-prev'><i class='fa-solid fa-chevron-left'></i></button>",
		 nextArrow:"<button type='button' class='slick-next'><i class='fa-solid fa-chevron-right'></i></button>",
		 responsive: [
		 	{
		 		breakpoint: 1200,
		 		settings: {
		 			slidesToShow: 2,
		 			slidesToScroll: 1
		 		}
		 	},
		 	{
		 		breakpoint: 768,
		 		settings: {
		 			slidesToShow: 1,
		 			slidesToScroll: 1
		 		}
		 	}
		 ]
	});
	$('.testimonial-sec .testimonial-img-sec').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: false,
		autoplay: true,
		asNavFor: '.testimonial-sec .testimonial-card-sec-inner'
	});
	$('.testimonial-sec .testimonial-card-sec-inner').slick({
	    slidesToShow: 4,
	    slidesToScroll: 1,
	    vertical:true,
	    asNavFor: '.testimonial-sec .testimonial-img-sec',
	    dots: false,
	    focusOnSelect: true,
	    verticalSwiping:true
	});

	 $('.switch input').click(function(){
    	if($(this).is(':checked')){
	    	// console.log('check')
	    	$('.active-creator').css('color','#0096c7');
	    	$('.active-artist').css('color','#000');
	    }else{
	    	// console.log('uncheck')
	    	$('.active-artist').css('color','#0096c7');
	    	$('.active-creator').css('color','#000');
	    }
    });

	 $('.dashboard .details .dashboard-user .user-img i').click(function(){
	 	$(this).next('.profile-dropdown').slideToggle();
	 });
	 $('.dashboard .table_ table tr td .action').click(function(){
	 	$(this).children('.action-dropdown').slideToggle();
	 });
	 $(".filter-tab-inner").click(function(){

       // self clicking close
       if($(this).next(".filter-tab-content").hasClass("active")){
         $(this).next(".filter-tab-content").removeClass("active").slideUp()
       }
	     else{
	     $(".filter-tab-content").removeClass("active").slideUp()
	     // $(".card .card-header span").removeClass("fa-minus").addClass("fa-plus");
	       $(this).next(".filter-tab-content").addClass("active").slideDown()

	      }

	    });
	    $(".likes-click").click(function() {
	 	var i = $(this).parent('span').children('i');
		 $(i).toggleClass('like-bg');
	 });
});