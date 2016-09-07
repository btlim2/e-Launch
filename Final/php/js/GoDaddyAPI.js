//ajax_get();

function retrieveInputDomainName() {
	var domainName = document.getElementById("inputDomainName");
	//alert(domainName.getAttribute("name"));
}

function ajax_get() {
	var clientId = 'VUxVr4wA_KLJLkmQNE6EG24pFzoWgGc';
	var apiKey = 'QbsjYygLTcDWte3JQbd8y2';
	//var domainName = document.getElementById("inputDomainName").getAttribute("value");
	var domainName = "www.google.com";
	url = "https://api.godaddy.com/v1/domains/available?domain="+domainName;
	
	/* var hr = createCORSRequest('GET', url);
	if (!hr) {
		throw new Error('CORS not supported');
	} */
	
	var hr = new XMLHttpRequest();
	hr.open("GET", url, true);
	hr.setRequestHeader("X-Parse-Application-Id", clientId);
	hr.setRequestHeader("X-Parse-REST-API-Key", apiKey);
	hr.setRequestHeader('Access-Control-Allow-Origin', '*');
	hr.setRequestHeader('Access-Control-Allow-Headers', 'Authorization');
	hr.setRequestHeader('Access-Control-Allow-Methods','GET');
	
	//hr.setRequestHeader('Access-Control-Allow-Headers','accept, content-type,clientId,apiKey,x-parse-session-token');
	hr.setRequestHeader("Content-type", "application/json", true);
	hr.send();
	
	hr.onreadystatechange = function() {
		if (hr.readyState == 4)
			alert('Ready'); //it means its ready!
		if (hr.readyState == 4 && hr.status == 200) {
			var data = JSON.parse(hr.responseText);
			//results.innerHTML = data.user;
			domainName.innerHTML = data;
		}
		alert(hr.status);
	}
	
	
	document.getElementById("inputDomainName").innerHTML = "requesting...";
	
}

function createCORSRequest(method, url) {
	var hr = new XMLHttpRequest();
	var clientId = 'VUxVr4wA_KLJLkmQNE6EG24pFzoWgGc';
	var apiKey = 'QbsjYygLTcDWte3JQbd8y2';
	  if ("withCredentials" in hr) {
		// HR for Chrome/Firefox/Opera/Safari.
		hr.open(method, url, true);
		hr.setRequestHeader("X-Parse-Application-Id", clientId);
		hr.setRequestHeader("X-Parse-REST-API-Key", apiKey);
	  } else if (typeof XDomainRequest != "undefined") {
		// XDomainRequest for IE.
		hr = new XDomainRequest();
		hr.open(method, url);
	  } else {
		// CORS not supported.
		hr = null;
	  }
	  return hr;
}

// Helper method to parse the title tag from the response.
function getTitle(text) {
	return text.match('<title>(.*)?</title>')[1];
}

// Make the actual CORS request.
function makeCorsRequest() {
	// This is a sample server that supports CORS.
	var url = 'https://api.godaddy.com/v1/domains/available?domain=www.google.com';

	var hr = createCORSRequest('GET', url);
	if (!hr) {
		alert('CORS not supported');
		return;
	}

	// Response handlers.
	hr.onload = function() {
		var text = hr.responseText;
		var title = getTitle(text);
		alert('Response from CORS request to ' + url + ': ' + title);
	};

	  hr.onerror = function() {
		alert('Woops, there was an error making the request.');
	  };

	  hr.send();
}

function buttonDomainCheck() {
	var $inputDomainName = $('#inputDomainName');
	if ($inputDomainName.val() == "")
		return;
	var domainExtensions = [".com", ".com.au", ".co", ".org",".net", ".net.au", ".club", ".biz", ".info", ".tk"];
	var url = "https://api.godaddy.com/v1/domains/available?domain=";
	clearTableContents();
	for (i = 0; i < domainExtensions.length; i++) {
		var eachDomExt = domainExtensions[i];
		var $domain = url + "www." + $inputDomainName.val() + eachDomExt;
		domainQuery($domain);
	}
	
	//Domain Name Suggestions
	//https://api.ote-godaddy.com/v1/domains/suggest?query=pokemon&&&&&&&limit=10&
	//var urlDomainSuggestions = "https://api.ote-godaddy.com/v1/domains/suggest?query=" + $inputDomainName.val() + "&&&&&&&&";
	//domainQuery(urlDomainSuggestions);
	
}

function domainQuery($eachUrl) {
	var $table = $('#domainsTable');
	
	$.ajax({		
		type: "GET",
		url: $eachUrl,
		headers: {"Authorization": "sso-key dKDGRBPDL3c8_7uiSb8E199Fd8zcpLkNVBy:BpXkQkMDaZE3qyeMAt5Emr"},
		success: function(items) {
			console.log(items)
			$table.append('<tr> <td>' + items.domain +  '</td> <td>' + formatPrice(items.price) + '</td> <td>' + items.available + '</td> </tr>');
			//$displayName.val(items.domain);
			//$displayAvailability.val(items.available);
			
		}
	})
}

function formatPrice(price) {
	if (price == null){
		return '-';
	}else{
		return '$' + price.toLocaleString('en');
	}
}

function clearTableContents() {
	var table = document.getElementById('domainsTable');
	while(table.rows.length > 1) {
	  table.deleteRow(1);
	}
}

/*

function buttonDomainCheck() {
	var $inputDomainName = $('#inputDomainName');
	var $domain = "www." + $inputDomainName.val() + ".com";
	$.ajax({
		
		
		type: "GET",
		url: "https://api.godaddy.com/v1/domains/available?domain="+ $domain,
		headers: {"Authorization": "sso-key dKDGRBPDL3c8_7uiSb8E199Fd8zcpLkNVBy:BpXkQkMDaZE3qyeMAt5Emr"},
		success: function(items) {
			console.log(items)
			
			//$displayName.val(items.domain);
			//$displayAvailability.val(items.available);
			
			}
	})
}

*/

/*
$.ajax({
	type: "GET",
	
	url: "https://api.godaddy.com/v1/domains/available?domain=www.google.com",
	headers: {
		"Authorization": "sso-key {VUxVr4wA_KLJLkmQNE6EG24pFzoWgGc}:{QbsjYygLTcDWte3JQbd8y2}"
	},
	success: function(body) {console.log(body)}
})
*/
