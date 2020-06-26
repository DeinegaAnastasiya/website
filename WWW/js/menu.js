$('.burger_container').on('click', function () {

	$('.burger_list').toggleClass('open');
	
	});
	
	$( '.burger_item' ).on("click", function(){
	$('.burger_list').hide();
	});