/**JS Masonry**/
var $ = jQuery.noConflict();
$(document).ready(function() {
  function kt_masonry($masonry)
  {
    var t = $masonry.attr("data-cols");
    if (t == "1") {
        var n = $masonry.width();
        var r = 1;
        return r
    }
    if (t == "2") {
        var n = $masonry.width();
        var r = 2;
        if (n < 480) r = 1;
        return r
    } else if (t == "3") {
        var n = $masonry.width();
        var r = 3;
        if (n < 480) r = 1;
       	else if (n >= 480 && n < 768) r = 2;
        else if (n >= 768 && n < 992) r = 3;
        else if (n >= 992) r = 3;
        return r
    } else if (t == "4") {
        var n = $masonry.width();
        var r = 4;
        if (n < 480) r = 1;
        else if (n >= 480 && n < 768) r = 2;
        else if (n >= 768 && n < 992) r = 3;
        else if (n >= 992) r = 4;
        return r
    } else if (t == "5") {
        var n = $masonry.width();
        var r = 5;
        if (n < 480) r = 1;
        else if (n >= 480 && n < 768) r = 2;
        else if (n >= 768 && n < 992) r = 3;
        else if (n >= 992 && n < 1140) r = 4;
        else if (n >= 1140) r = 5;
        return r
    } else if (t == "6") {
        var n = $masonry.width();
        var r = 5;
        if (n < 480) r = 1;
        else if (n >= 480 && n < 768) r = 2;
        else if (n >= 768 && n < 992) r = 3;
        else if (n >= 992 && n < 1160) r = 4;
        else if (n >= 1160) r = 6;
        return r
    } else if (t == "8") {
        var n = $masonry.width();
        var r = 5;
        if (n < 480) r = 1;
        else if (n >= 480 && n < 768) r = 2;
        else if (n >= 768 && n < 992) r = 3;
        else if (n >= 992 && n < 1160) r = 4;
        else if (n >= 1160) r = 8;
        return r
    }
  }
  function s($masonry)
  {
    var t = kt_masonry($masonry);
    var n = $masonry.width();
    var r = n / t;
    r = Math.floor(r);
    $masonry.find(".item-masonry").each(function (t) {
        $(this).css({
            width: r + "px"
        });
    });
  }

  	$('.kt-masonry').each(function () {
		var $masonry = $(this);
		var $layoutMode = $masonry.attr('data-layoutMode');
		s($masonry);
		// init Isotope
		var $grid = $masonry.isotope({
		  itemSelector: '.item-masonry',
		  layoutMode: $layoutMode,
		});

		$grid.imagesLoaded().progress( function() {
		    $grid.isotope('layout');
		});  
	});

    $(window).load(function(){
        $( ".portfolio_fillter .item-fillter.fillter-active" ).trigger( "click" );
    });
  	// bind filter button click
  	$('.kt-portfolio').each(function () {
  		var $masonry = $(this).find('.kt-masonry');
  		var $layoutMode = $masonry.attr('data-layoutMode');
  		s($masonry);
	    // init Isotope
	    var $grid = $masonry.isotope({
	      itemSelector: '.item-masonry',
	      layoutMode: $layoutMode,
	    });
  		
	    $('.portfolio_fillter .item-fillter').on( 'click', function() {
	      var $filterValue = $(this).attr('data-filter');
	      $grid.isotope({
	        filter: $filterValue
	      });
	      $(this).closest('.kt-portfolio').find('.portfolio_fillter .item-fillter').removeClass('fillter-active');
	      $(this).addClass('fillter-active');
	    });
  		
  	});


    $(window).on("debouncedresize", function (e) {
        $('.kt-masonry').each(function () { 
            var $masonry = $(this);
            var $layoutMode = $masonry.attr('data-layoutMode');
            
            s($masonry);
            // init Isotope
            var $grid = $masonry.isotope({
              itemSelector: '.item-masonry',
              layoutMode: $layoutMode,
            });

            $grid.imagesLoaded().progress( function() {
                $grid.isotope('layout');
            });
        });
    });
});

