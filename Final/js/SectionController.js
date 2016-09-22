


function abnToDomain7() {
	//animateMe();
	//$('#abn').slideUp();
	$('#abn').hide('slow');
	$('#domain').show('slow');
	


	//$('#domain').removeClass('hide');
	//$('#abn').addClass('hide');
}

function abnToDomain()  {
/*  $('html, body').stop().animate({
        scrollTop: $('#domain').offset().top

    }, 1500, 'easeInOutExpo');*/
    var $current = $(this);
    console.log($current);

    $('#domain').removeClass('hide');

    $('html, body').stop().animate({
        scrollTop: $('#domain').offset().top

    }, 1500, 'easeInOutExpo', function() {
    	$('#abn').addClass('hide');
    });
}


function abnToDomain2() {
	  $( "#abn" ).animate({
		opacity:"toggle",
	  	height: "toggle"
	  }, 750,'easeInOutExpo' );

	  $( "#domain" ).animate({
	  	opacity: "show"
	  }, 750,'easeInOutExpo' );
}

function abnToDomain3() {
	console.log($('#domain').offset().top);
	//$('html,body').scrollTo($('#abn').hash,$('#domain').hash); 
	$('html, body').stop().animate({
            scrollTop: $('#domain').offset().top
        }, 1500, 'easeInOutExpo');

}

function abnToDomain4() {
	  $( "#abn" ).animate({
		  opacity: "hide"
		}, {
		  duration: "fast"
		});


	  $( "#domain" ).animate({
		  height: "toggle"
		}, {
		  duration: "slow",
		  easing: "easein"
		});

}