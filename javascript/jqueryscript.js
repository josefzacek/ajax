$(document).ready(function(){
	// load index page
	$('.wrapper').load('pages/index.php');

	// linking pages
  $('nav .navbar-header a').on('click', navigate);
	$('nav ul li a').on('click', navigate);

	function navigate(e) {
		e.preventDefault();
		var page = $(this).attr('href');
		$('.wrapper').load('pages/'+ page +'.php');
	};

});
