$(document).ready(function(){

	var imgItems = $('.slider li').length;
	var imgPos = 1;

	for (i = 1; i <= imgItems; i++) {
		$('.pagination').append('<li><span class="fa fa-circle"></span></li>');
	}

	$('.slider li').hide();
	$('.slider li:first').show();
	$('.pagination li:first').css({'color': '#FA333F'});

	$('.pagination li').click(pagination);
	$('.right span').click(nextSlider);
	$('.left span').click(prevSlider);

	setInterval(function(){
		nextSlider();
	}, 6000);

	function pagination(){
		var paginationPos = $(this).index() + 1;

		$('.slider li').hide();
		$('.slider li:nth-child('+ paginationPos +')').fadeIn();

		$('.pagination li').css({'color': 'rgba(200, 200, 200, 0.5)'});
		$(this).css({'color': '#FA333F'});

		imgPos = paginationPos;
	}

	function nextSlider(){
		if (imgPos >= imgItems) {
			imgPos = 1;
		}else{
			imgPos++;
		}

		$('.slider li').hide();
		$('.slider li:nth-child('+ imgPos +')').fadeIn();

		$('.pagination li').css({'color': 'rgba(200, 200, 200, 0.5)'});
		$('.pagination li:nth-child('+ imgPos +')').css({'color': '#FA333F'});
	}

	function prevSlider(){
		if (imgPos <= 1) {
			imgPos = imgItems;
		}else{
			imgPos--;
		}

		$('.slider li').hide();
		$('.slider li:nth-child('+ imgPos +')').fadeIn();

		$('.pagination li').css({'color': 'rgba(200, 200, 200, 0.5)'});
		$('.pagination li:nth-child('+ imgPos +')').css({'color': '#FA333F'});
	}
});
