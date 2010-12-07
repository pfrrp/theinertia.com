$(document).ready(function() {
	$("#searchTerms").click(function() {
		$(this).addClass("selected");
		$(this).val('');
	});
});