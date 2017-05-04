/**
 * Created by fonqri on 2/10/17.
 */

// use $( "#about" ).position().top to give about top position and put it to functions instade of 0

$(document).ready(function(){

$("#termLink").click(function() {
  $('#myModal').modal({backdrop: 'static'});

});



    //map scripts
    $("#order").parent().parent().find("#orderLink").addClass('active');
    $("#home").parent().parent().find("#homeLink").addClass('active');
    $("#products").parent().parent().find("#productsLink").addClass('active');
    $("#blog").parent().parent().find("#blogLink").addClass('active');
    $("#about").parent().parent().find("#aboutLink").addClass('active');
// **************************************comming soon scripts************************


// **************************************comming soon scripts end ************************


});
