/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    $("#form").submit(function(event){
        var check = true;
        var str= $("input[name='plate']").val();
        alert(str);
        var bool= !isAlfaNumeric(null,str,"plate");
        if ( $("input[name='plate']").val()==null || $("input[name='plate']").val()==""){
            alert("hi");
        }
        event.preventDefault();
        return false;
    })
    $("input[name='plate']").on("change",isAlfaNumeric);
    
    $("input[name='brand']").on("change",isAlfaNumeric);
    
    $("input[name='model']").on("change",isAlfaNumeric);
    $("#type").combobox();
    $("input[name='nif']").on("change",isAlfaNumeric);
    $("input[name='nif']").on("change",lengthRestriction);
    
    $("input[name='name']").on("change",isAlphabetic);
    $("input[name='surname']").on("change",isAlphabetic);

})
function isAlfaNumeric(ev,rval,rattr){
    alert(rval,rattr);
        var val ="";
        var attr="";
        if (rval == null | rval =="")  val = $(this).val(); else val=rval;
        if (rattr == null | rattr =="")  attr = $(this).attr("name"); else attr =rattr;
        if (val == null | val =="") return false;
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

function lengthRestriction(){
    var check=true;
    var id = "#"+$(this).attr("name")+"_errorLE";
    if ($(this).val().length > 9 || $(this).val().length < 9){
        check=false;
        $(id).show();
    }else{
        $(id).hide();
    }
    return check;
}

function isAlphabetic(){
    var check=true;
    var patt = /[\d\W]/g;
    var id ="#"+$(this).attr("name")+"_errorAL";
    if (patt.test($(this).val())){
        $(this).val($(this).val().replace(patt,""));
        check=false;
        $(id).show();
    }else{
        $(id).hide();
    }
    return check;
}