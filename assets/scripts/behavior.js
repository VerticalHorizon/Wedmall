$(document).ready(function() {

    $('.form.catalog form').on('submit', function(e) {
        e.preventDefault();
        var data = $('.form.catalog form, .sidebar.left form').serialize();
        window.location.href = $(e.currentTarget).attr('action') + '?' + data;
    });
    
});