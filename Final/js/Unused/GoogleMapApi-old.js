alert('Hello');
jsonQuery();

function jsonQuery() {
	//var $table = $('#domainsTable');
	
	$.ajax({		
		type: "GET",
		url:"http://13.73.116.179/api.php?",
		//headers: {"Authorization": "sso-key dKDGRBPDL3c8_7uiSb8E199Fd8zcpLkNVBy:BpXkQkMDaZE3qyeMAt5Emr"},
		success: function(data) {
			console.log(data)

		}
	})
}

function testing() {
	
	var xmlhttp = new XMLHttpRequest();
	var url = "mylist.json";


	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			var myArr = JSON.parse(xmlhttp.responseText);
			myFunction(myArr);
		}
	};
	xmlhttp.open("GET", url, true);
		xmlhttp.setRequestHeader('Access-Control-Allow-Origin', '*');
	xmlhttp.setRequestHeader('Access-Control-Allow-Headers', 'Authorization');
	xmlhttp.setRequestHeader('Access-Control-Allow-Methods','GET');
	
	xmlhttp.send();
}