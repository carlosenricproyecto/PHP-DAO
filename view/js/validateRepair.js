/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    $(".datepicker").datepicker({ dateFormat: 'yy-mm-dd' , maxDate: 0});
    $(".inDate").on("change",validInDate);
    $(".outDate").on("change",validOutDate);
    $("input[name='whours']").on("change",isInteger);
})


function isInteger(){
    var patt = /\D/g;
    var id ="#"+$(this).attr("name")+"_errorIN";
    if (patt.test($(this).val())){
        $(this).val($(this).val().replace(patt,""));
        $(id).show();
    }else{
        $(id).hide();
    }
}

function validInDate(){
    var id ="#"+$(this).attr("name")+"_errorDA";
    var valid = true;
    if ($(".outDate").val()!=""){
        if(compareDate($(this).val(),$(".outDate").val())){
            $(id).show();
        }else{
            $(id).hide();
        }
    }else{
         $(id).hide();   
    }
}
function validOutDate(){
    var id ="#"+$(this).attr("name")+"_errorDA";
    var valid = true;
    if ($(".inDate").val()!=""){
        if(compareDate($(".inDate").val(),$(this).val())){
            $(id).show();
        }else{
            $(id).hide();
        }
    }else{
         $(id).hide();   
    }
}
function compareDate(dateIn,dateOut){
    dateIn = dateIn.replace(/-/g,"");
    dateOut = dateOut.replace(/-/g,"");
    if (parseInt(dateIn)-parseInt(dateOut) < 0) return false;
    return true;
}