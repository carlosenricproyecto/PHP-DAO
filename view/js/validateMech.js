/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    $("#form").submit(function(event) {
        var check = true;
        if ($("input[name='name']").val() == null || $("input[name='name']").val() == "") {
            check = false;
        } else {
            if (!submitAlphabetic($("input[name='name']").val()))
                check = false;
        }
        
        if ($("input[name='salary']").val() == null || $("input[name='salary']").val() == "") {
            check = false;
        } else {
            if (!submitDecimal($("input[name='salary']").val()))
                check = false;
        }
        if (!check) {
            $("#mechanic_errorRE").show();
            event.preventDefault();
            return false;
        }
    })
    $("input[name='name']").on("change", isAlphabetic);
    $("#mechteam").combobox();
    $("input[name='salary']").on("change", isDecimal);
})


function submitDecimal(val) {
    var patt = /^\d+(,\d+)?$/;
    if (!patt.test(val))
        return false;
    else
        return true;
}
function submitAlphabetic(val){
    var patt = /^[a-zA-ZáàéèíìóòúùÀÁÉÈÍÌÓÒÚÙäëïöüÄËÏÖÜ \s]*$/;
    if (!patt.test(val)) return false; else return true;
}
function isDecimal() {
    var patt = /^\d+(,\d+)?$/;
    var id = "#" + $(this).attr("name") + "_errorDE";
    if (!patt.test($(this).val())) {
        var aux = $(this).val();
        var array = aux.match(/[\d,]/g);
        var str = "";
        if (array != null) {
            for (var i = 0; i < array.length; i++) {
                str = str + array[i];
            }
        }
        $(this).val("");
        $(id).show();
    } else {
        $(id).hide();
    }
}

function isAlphabetic() {
    var check = true;
    var patt = /[a-zA-ZáàéèíìóòúùÀÁÉÈÍÌÓÒÚÙäëïöüÄËÏÖÜ \s]/g;
    var patttest = /^[a-zA-ZáàéèíìóòúùÀÁÉÈÍÌÓÒÚÙäëïöüÄËÏÖÜ \s]*$/;
    var id = "#" + $(this).attr("name") + "_errorAL";
    if (!patttest.test($(this).val())) {
        var val = $(this).val();
        var aux = val.match(patt);
        var str = aux.toString()
        str = str.replace(/,/g, "");;
        $(this).val(str);
        check = false;
        $(id).show();
    } else {
        $(id).hide();
    }
    return check;
}
