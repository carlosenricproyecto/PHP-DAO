/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    $("#form").submit(function (event) {
        var check = true;
        if ($("input[name='name']").val() == null || $("input[name='name']").val() == "") {
            check = false;
        } else {
            if (!submitAlfaNumeric($("input[name='name']").val()))
                check = false;
        }

        if ($("input[name='category']").val() == null || $("input[name='category']").val() == "") {
            check = false;
        } else {
            if (!submitAlphabetic($("input[name='category']").val()))
                check = false;
        }
        if (!check) {
            $("#mechteam_errorRE").show();
            event.preventDefault();
            return false;
        }
    })
    $("input[name='name']").on("change", isAlfaNumeric);
    $("input[name='category']").on("change", isAlphabetic);
})



function submitAlphabetic(val) {
    var patt = /^[a-zA-ZáàéèíìóòúùÀÁÉÈÍÌÓÒÚÙäëïöüÄËÏÖÜ \s]*$/;
    if (!patt.test(val))
        return false;
    else
        return true;
}
function submitAlfaNumeric(val) {
    var patt = /^[\w \s]*$/;
    if (!patt.test(val))
        return false;
    else
        return true;
}
function isAlfaNumeric() {
    var val = $(this).val();
    var attr = $(this).attr("name");
    var check = true;
    var patt = /[\w \s]/g;
    var patttest = /^[\w \s]*$/;
    var id = "#" + attr + "_errorAN";
    if (!patttest.test(val)) {
        var aux = val.match(patt);
        var str = aux.toString();
        str = str.replace(/,/g, "");
        $("input[name='" + attr + "']").val(str);
        check = false;
        $(id).show();
    } else {
        $(id).hide();
    }
    return check;
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
        str = str.replace(/,/g, "");
        ;
        $(this).val(str);
        check = false;
        $(id).show();
    } else {
        $(id).hide();
    }
    return check;
}