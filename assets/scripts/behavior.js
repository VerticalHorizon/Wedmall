$(document).ready(function() {

    $('.form.catalog form').on('submit', function(e) {
        e.preventDefault();
        var data = $('.form.catalog form, .sidebar.left form').serialize();
        window.location.href = $(e.currentTarget).attr('action') + '?' + data;
    });

    $('div.choice').on('click', 'a.close', function(e) {
    	window.console.log('#' + $(e.currentTarget).attr('data-name'));
		$('#' + $(e.currentTarget).attr('data-name'))
			.val('')
			.removeAttr('checked');

		$('.form.catalog form').trigger('submit');
    	return false;
    });
    
});