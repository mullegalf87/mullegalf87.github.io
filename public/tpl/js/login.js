var old_form="form_login";

function change_vis(new_form){
    
    $("#"+new_form).removeClass("d-none");
    $("#"+old_form).addClass("d-none");
    old_form=new_form;
    
}