function showEdit(editableObj) {
	$(editableObj).css("background", "#FFF");
}

function saveToDatabase(editableObj, column, id) {
	$(editableObj)
			.css("background", "#FFF url(./images/loaderIcon.gif) no-repeat center right 5px");
	$.ajax({
		url : "./ajax-end-point/save-edit.php",
		type : "POST",
		data : 'column=' + column + '&editval=' + editableObj.innerHTML
				+ '&id=' + id,
		success : function(data) {
			$(editableObj).css("background", "#FDFDFD");
		}
	});
}