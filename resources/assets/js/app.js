(function() {

	$(".button-collapse").sideNav();

	$('.carousel').carousel();

	$('.modal-trigger').leanModal();

	$('.datepicker').pickadate({
	    selectMonths: false, // Creates a dropdown to control month
	    selectYears: false // Creates a dropdown of 16 years to control year
	});

	$('select').material_select();
	
})();