$(document).ready(function(){

    sum_price();

});

//utilizzare la forma seguente quando il documento è pronto fai l'onclick per elementi presenti e futuri
$(document).on("click", ".button_click" ,function(){

    //variabile add_prod, update_prod, delete_prod
    var type_query=$(this)[0].classList[3];
    
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
        url: '/inc/home.php',
        success: function(array){
            var res=jQuery.parseJSON(array);
            var clear_array_column=array_value.toString().replaceAll("'","").split(",")[0];
            var clear_array_value=array_value.toString().replaceAll("'","").split(",")[1];
            switch (res.type_query) {
                case 'add_prod':
                    var append_prod='<tr id="tr_'+res.id_prod+'">'+
                    '<td>'+res.id_prod+'</td>'+
                    '<td><input class="form-control prod_'+res.id_prod+'" id="name_prod_'+res.id_prod+'" value="'+clear_array_column+'"></td>'+
                    '<td><input class="form-control prod_'+res.id_prod+' single_price" id="price_prod_'+res.id_prod+'" value="'+clear_array_value+'"></td>'+
                    '<td><button class="btn btn-secondary button_click update_prod mr-1" id_prod="'+res.id_prod+'">Update</button>'+
                    '<button class="btn btn-danger button_click delete_prod" id_prod="'+res.id_prod+'">Delete</button>'+
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

    $('.single_price').each(function(){
        var single_price=$(this).val();
        total_price+=parseFloat(single_price);
    });

    $("#total_price").text(total_price.toFixed(2));

}