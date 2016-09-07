function buttonNameCheck() {
	var inputName = $('#inputName').val();
	var url = "http://data.gov.au/api/action/datastore_search?resource_id=839cc783-876f-47a2-a70c-0fe606977517&q=" + inputName;
	clearTableContents();
	abnNameQuery(url);
}

function abnNameQuery($eachUrl) {
	//var $table = $('#domainsTable');
	
	$.ajax({		
		type: "GET",
		url: $eachUrl,
		//headers: {"Authorization": "sso-key dKDGRBPDL3c8_7uiSb8E199Fd8zcpLkNVBy:BpXkQkMDaZE3qyeMAt5Emr"},
		success: function(data) {
			console.log(data.result.records)
			var arrayHeaderContent = data.result.fields;
			var arrayRecords = data.result.records;
			createTableHeaderContents(arrayHeaderContent);
			
			$.each(arrayRecords, function(i, eachRecord) {
				createTableRowContents(eachRecord);
				//console.log(eachRecord);
			});
		}
	})
}

function createTableHeaderContents(arrayHeaderContent) {
	var $table = $('#abn-table');
	
	$table.append(formatHeaderRow(arrayHeaderContent));
	
	//<tr> <th> blabla </th> </tr>
	/* $table.append('<tr>');
	
	$.each(arrayHeaderContent, function(i, eachHeaderContent) {
		$table.append('<th>' + eachHeaderContent.id + '</th>');
	});
	$table.append('</tr>'); */
}

function formatHeaderRow(headerContents){
	var content = '<tr>';
	$.each(headerContents, function(i, eachHeaderContent) {
		content += '<th>' + eachHeaderContent.id + '</th>';
	});
	content += '</tr>';
	return content;
}

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

function createTableRowContents(eachRecord) {
	var $table = $('#abn-table');
	var headerRow = $table.find('th');
	
	$table.append(formatEachRow(headerRow, eachRecord));
	
	/* $table.append('<tr>');
	for (i = 0; i < headerRow.length; i++) {
		var eachHeader = headerRow[i].innerHTML;
		
		$table.append('<td>' + checkRecordForNull(eachRecord[eachHeader]) + '</td>'); 
		
		//console.log(eachRecord.BusinessName);
		//console.log(eachHeader);
	}*/
}


function checkRecordForNull(eachRecordItem) {
	if (eachRecordItem == null || eachRecordItem == "")
		return '-';
	else
		return eachRecordItem;
}

function clearTableContents() {
	var table = document.getElementById('abn-table');

	//$("#abn-table tr").remove(); 
	
	while(table.rows.length > 0) {
		  table.deleteRow(0);
	}
	
}