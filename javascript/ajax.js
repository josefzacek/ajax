// JavaScript Document


$(document).ready(function(){
	// load index page
	$('article').load('pages/index.php');
	
	// linking pages
	$('nav ul li a').on('click', navigate);
	
	function navigate(e) {
		e.preventDefault();
		var page = $(this).attr('href');
		$('article').load('pages/'+ page +'.php');	
	};
	
	
	
		   
});
