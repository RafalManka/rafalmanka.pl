$(document).ready(function() {
	$("#fomKontakt").submit(function() {
		$.post('kontakt/send', $("#fomKontakt").serialize(), function(data) {
			$("#output").html(data);
			});
			return false;
			});
	
	$('#submit').click(function() {
		$("#output").show("slow");
		});
	});