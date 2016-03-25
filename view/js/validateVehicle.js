/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    
    $("input[name='plate']").keypress(function(){
        var patt = /\W/g;
        var id = "#"+$(this).attr("name")+"_error";
        if (patt.test($(this).val())){
            $(this).val($(this).val().replace(patt,""));          
            $(id).show();
        }else{
            $(id).hide();
        }             
    })
})
