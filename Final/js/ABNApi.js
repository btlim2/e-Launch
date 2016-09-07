//Prevents website from refreshing when enter is clicked.
$(function() {
    $("form").submit(function() { return false; });
});

//Start the function by pressing the enter key.
$('#inputName').keydown(function (e){
    if(e.keyCode == 13){
    	$('#inputName').blur();
        buttonNameCheck();
    }
})

//Clear input field and table.
function clearInput(){
	var $inputName = $('#inputName');
	$inputName.val('');
	$inputName.focus();
	$('.table-results').height(0);
	clearTableContents();
	$('#displayResult').html("");
}



//Function to run when the namecheck button is clicked
function buttonNameCheck() {
	if ($('#inputName').val() == ""){
		alert("Please input a business name.");
		return;
	}

	$("#img-submit").removeAttr();
	$('.table-results').height(200);
	var inputName = $('#inputName').val();
	var url = "http://data.gov.au/api/action/datastore_search?resource_id=839cc783-876f-47a2-a70c-0fe606977517&q=" + inputName;
	clearTableContents();

	abnNameQuery(url,inputName);
	
}

//AJAX GET function to query the API and obtain the JSON
function abnNameQuery($eachUrl, inputName) {
	var $table = $('#abn-table');
	$('#inputName').attr("disabled", "disabled");
	$('#blob').css("visibility", "visible");

	$.ajax({		
		type: "GET",
		url: $eachUrl,
		//headers: {"Authorization": "sso-key dKDGRBPDL3c8_7uiSb8E199Fd8zcpLkNVBy:BpXkQkMDaZE3qyeMAt5Emr"},
		success: function(data) {
			console.log(data.result.records)
			var arrayHeaderContent = data.result.fields;
			var arrayRecords = data.result.records;
			createTableHeaderContents();
			if (inputABNSearchedQuery(inputName, arrayRecords)){
				displayResult = "<tr><td class = \"green\">" + inputName + " is available!</td></tr>";
				
				content = "<tr><td class = \"green\">" + inputName + "</td><td class = \"green\"> " + "YES" + "</td></tr>";
				$table.append(content);
			}else {
				displayResult = "<tr><td class = \"red\">" + inputName + " is not available!</td></tr>";
				
				content = "<tr><td class = \"red\">" + inputName + "</td><td class = \"red\"> " + "NO" + "</td></tr>";
				$table.append(content);
			}

			$('#displayResult').html(displayResult);
			
			$.each(arrayRecords, function(i, eachRecord) {
				var businessName = eachRecord["Business Name"];
				var businessStatus = eachRecord["Business Name Status"];
				
				if (businessStatus == "Deregistered"){
					content = "<tr><td>" + businessName + "</td>" + determineCellColorBasedOnBusinessStatus(businessStatus) + "</tr>";
					$table.append(content);
				}
			});
			
			$('#inputName').removeAttr("disabled");
			$('#blob').css("visibility", "collapse");
		}

	})
}

//Checking if the user input abn name has any matches to the api data.
//If yes, return false, else return true.
function inputABNSearchedQuery(inputName, records) {
	for (i = 0; i < records.length; i++) {
		var eachRecord = records[i];
		
		if (inputName.toUpperCase() == eachRecord["Business Name"].toUpperCase())
			return false;
	}
	return true;
}

//Determines the cell color based on its availability
//Registered = NO, Unregistered = Yes
function determineCellColorBasedOnBusinessStatus(businessStatus) {
	content = '';
	if (businessStatus == "Registered"){
		content = "<td class = \"red\">" + "NO" + "</td>";
	} else if (businessStatus == "Deregistered") {
		content = "<td class = \"green\">" + "YES" + "</td>";
	}
		
	return content;
}

//Creating table headers for the table
function createTableHeaderContents(){
	var $table = $('#abn-table');
	var content = '';
	
	content = "<tr> <th>Business Name</th> <th>Availability</th> </tr>";
	$table.append(content);
}

//Function to format each row before appending to the table
function formatEachRow(headerRow, eachRecord){
	var content = '<tr>';
	
	for (i = 0; i < headerRow.length; i++) {
		var eachHeader = headerRow[i].innerHTML;
		
		content += '<td>' + checkRecordForNull(eachRecord[eachHeader]) + '</td>';
		
		//console.log(eachRecord.BusinessName);
		//console.log(eachHeader);
	}
	content += '</tr>';
	return content;
}

//Function to check for nulls in the json data.
function checkRecordForNull(eachRecordItem) {
	if (eachRecordItem == null || eachRecordItem == "")
		return '-';
	else
		return eachRecordItem;
}

//Clearing table contents.
function clearTableContents() {
	var table = document.getElementById('abn-table');

	//$("#abn-table tr").remove(); 
	
	while(table.rows.length > 0) {
		  table.deleteRow(0);
	}
	
}