/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    $("input[name='description']").on("change", isAlfaNumeric);
    $("input[name='cost']").on("change", isDecimal);
})




function isAlfaNumeric(ev,rval,rattr){
        var val ="";
        var attr="";
        if (rval == null | rval =="")  val = $(this).val(); else val=rval;
        if (rattr == null | rattr =="")  attr = $(this).attr("name"); else attr =rattr;
        var check=true;
        var patt = /[\w \s]/g;
        var patttest = /^[\w \s]*$/g;
        var id = "#"+attr+"_errorAN";
        if (!patttest.test(val)){
            var aux = val.match(patt);
            var str = aux.toString();
            str = str.replace(/,/g,"");
            $("input[name='"+attr+"']").val(str);  
            check=false;
            $(id).show();
        }else{
            $(id).hide();
        }       
        return check;
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

