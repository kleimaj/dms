$('.btn-toggle').click(function() {
    if ($(this).find('.btn-primary').length>0) {
    	$(this).find('.btn').toggleClass('active');
        $(".jobs").toggleClass('hidden');
    }
});