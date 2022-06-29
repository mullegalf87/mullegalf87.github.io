$(document).ready(function(){

    sum_price();

});

//utilizzare la forma seguente quando il documento è pronto fai l'onclick per elementi presenti e futuri
$(document).on("click", ".button_click" ,function(){

    //variabile add_prod, update_prod, delete_prod
    //in questo modo ottieni l'ultima classe
    var type_query=$(this).attr('class').split(' ').pop();    
    
    // variable and function add_prod, update_prod
    var array_column=[];
    var array_value=[];
 
    //variable update_prod, delete_prod
    var id_prod=$(this).attr("id_prod");

    $("#"+type_query).find(".prod_"+id_prod).each(function(data){
        var result_id_input=this.id;
        var result_val_input=$("#"+result_id_input).val();
        array_column.push(result_id_input);
        array_value.push("'"+result_val_input+"'");
    });
    
    $.ajax({
        data: {type_query:type_query, data_column:array_column.toString(), data_value:array_value.toString(), id_prod:id_prod},
        type: 'GET',
        url: '/inc/e-commerce.php',
        success: function(array){
            var res=jQuery.parseJSON(array);
            switch (res.type_query) {
                case 'add_prod':         
                    var append_prod='<tr id="tr_'+res.id_prod+'">'+
                    '<td>'+res.id_prod+'</td>';
                    var clear_array_column=res.data_column.toString().replaceAll("'","").split(",");
                    var clear_array_value=res.data_value.toString().replaceAll("'","").split(",");
                    for (let i = 0; i < clear_array_value.length; i++) {
                        append_prod+='<td><input class="form-control prod_'+res.id_prod+'" id="'+clear_array_column[i]+'_'+res.id_prod+'" value="'+clear_array_value[i]+'"></td>';
                    }
                    append_prod+='<td>'+
                    '<div class="dropdown">'+
                    '<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton_'+res.id_prod+'" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown'+
                    '</button>'+
                    '<div class="dropdown-menu" aria-labelledby="dropdownMenuButton_'+res.id_prod+'">'+
                    '<a class="dropdown-item button_click update_prod" id_prod="'+res.id_prod+'">Update</a>'+
                    '<a class="dropdown-item button_click delete_prod" id_prod="'+res.id_prod+'">Delete</a>'+
                    '</div>'+
                    '</div>'+
                    '</td>'+
                    '</tr>';
                    $("#update_prod").append(append_prod);
                    break;
                case 'update_prod':
                    console.log("updated!");
                    break;
                case 'delete_prod':
                    $("#tr_"+res.id_prod).remove();
                    break;
            }
            sum_price();
        }
    });

});

function sum_price(){

    var total_price=0;
    //prenditi tutti gli input con id che inizia per price_prod
    $('.single_price').each(function(){
        var single_price=$(this).val();
        total_price+=parseFloat(single_price);
    });

    $("#total_price").text(total_price.toFixed(2));

}