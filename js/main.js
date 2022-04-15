$(document).ready(function() {
	if ($('.home').hasClass('current')) {
		var count = $('#rotaTesti blockquote').length,
			rand = Math.floor((Math.random() * count) + 1),
			addClass = "#rotaTesti ._" + rand,
			i = rand;
		var tarEle = $(addClass)[0];
		$(tarEle).fadeOut(function() {
			$(this).removeClass('seoHide').addClass('old').fadeIn('slow');
		});
		setInterval(function() {
			if (i == count) {
				i = 1;
			} else {
				i++;
			};
			$('.old').addClass('seoHide').removeClass('old');
			addClass = "#rotaTesti ._" + i;
			var tarEle = $(addClass)[0];
			$(tarEle).fadeOut(function() {
				$(this).removeClass('seoHide').addClass('old').fadeIn('slow');
			});
		},20000);
	}
	$.get('https://docs.google.com/spreadsheet/pub?key=0Ane9QvN61ScQdG05VTNSNnlNR2FnMURxQ2ZPejFNOEE&single=true&gid=5&range=A1&output=csv', function(data) {
		var dataClean = data.replace(/\"/g,"");
		$('#totRais h2').text(dataClean);
	});
});