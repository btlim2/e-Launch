$("#float_nav_1").click(function(event) {
    var text = this.href;
	var a1 = $('#float_nav_1');
	var a2 = $('#float_nav_2');
	var a3 = $('#float_nav_3');
	
	$('#float_nav_1').addClass('selected');
	$('#float_nav_2').removeClass('selected');
	$('#float_nav_3').removeClass('selected');
	
});

$("#float_nav_2").click(function(event) {
	var a1 = $('#float_nav_1');
	var a2 = $('#float_nav_2');
	var a3 = $('#float_nav_3');
	
	$('#float_nav_1').removeClass('selected');
	$('#float_nav_2').addClass('selected');
	$('#float_nav_3').removeClass('selected');

});

$("#float_nav_3").click(function(event) {
	var a1 = $('#float_nav_1');
	var a2 = $('#float_nav_2');
	var a3 = $('#float_nav_3');
	
	$('#float_nav_1').removeClass('selected');
	$('#float_nav_2').removeClass('selected');
	$('#float_nav_3').addClass('selected');
	
});

$(document).on('scroll', function() {
		var a1 = $('#float_nav_1');
		var a2 = $('#float_nav_2');
		var a3 = $('#float_nav_3');
		
	if($(this).scrollTop()>=$('.navbar-wrapper').position().top){
		$('#float_nav_1').addClass('selected');
		$('#float_nav_2').removeClass('selected');
		$('#float_nav_3').removeClass('selected');
	}
	if($(this).scrollTop()>=$('#floaty_section_2').position().top){
		$('#float_nav_1').removeClass('selected');
		$('#float_nav_2').addClass('selected');
		$('#float_nav_3').removeClass('selected');
	}

	if($(this).scrollTop()>=$('#floaty_section_3').position().top){
		$('#float_nav_1').removeClass('selected');
		$('#float_nav_2').removeClass('selected');
		$('#float_nav_3').addClass('selected');
	}
	
	
})