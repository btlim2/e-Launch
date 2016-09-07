function urlQuery() {

	
	$.ajax({		
		type: "GET",
		url: "",
		crossDomain: true,
		dataType:"jsonp",
		success: function(data) {
			console.log(data)
		}
	});
}