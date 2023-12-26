jQuery(document).ready(function () {
    $('.cat-list a').on('click', function (e) {
        e.preventDefault();

        $('.cat-list a').removeClass('active');

        // Add the active class to the clicked category link
        $(this).addClass('active');

        var termSlug = $(this).attr('href').split('/').pop();


        var data = {
            action: 'filter_posts',
            term: termSlug,
        };

        $.ajax({
            url: variables.ajax_url,
            type: 'POST',
            data: data,
            success: function (response) {
                $('.all-journal').html(response);
            }
        });
    });

});