function ajax_get() {
	var hr = new XMLHttpRequest();
	
	var file = "mylist.json";
	
	var results = document.getElementById("results");
	
	hr.open("GET", file, true);
	hr.setRequestHeader("Content-type", "application/json", true);
	hr.onreadystatechange = function() {
		if (hr.readyState == 4 && hr.status == 200) {
			var data = JSON.parse(hr.responseText);
			//results.innerHTML = data.user;
			results.innerHTML = "";
			
			for (var obj in data) {
				results.innerHTML += data[obj].user""; 
			}
		}
	}
	
	hr.send(null);
	document.getElementById("results").innerHTML = "requesting...";
	
}

function ajax_post_format() {
	var hr = new XMLHttpRequest();
	
	var url = "mylist.json";
	var fn = document.getElementById("firstname_name").value;
	var ln = document.getElementById("lastname_name").value;
	var vars = "firstname=" + fn + "&lastname=" + ln;
	
	hr.open("POST", url, true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	hr.onreadystatechange = function() {
		if (hr.readyState == 4 && hr.status == 200) {
			var return_data = hr.responseText;
			document.getElementById("status").innerHTML = return_data;
		}
	}
	
	hr.send(vars);
	document.getElementById("status").innerHTML = 
	
	
}