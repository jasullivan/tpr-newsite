/*******************************
// slider lazy loading
********************************/
$(function () {
    return $("#carouselExampleSlidesOnly").on("slide.bs.carousel", function (
        ev
    ) {
        var lazy;
        lazy = $(ev.relatedTarget).find("img[data-src]");
        lazy.attr("src", lazy.data("src"));
        lazy.removeAttr("data-src");
    });
});
/*******************************
// slider lazy loading ends
********************************/


/*******************************
// gallery, news and clients lazy loading
********************************/
if (window.addEventListener && window.requestAnimationFrame && document.getElementsByClassName) window.addEventListener('load', function () {

    // start
    var pItem = document.getElementsByClassName('progressive replace'), pCount, timer;

    // scroll and resize events
    window.addEventListener('scroll', scroller, false);
    window.addEventListener('resize', scroller, false);

    // DOM mutation observer
    if (MutationObserver) {

        var observer = new MutationObserver(function () {
            if (pItem.length !== pCount) inView();
        });
        observer.observe(document.body, { subtree: true, childList: true, attributes: true, characterData: true });

    }

    // initial check
    inView();


    // throttled scroll/resize
    function scroller() {

        timer = timer || setTimeout(function () {
            timer = null;
            inView();
        }, 300);

    }


    // image in view?
    function inView() {

        if (pItem.length) requestAnimationFrame(function () {

            var wT = window.pageYOffset, wB = wT + window.innerHeight, cRect, pT, pB, p = 0;
            while (p < pItem.length) {

                cRect = pItem[p].getBoundingClientRect();
                pT = wT + cRect.top;
                pB = pT + cRect.height;

                if (wT < pB && wB > pT) {
                    loadFullImage(pItem[p]);
                    pItem[p].classList.remove('replace');
                }
                else p++;

            }

            pCount = pItem.length;

        });

    }


    // replace with full image
    function loadFullImage(item) {

        var href = item && (item.getAttribute('data-href') || item.href);
        if (!href) return;

        // load image
        var img = new Image();
        if (item.dataset) {
            img.srcset = item.dataset.srcset || '';
            img.sizes = item.dataset.sizes || '';
        }
        img.src = href;
        img.className = 'reveal';
        if (img.complete) addImg();
        else img.onload = addImg;

        // replace image
        function addImg() {

            requestAnimationFrame(function () {

                // disable click
                if (href === item.href) {
                    item.style.cursor = 'default';
                    item.addEventListener('click', function (e) { e.preventDefault(); }, false);
                }

                // preview image
                var pImg = item.querySelector && item.querySelector('img.preview');

                // add full image
                item.insertBefore(img, pImg && pImg.nextSibling).addEventListener('animationend', function () {

                    // remove preview image
                    if (pImg) {
                        img.alt = pImg.alt || '';
                        item.removeChild(pImg);
                    }

                    img.classList.remove('reveal');

                });

            });

        }

    }

}, false);
/*******************************
// gallery, news and clients lazy loading ends
********************************/

/******************************* 
// GALLERY
********************************/
// $(window).on('load', function () {
var $grid = $('.grid').isotope({
    itemSelector: '.gallery-item',
    layoutMode: 'fitRows'
});
$grid.imagesLoaded().progress(function () {
    $grid.isotope('layout');
});

// filter functions
var filterFns = {
    // show if number is greater than 50
    numberGreaterThan50: function () {
        var number = $(this).find('.number').text();
        return parseInt(number, 10) > 50;
    },
    // show if name ends with -ium
    ium: function () {
        var name = $(this).find('.name').text();
        return name.match(/ium$/);
    }
};
// bind filter button click
$('.gallery-nav').on('click', 'button', function () {
    var filterValue = $(this).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[filterValue] || filterValue;
    $grid.isotope({ filter: filterValue });
});
// change is-checked class on buttons
$('.gallery-nav').each(function (i, buttonGroup) {
    var $buttonGroup = $(buttonGroup);
    $buttonGroup.on('click', 'button', function () {
        $buttonGroup.find('.is-checked').removeClass('is-checked');
        $(this).addClass('is-checked');
    });
});
// });
/******************************* 
// GALLERY ENDS
********************************/


