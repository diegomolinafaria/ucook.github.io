window.onload = function(){

//Sidenav para mobile
		$(document).ready(function(){
    	$('.sidenav').sidenav();
 	 });

	//Menu scroll
	$(function(){
		$('nav a').click(function(){
			var href = $(this).attr('href');
			var offSetTop = $(href).offset().top;

		$('html,body').animate({'scrollTop':offSetTop});

			return false;
		})
	})
}
	

