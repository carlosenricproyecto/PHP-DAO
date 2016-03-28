/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    $("input[name='name']").on("change", isAlfaNumeric);
    $("input[name='category']").on("change", isAlphabetic);
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