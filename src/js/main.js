(function($) {

  "use strict";

// url for spreadsheet
// https://docs.google.com/spreadsheets/d/13C56oZu-JNau-pk6W4RxjOne-BVbAlxU0sxcXeZAEBY/pubhtml


    var data_url = 'data.json';

    $('.grid').masonry({
      // options
      itemSelector: '.grid-item',
      columnWidth: 200
    });

//    $(document).ready(function() {
//        $.getJSON(data_url, function(d) {
//        }
//    };


}(jQuery));