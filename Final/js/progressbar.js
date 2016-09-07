$('ol.progressbar li').click(function () {
	

	if ($(this).attr('class') == ('is-active'))
		$(this).attr('class','is-complete');
	else if ($(this).attr('class') == ('is-complete'))
		$(this).attr('class','is-active');
	else if ($(this).attr('class') == null )
		$(this).attr('class','is-active');
	else if ($(this).attr('class') == ('progress__last'))
		$(this).attr('class','is-active progress__last');

	//console.log($(this).attr('class'));

	var count = 5;
	var currentClick = $(this).attr('data-step');
	var diff = Number(count) - Number(currentClick);
	//console.log(diff);
	//Removing all the above and put it to grey color progress bar.
	for (i = 1; i <= diff; i++) {
		var nthChild = Number(currentClick) + Number(i);
		$('ol.progressbar li:nth-child('+ nthChild +')').attr('class',null);
	}

	//Making all the points below green color progress bar.
	for (i = 1; i < currentClick; i++) {
		$('ol.progressbar li:nth-child('+ i +')').attr('class', 'is-complete');
	}

	if (currentClick != 5 && $(this).attr('class') == ('is-complete')){
		var nextChild = Number(currentClick) + 1;
		$('ol.progressbar li:nth-child('+ nextChild +')').attr('class','is-active');
	}

});

$(document).ready(function() {

});