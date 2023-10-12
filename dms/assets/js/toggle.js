$('.btn-toggle').click(function(e) {
    if (!e.target.classList.contains("active"))
    if ($(this).find('.btn-primary').length>0) {
    	$(this).find('.btn').toggleClass('active');
        $(".jobs").toggleClass('hidden');
    }
});