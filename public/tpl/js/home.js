$(function(){

    $(".button_click").click(function(){
        var type_query=$(this)[0].classList[3];
        var array_column=[];
        var array_value=[];
        $("#"+type_query).find("input").each(function(data){

            var result_id_input=this.id;
            var result_val_input=$("#"+result_id_input).val();
            array_column.push(result_id_input);
            array_value.push("'"+result_val_input+"'");
        });

        $.ajax({
            data: {type_query:type_query, data_column:array_column.toString(), data_value:array_value.toString()},
            type: 'GET',
            url: '/inc/home.php',
            success: function(output){
                
                console.log(output);

            }
        });

    });

});

