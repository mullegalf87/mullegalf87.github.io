$( document ).ready(function() {

    $(".subtitle").attr('contenteditable', 'true');
    save_subtitle("get_data", 'enterprise', 'branch_code', 1);

});

var x_timer;

$(document).on("keyup", ".subtitle" ,function(event){

    clearTimeout(x_timer);

    $(this).toggleClass('active');
    
    var table=$(this).attr('tab');
    var column=this.id;
    var value=$(this).text();

    x_timer = setTimeout(function(){

        if (column=="branch_code") {
            save_subtitle("get_data", table, column, value);
        }else{
            save_subtitle("save_data", table, column, value);
        }

    }, 1000);

});

function save_subtitle(type_query, tab, col, val){

    $.ajax({
        data: {type_query:type_query, tab:tab, col:col, val:val},
        type: 'GET',
        url: '/inc/wages.php',
        success: function(array){
            var res=jQuery.parseJSON(array);
            for (const key in res) {
                $('#'+key).text(res[key]);
            }
        }
    });

}