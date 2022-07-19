$( document ).ready(function() {

    $(".subtitle").attr('contenteditable', 'true');

});

var x_timer;

$(document).on("keyup", ".subtitle" ,function(event){

    clearTimeout(x_timer);

    $(this).toggleClass('active');
    
    var table=$(this).attr('tab');
    var column=$(this).attr('col');
    var value=$(this).text();

    x_timer = setTimeout(function(){

        save_subtitle(table,column,value);

    }, 1000);

});

function save_subtitle(tab, col, val){

    var type_query="save_date";

    $.ajax({
        data: {type_query:type_query, tab:tab, col:col, val:val},
        type: 'GET',
        url: '/inc/wages.php',
        success: function(array){
            console.log(array)
        }

    });

}