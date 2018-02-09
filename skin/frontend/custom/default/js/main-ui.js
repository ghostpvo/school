// var domWindow = $j(window),
//     domBody = $j('body');
var isTouchDevice = 'ontouchstart' in window || navigator.msMaxTouchPoints;

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
                // return false;
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

    // Modal windows
    var hidePopup = function () {
        $j('body').removeClass('popup-shows');
        $j('.m-modal-window-wrap').hide();
        $j('.modal-wind-show.active').removeClass('active');
    }

    $j('.modal-wind-show').on('click', function(e){
        e.preventDefault();
        hidePopup();
        var it = $j(this).attr('data-type');
        it = $j('#' + it);
        it.fadeIn();
        $j('body').addClass('popup-shows');
    });

    $j('.close-md-window').on('click', function(e){
        e.preventDefault();
        hidePopup();
    });

    $j('.m-modal-window-wrap').on('click', function(e){
        if ($j(e.target).closest('.window-contens').length) {
            return;
        } else {
            hidePopup();
        }
    });

    // Product quick view
    (function () {
        var popup = $j('#quick-view-popup .window-contens'),
            pic, name, price;

        $j('.prod-list-page .prod-quick-view').on('click',function () {
            var wSpace = $j(this).parents('.item');

            pic = wSpace.find('img').attr('src');
            name = wSpace.find('.product-name a').text();
            price = wSpace.find('.regular-price .price').text();

            popup.find('.product-image img').attr('src', pic);
            popup.find('.product-title').text(name);
            popup.find('.product-price').text(price);
        });
    })();

    // Homepage offer background init
    $j('.homepage-offer').each(function () {
        var wSpace = $j(this),
            bgSource = wSpace.find('.homepage-offer-background'),
            bgUrl = bgSource.attr('src');

            wSpace.attr('style','background-image: url(' + bgUrl + ')');
    });

    // prod-quick-view

    // Responsive elements
    $j('.mob-switcher').on('click', function() {
        var obj = $j(this).next(),
            active = 'mob-active';

        if(obj.hasClass(active)) {
            obj.removeClass(active);
            obj.prev().removeClass('active');
        } else {
            $j('.' + active).each(function () {
                var thisEl = $j(this);
                console.log(thisEl.parents('.' + active).length);
                if(!thisEl.parents('.' + active).length) {
                    thisEl.removeClass(active);
                    thisEl.prev().removeClass('active');
                }
            });

            obj.addClass(active);
            obj.prev().addClass('active');
        }
    });

    if(isTouchDevice) {
        $j('.site-hdr-menu-dropdown').parent().find('> a').on('click',function (e) {
            e.preventDefault();
        });
    }
});