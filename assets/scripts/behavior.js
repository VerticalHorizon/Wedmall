$(document).ready(function() {

    $('.form.catalog form').on('submit', function(e) {
        e.preventDefault();
        var data = $('.form.catalog form, .sidebar.left form').serialize();
        window.location.href = $(e.currentTarget).attr('action') + '?' + data;
    });

    $('div.choice').on('click', 'a.close', function(e) {
    	var target = $(e.currentTarget);
		$('#' + target.attr('data-name'))
			.val('')
			.removeAttr('checked');

		// $('.form.catalog form').trigger('submit');
        target.parent('span').remove();
    	return false;
    });
    
});