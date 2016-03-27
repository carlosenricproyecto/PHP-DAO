/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    
    $("input[name='plate']").on("change",isAlfaNumeric);
    
    $("input[name='brand']").on("change",isAlfaNumeric);
    
    $("input[name='model']").on("change",isAlfaNumeric);
    
    $("input[name='nif']").on("change",isAlfaNumeric);
    $("input[name='nif']").on("change",lengthRestriction);
    
    $("input[name='name']").on("change",isAlphabetic);
    $("input[name='surname']").on("change",isAlphabetic);

})

function isAlfaNumeric(){
        var patt = /\W/g;
        var id = "#"+$(this).attr("name")+"_errorAN";
        if (patt.test($(this).val())){
            $(this).val($(this).val().replace(patt,""));          
            $(id).show();
        }else{
            $(id).hide();
        }                
}

function lengthRestriction(){
    var id = "#"+$(this).attr("name")+"_errorLE";
    if ($(this).val().length > 9 || $(this).val().length < 9){
        $(id).show();
    }else{
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