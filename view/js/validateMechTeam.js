/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    $("input[name='name']").on("change", isAlfaNumeric);
    $("input[name='category']").on("change", isAlphabetic);
})




function isAlfaNumeric() {
    var patt = /\W/g;
    var id = "#" + $(this).attr("name") + "_errorAN";
    if (patt.test($(this).val())) {
        $(this).val($(this).val().replace(patt, ""));
        $(id).show();
    } else {
        $(id).hide();
    }
}

function isAlphabetic(){
    var patt = /[\d\W]/g;
    var id ="#"+$(this).attr("name")+"_errorAL";
    if (patt.test($(this).val())){
        $(this).val($(this).val().replace(patt,""));
        $(id).show();
    }else{
        $(id).hide();
    }
}