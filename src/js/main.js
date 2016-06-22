(function($) {

  "use strict";

// url for spreadsheet
// https://docs.google.com/spreadsheets/d/13C56oZu-JNau-pk6W4RxjOne-BVbAlxU0sxcXeZAEBY/pubhtml


    var $grid = $('.grid').masonry({
      // options
      itemSelector: '.grid-item',
      // columnWidth: 200
    });

    $grid.imagesLoaded().progress( function() {
      $grid.masonry('layout');
    });


//    var data_url = 'data.json';

//    $(document).ready(function() {
//        $.getJSON(data_url, function(d) {
//        }
//    };


}(jQuery));