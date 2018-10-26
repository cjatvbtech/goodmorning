$(function(){

	$('.nice-scroll, .main-container').niceScroll({ zindex: 999999 });

	$('#btnMenu').click(function(e){
		e.preventDefault();
		e.stopPropagation();
		$(this).toggleClass('active');
		$('body').toggleClass('menu-open');
		freezeNiceScroll($('body').hasClass('menu-open'));
		console.log('Clicked!!!')
	});

	$('body').on('click', function(e){
		if ($(e.target).closest('#main-nav').length == 0
				&& $(this).hasClass('menu-open')) {
			$(this).removeClass('menu-open');
			$('#btnMenu').removeClass('active');
			freezeNiceScroll(false);
		}
	});

});

freezeNiceScroll = function(locked) {
	var content = $('.main-container').getNiceScroll()[0];
	$('.main-container').scrollTop(0);
	content.locked = locked;
};