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


    var data_url = 'https://spreadsheets.google.com/feeds/list/13C56oZu-JNau-pk6W4RxjOne-BVbAlxU0sxcXeZAEBY/od6/public/basic?alt=json';


    $(document).ready(function() {
        $.getJSON(data_url, function(d) {
        });
    });
    


}(jQuery, _));