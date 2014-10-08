$('a[href^="#"]').on('click', function (e) {
    e.preventDefault();

    var target = this.hash,
        $target = $(target);

    $('html, body').stop().animate({
        'scrollTop': $target.offset().top
    }, 1500, 'swing', function () {
        window.location.hash = target;
    });
});

var Ui = {
    'sortFrame': function()
    {
        var offset = $(document).scrollTop();
        if (offset >= 950)
        {
            $('.frame').fadeIn('slow', function() {
            });
        }
        else
        {
            $('.frame').fadeOut('slow', function() {
            });
        }
    }
};

/* When you scroll through the page, sort the frame out */
$(window).scroll(function(){
    Ui.sortFrame();
});

$(document).onload(function() {
   Ui.sortFrame();
});

