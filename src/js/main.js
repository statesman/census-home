(function($) {

  "use strict";


    // set global template variable that helps format the data
    // puts the data in a scope that is specific to the template
    _.templateSettings.variable = "cards";

    // Setting up function and template that data will go into
    var display_data = function(data) {
        // setting up div with the underscore template
        var template = _.template($( "#template" ).html());
        // jquery appending the template inside of the div in index
        $('#card-container').append(template(data));
        console.log(template(data));

        // setting masonry grid class
        var $grid = $('.grid').masonry({
          // options
          itemSelector: '.grid-item',
        });

        // imagesloaded helps masonry stacking once images loaded
        $grid.imagesLoaded().progress( function() {
          $grid.masonry('layout');

        });
    };


// Data sources
// Spreadsheet with source: https://docs.google.com/spreadsheets/d/13C56oZu-JNau-pk6W4RxjOne-BVbAlxU0sxcXeZAEBY/pubhtml
// JSON url we could pull from
// https://spreadsheets.google.com/feeds/list/13C56oZu-JNau-pk6W4RxjOne-BVbAlxU0sxcXeZAEBY/od6/public/basic?alt=json
// But right now, we just convert with mrdataconverter


    // Data from file into variable
    var data_url = 'data/data.json';

    // Jquery method get the date from the file
    $(document).ready(function() {
        // put the data in variable d
        $.getJSON(data_url, function(d) {
            // feeding the display_data function with contents of d
            display_data(d);
        });
    });




}(jQuery, _));