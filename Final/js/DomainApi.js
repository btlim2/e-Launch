// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
function createOpenModal(url) {
	modal.style.display = "block";

	var $divModal = $('.modal-content');
	var $pURL = $('#p-url');
	var $aIwmn = $('#a-iwmn');
	var $aGoDaddy = $('#a-godaddy');
	var $aHostGator = $('#a-hostgator');
	var $aNameCheap = $('#a-namecheap');
	var $aEasyName = $('#a-easyname');
	var $aDomainCom = $('#a-domaincom');
	
	$pURL.text(url);
	$aIwmn.attr("href","https://iwantmyname.com/search?domain=" + url);
	$aGoDaddy.attr("href","https://au.godaddy.com/domains/searchresults.aspx?domainToCheck=" + url);
	$aHostGator.attr("href","https://register.hostgator.com/?search=" + url);
	$aNameCheap.attr("href","https://www.namecheap.com/domains/registration/results.aspx?domain=" + url);
	$aEasyName.attr("href","https://www.easyname.com/en/domain/search/" + url);
	$aDomainCom.attr("href","https://secure.domain.com/register/registration.bml?dom_lookup=" + url);
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



// -------------------------------------------------------------------------------

//A click event which runs when it is being activated.
//It searched the closest row and gets the input(URL) from it.
$(document).on("click", "#domainsTable tr .openModal", function(e) {
	//var $url = $(this).closest("tr")
						//.find(".tdclass")
						//.text();
	var $id = e.target.id;
	var $url = $(this).closest('tr').find("#" + $id + "").text();
	console.log($url);
	createOpenModal(formatURLString($url));
});

//Prevents website from refreshing when enter is clicked.
$(function() {
    $("form").submit(function() { return false; });
});

//Start the function by pressing the enter key.
$('#inputDomainName').keydown(function (e){
    if(e.keyCode == 13){
    	$('#inputDomainName').blur();
        buttonDomainCheck();
    }
})

//Format and return the URL to remove 'www.' string.
function formatURLString(url) {
	return url.substring(4);
}

// Helper method to parse the title tag from the response.
function getTitle(text) {
	return text.match('<title>(.*)?</title>')[1];
}

//Function for domain button check.
function buttonDomainCheck() {
	var $inputDomainName = $('#inputDomainName');
	if ($inputDomainName.val() == "")
		return;

	var url = "https://api.godaddy.com/v1/domains/suggest?query=";
	clearTableContents();

	$('.table-results').height(200);
	var $domain = url + $inputDomainName.val() + "&&&&&&&limit=12&";
	domainQuery($domain);
}

//AJAX GET function to query the API and obtain the JSON
function domainQuery($eachUrl) {
	var $table = $('#domainsTable');
	$('#blob').css("visibility", "visible");
	$('#inputDomainName').attr("disabled", "disabled");
	$.ajax({		
		type: "GET",
		url: $eachUrl,
		headers: {"Authorization": "sso-key dKDGRBPDL3c8_7uiSb8E199Fd8zcpLkNVBy:SFozMXx7RP7XeRpQwB7rAm"},
		success: function(items) {
			//createTableHeader();
			console.log(items);

			var content = '<tr>';

			for (i = 0; i < items.length; i++) {
				var eachItem = items[i];
				var count = i+1;
				var countString = count.toString();

				content += '<td id= "'+ countString+'" class="tdclass tdformat">' + "www." +eachItem.domain +  '</td> <td class="tdformat">' + '<img id= "'+ countString+'" class="openModal"'
					+' onclick="createOpenModal()" src="img/gotolink.png"></img>' + '</td>';

				var noOfCellsCount = 0;


				if (i == 2 || i==5 || i==8 || i==11) {
					content += "</tr>";
					$table.append(content);
					content = '<tr>';
				}

				/*
				$table.append('<tr><td class="tdclass tdformat">' + "www." +eachItem.domain +  '</td> <td class="tdformat">' + '<button id= "'+ countString+'" class="openModal"'
					+' onclick="createOpenModal()" >Link!</button>' + '</td></tr>');
				*/
			}
			$('#blob').css("visibility", "collapse");
			$('#inputDomainName').removeAttr("disabled");
		}
	})
}

//Creating table headers for the table
function createTableHeader(){
	var $table = $('#domainsTable');
	var content = "<tr> <th>Domain Name</th> <th> </th></tr>";
	$table.append(content);
}



//Clear input field and table.
function clearInput(){
	var $inputDomainName = $('#inputDomainName');
	$inputDomainName.val('');
	$inputDomainName.focus();
	clearTableContents();
	$(".table-results").height(0);
}


//A function to format price to include $ sign.
function formatPrice(price) {
	if (price == null){
		return '-';
	}else{
		return '$' + price.toLocaleString('en');
	}
}

//Clear all the table contents.
function clearTableContents() {
	var table = document.getElementById('domainsTable');
	while(table.rows.length > 0) {
	  table.deleteRow(0);
	}
}