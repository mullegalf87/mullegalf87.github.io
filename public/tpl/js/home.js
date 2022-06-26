
//utilizzare la forma seguente quando il documento è pronto fai l'onclick per elementi presenti e futuri
$(document).on("click", ".button_click" ,function(){

    //variabile add_prod, update_prod, delete_prod
    var type_query=$(this)[0].classList[3];

    // variable and function add_prod
    var array_column=[];
    var array_value=[];

    $("#"+type_query).find("input").each(function(data){
        var result_id_input=this.id;
        var result_val_input=$("#"+result_id_input).val();
        array_column.push(result_id_input);
        array_value.push("'"+result_val_input+"'");
    });

    //variable update_prod, delete_prod
    var id_prod=$(this).attr("id_prod");

    $.ajax({
        data: {type_query:type_query, data_column:array_column.toString(), data_value:array_value.toString(), id_prod:id_prod},
        type: 'GET',
        url: '/inc/home.php',
        success: function(array){
            var res=jQuery.parseJSON(array);
            switch (res.type_query) {
                case 'add_prod':
                    var append_prod='<tr id="tr_'+res.id_prod+'"><td>'+res.id_prod+'</td><td>'+array_value.toString().replaceAll("'","").split(",")[0]+'</td><td>'+array_value.toString().replaceAll("'","").split(",")[1]+'</td><td><button class="btn btn-danger button_click delete_prod" id_prod="'+res.id_prod+'">Delete</button></td></tr>';
                    $("#update_prod").append(append_prod);
                    break;
                case 'update_prod':
                    console.log("updated!");
                    break;
                case 'delete_prod':
                    $("#tr_"+res.id_prod).remove();
                    break;
            }
        }
    });

});
