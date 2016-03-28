/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    $("#form").submit(function (event) {
        var check = true;
        if ($("input[name='description']").val() == null || $("input[name='description']").val() == "") {
            check = false;
        } else {
            if (!submitAlfaNumeric($("input[name='description']").val()))
                check = false;
        }

        if ($("input[name='cost']").val() == null || $("input[name='cost']").val() == "") {
            check = false;
        } else {
            if (!submitDecimal($("input[name='cost']").val()))
                check = false;
        }
        if (!check) {
            $("#repairtype_errorRE").show();
            event.preventDefault();
            return false;
        }
    })
    $("input[name='description']").on("change", isAlfaNumeric);
    $("input[name='cost']").on("change", isDecimal);
})



function submitDecimal(val) {
    var patt = /^\d+(,\d+)?$/;
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

