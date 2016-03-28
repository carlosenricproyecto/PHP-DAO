/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    $("#form").submit(function (event) {
        var check = true;
        var str = $("input[name='plate']").val();

        if ($("input[name='plate']").val() == null || $("input[name='plate']").val() == "") {
            check = false;
        } else {
            if (!submitAlfaNumeric($("input[name='plate']").val()))
                check = false;
        }
        if ($("input[name='brand']").val() == null || $("input[name='brand']").val() == "") {
            check = false;
        } else {
            if (!submitAlfaNumeric($("input[name='brand']").val()))
                check = false;
        }
        if ($("input[name='model']").val() == null || $("input[name='model']").val() == "") {
            check = false;
        } else {
            if (!submitAlfaNumeric($("input[name='model']").val()))
                check = false;
        }
        if ($("input[name='nif']").val() == null || $("input[name='nif']").val() == "") {
            check = false;
        } else {
            if (!submitAlfaNumeric($("input[name='nif']").val()))
                check = false;
            if (!submitLengthRestriction($("input[name='nif']").val()))
                check = false;
        }
        if ($("input[name='name']").val() == null || $("input[name='name']").val() == "") {
            check = false;
        } else {
            if (!submitAlphabetic($("input[name='name']").val()))
                check = false;
        }
        if ($("input[name='surname']").val() == null || $("input[name='surname']").val() == "") {
            check = false;
        } else {
            if (!submitAlphabetic($("input[name='surname']").val()))
                check = false;
        }

        if (!check) {
            $("#vehicle_errorRE").show();
            event.preventDefault();
            return false;
        }

    })
    $("input[name='plate']").on("change", isAlfaNumeric);

    $("input[name='brand']").on("change", isAlfaNumeric);

    $("input[name='model']").on("change", isAlfaNumeric);
    $("#type").combobox();
    $("input[name='nif']").on("change", isAlfaNumeric);
    $("input[name='nif']").on("change", lengthRestriction);

    $("input[name='name']").on("change", isAlphabetic);
    $("input[name='surname']").on("change", isAlphabetic);

})

function submitLengthRestriction(val){
    if (val.length!= 9) return false; else return true;
}
function submitAlphabetic(val){
    var patt = /^[a-zA-ZáàéèíìóòúùÀÁÉÈÍÌÓÒÚÙäëïöüÄËÏÖÜ \s]*$/;
    if (!patt.test(val)) return false; else return true;
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

function lengthRestriction() {
    var check = true;
    var id = "#" + $(this).attr("name") + "_errorLE";
    if ($(this).val().length > 9 || $(this).val().length < 9) {
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
        str = str.replace(/,/g, "");;
        $(this).val(str);
        check = false;
        $(id).show();
    } else {
        $(id).hide();
    }
    return check;
}