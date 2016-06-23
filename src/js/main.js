(function($) {

  "use strict";

// url for spreadsheet
// https://docs.google.com/spreadsheets/d/13C56oZu-JNau-pk6W4RxjOne-BVbAlxU0sxcXeZAEBY/pubhtml
// data url is
// https://spreadsheets.google.com/feeds/list/13C56oZu-JNau-pk6W4RxjOne-BVbAlxU0sxcXeZAEBY/od6/public/basic?alt=json


    // setting masonry grid class
    var $grid = $('.grid').masonry({
      // options
      itemSelector: '.grid-item',
    });

    // imagesloaded helps masonry stacking once images loaded
    $grid.imagesLoaded().progress( function() {
      $grid.masonry('layout');
    });

    // set global template variable that helps format the data
    _.templateSettings.variable = "cards";

    // function data is going into
    var display_data = function(data) {
        // template var the underscrore template in correct div
        var template = _.template($( "#template" ).html());
        //jquery putting the template inside of the div in index
        $('#card-container').append(template(data));

    };

   // where the data is
    // can save this down as data/data.json
    var data_url = 'data/data02.json';

     // get the date from the file
    $(document).ready(function() {
        $.getJSON(data_url, function(d) {
            // feeding the display_cards function with formatted data
            display_data(d);
        });
    });


}(jQuery, _));