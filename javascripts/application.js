

current_logo = 0;

function rotateLogos() {
	console.log(current_logo);
	$("div.partners").children().slice(current_logo, current_logo + 4).fadeOut('slow', function() {

		
		console.log(current_logo);
		// current_logo += 10;
		// console.log(current_logo);
		$("div.partners").children().slice(current_logo, current_logo + 4).fadeIn('slow');
	});
	if (current_logo < $("div.partners").children().length - 4) {
		current_logo = current_logo + 4
	} else {
		current_logo = 0;
	}
}

function something() {

	console.log("jkfsld");
}
$(document).ready(function() {
	// rotateLogos();
	setInterval(rotateLogos, 4000);
})