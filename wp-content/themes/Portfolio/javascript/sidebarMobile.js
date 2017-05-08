$('.l-hamburger').click(function () {

	if ($('#l-sidebar').css('left') === '-190px') {
    	$('#l-sidebar').css("left", "0px");
	}

	else{
		$('#l-sidebar').css("left", "-190px");
	}

});