// external js: isotope.pkgd.js, imagesloaded.pkgd.js

var $grid = $('.grid').isotope({
  itemSelector: '.grid-item',
  masonry: {
    columnWidth: 200  
  }
});

$('#load-images').click( function() {
  var $items = getItems();
  $grid.isotopeImagesReveal( $items );
});


$.fn.isotopeImagesReveal = function( $items ) {
  var iso = this.data('isotope');
  var itemSelector = iso.options.itemSelector;
  // hide by default
  $items.hide();
  // append to container
  this.append( $items );
  $items.imagesLoaded().progress( function( imgLoad, image ) {
    // get item
    // image is imagesLoaded class, not <img>, <img> is image.img
    var $item = $( image.img ).parents( itemSelector );
    // un-hide item
    $item.show();
    // isotope does its thing
    iso.appended( $item );
  });
  
  return this;
};

function randomInt( min, max ) {
  return Math.floor( Math.random() * max + min );
}

function getItem() {
  var width = randomInt( 150, 400 );
  var height = randomInt( 150, 250 );
  var item = '<div class="grid-item">'+
    '<img src="https://lorempixel.com/' + 
      width + '/' + height + '/nature" /></div>';
  return item;
}

function getItems() {
  var items = '';
  for ( var i=0; i < 12; i++ ) {
    items += getItem();
  }
  // return jQuery object
  return $( items );
}