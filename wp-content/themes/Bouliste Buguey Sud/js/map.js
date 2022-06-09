 $(document).ready(function() {

    $('[data-id]').hover(function() {
        // Mouse enter
        let current_id = $(this).attr('data-id'),
            offset_overlay = $('div#overlay').offset().top,
            left_bullet = $('[data-id="'+current_id+'"] g circle').offset().left - 350,
            top_bullet = $('[data-id="'+current_id+'"] g circle').offset().top - offset_overlay - 70;

        $('[data-id="'+current_id+'"]').addClass('is-active');
        $('[data-id="'+current_id+'"] g circle').attr('r', '15');
        $('section.container[data-id="'+current_id+'"]').css({
            'top': top_bullet,
            'left': left_bullet
        });

    }, function() {
        // Mouse leave
        $('[data-id]').removeClass('is-active');
        $('[data-id] g circle').attr('r', '7.2');
    });

});