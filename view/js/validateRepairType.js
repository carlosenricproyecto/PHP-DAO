/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    $("input[name='description']").on("change", isAlfaNumeric);
    $("input[name='cost']").on("change", isDecimal);
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

function isDecimal() {
    var patt = /^\d+(,\d+)?$/;
    var id = "#" + $(this).attr("name") + "_errorDE";
    if (!patt.test($(this).val())) {
        var array = $(this).val().match(/[\d,]/g);
        var str = "";
        for (var i = 0 ; i < array.length ; i ++){
            str = str + array[i];
        }      
        $(this).val(str);
        $(id).show();
    } else {
        $(id).hide();
    }
}

