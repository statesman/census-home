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

    // set global template variable
    _.templateSettings.variable = "card";

    // fetch template for list div
    var template = _.template($( "script.template" ).html());


    // where the data is
    // can save this down as data/data.json
    var data_url = 'data/data02.json';

    $(document).ready(function() {
        $.getJSON(data_url, function(d) {
            console.log(d);
        });
    });
    


}(jQuery, _));