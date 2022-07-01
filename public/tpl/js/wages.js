$( document ).ready(function() {

    $(".subtitle").attr('contenteditable', 'true');

});

var x_timer;

$(document).on("keyup", ".subtitle" ,function(event){

    clearTimeout(x_timer);

    $(this).toggleClass('active');
    
    var table=".table";
    var column=".column";
    var value=$(this).text();

    x_timer = setTimeout(function(){

        save_subtitle(table,column,value);

    }, 1000);

});

function save_subtitle(table, column, value){

    console.log(table);
    console.log(column);
    console.log(value);

}