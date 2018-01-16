// var domWindow = $j(window),
//     domBody = $j('body');

$j(document).on('ready', function() {
    // Dropdown object
    (function () {
        var hideId = 'dropdown-ishide',
            showId = 'dropdown-isshow',
            goHideaway = function () {
                var i = $j('.' + showId);
                i.find('> .dropdown-parent-swich').removeClass('active');
                i.find('.dropdown-parent-object').fadeOut();
                i.removeClass(showId).addClass(hideId);
            };

        $j('.dropdown-parent').each(function(){
            $j(this).addClass(hideId);
        });

        $j('.dropdown-parent .dropdown-parent-swich.active').on('click',function(){
            goHideaway();
        });

        $j(document).on('click', function(e) {
            if ($j(e.target).closest('.dropdown-parent').length) {
                return false;
            } else {
                goHideaway();
            }
        });

        $j('.dropdown-parent-swich').on('click', function () {
            var i = $j(this);

            if (i.hasClass('active')) {
                goHideaway();
                return false;
            }

            goHideaway();

            var dropMenu = i.nextAll('.dropdown-parent-object'),
                mainParent = i.parent();

            if (mainParent.hasClass(hideId)) {
                dropMenu.fadeIn();
                i.addClass('active');
                mainParent.removeClass(hideId).addClass(showId);
            } else {
                dropMenu.fadeOut();
                i.removeClass('active');
                mainParent.removeClass(showId).addClass(hideId);
            }
        });
    })();

    // Responsive elements
    $j('.site-hdr-mobmenuswich').on('click', function() {
        $j(this).next().slideToggle();
    });
});