// potentially needed for lazysizes see iamsteve blog

// var lazy = function lazy() {
//     document.addEventListener('lazyloaded', function (e) {
//         e.target.parentNode.classList.add('image-loaded');
//         e.target.parentNode.classList.remove('loading');
//     });
// }

// lazy();

// potentially needed for lazysizes see iamsteve blog

/******************************* 
// ARCHIVE DROPDOWN
********************************/
const archive = document.querySelector(".archive-button");
const projects = document.querySelector(".archive-projects");
archive.addEventListener("click", () => {
  if (projects.style.maxHeight) {
    projects.style.maxHeight = null;
    archive.classList.remove("archive-active");
  } else {
    projects.style.maxHeight = projects.scrollHeight + "px";
    console.log(projects.style.maxHeight);
    archive.classList.add("archive-active");
  }
});
/******************************* 
// ARCHIVE DROPDOWN ENDS
********************************/

/*******************************
// mob nav button
*******************************/
const navButton = document.querySelector(".navbar-toggler");
const hamburger = document.querySelector(".icon-hamburger");
const cross = document.querySelector(".icon-cross");

navButton.addEventListener("click", () => {
    if (hamburger.classList.contains("show")) {
        hamburger.classList.add("hide");
        hamburger.classList.remove("show");
        cross.classList.add("show");
        cross.classList.remove("hide");
    } else {
        hamburger.classList.add("show");
        hamburger.classList.remove("hide");
        cross.classList.add("hide");
        cross.classList.remove("show");
    }
});
/*******************************
// mob nav button ends
*******************************/

/*******************************
// carousel lazy loading - LAZYSIZES SEEMS TO WORK OK
********************************/
// $(function () {
//     return $("#tpr-carousel").on("slide.bs.carousel", function (ev) {
//         var lazy;
//         lazy = $(ev.relatedTarget).find("img[data-src]");
//         lazy.attr("src", lazy.data("src"));
//         lazy.removeAttr("data-src");
//     });
// });
/*******************************
// carousel lazy loading ends - LAZYSIZES SEEMS TO WORK OK
********************************/

/******************************* 
// GALLERY ISOTOPE
********************************/
// $(window).on('load', function () {
var $grid = $('.grid').isotope({
    itemSelector: '.gallery-item',
    layoutMode: 'fitRows'
});
// Unloaded images can throw off Isotope layouts and cause item elements to overlap.
// imagesLoaded resolves this issue.
$grid.imagesLoaded().progress(function () {
    $grid.isotope('layout');
});

// bind filter button click
$('.gallery-nav').on('click', 'button', function () {
    var filterValue = $(this).attr('data-filter');
    console.log(filterValue);
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
// GALLERY ISOTOPE ENDS
********************************/


