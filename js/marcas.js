$(document).ready(function(){
	$("#todos").change(function () {
	    $("input:checkbox").prop('checked', $(this).prop("checked"));
	});

});