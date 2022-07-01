$( document ).ready(function() {

    $(".subtitle").attr('contenteditable', 'true');

});

$(document).on("click", ".subtitle" ,function(event){
 
    $(this).toggleClass('active');

    event.stopPropagation();

}); 

function save_subtitle(){

    console.log("salvato");

}