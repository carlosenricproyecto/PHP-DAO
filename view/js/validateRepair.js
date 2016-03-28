/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    $("#form").submit(function (event) {
        var check = true;
        if ($("input[name='whours']").val() == null || $("input[name='whours']").val() == "") {
            check = false;
        } else {
            if (!submitInteger($("input[name='whours']").val()))
                check = false;
        }
        if ($(".inDate").val() == null || $(".inDate").val() == "") {
            check = false;
        } else {
            if (compareDate($(".inDate").val(), $(".outDate").val()))
                check = false;
        }
        if ($(".outDate").val() == null || $(".outDate").val() == "") {
            check = false;
        } else {
            if (compareDate($(".inDate").val(), $(".outDate").val()))
                check = false;
        }
        if (!check) {
            $("#repair_errorRE").show();
            event.preventDefault();
            return false;
        }
    })
    $(".datepicker").datepicker({dateFormat: 'yy-mm-dd', maxDate: 0});
    $(".inDate").on("change", validInDate);
    $(".outDate").on("change", validOutDate);
    $("input[name='whours']").on("change", isInteger);
    $("#repVehicle").combobox();
    $("#repMechTeam").combobox();
    $("#repType").combobox();
})

function submitInteger(val) {
    var patt = /^\d*$/g;
    if (patt.test(val))
        return true;
    else
        return false;
}
function isInteger() {
    var patt = /\D/g;
    var id = "#" + $(this).attr("name") + "_errorIN";
    if (patt.test($(this).val())) {
        $(this).val($(this).val().replace(patt, ""));
        $(id).show();
    } else {
        $(id).hide();
    }
}

function validInDate() {
    var id = "#" + $(this).attr("name") + "_errorDA";
    var valid = true;
    if ($(".outDate").val() != "") {
        if (compareDate($(this).val(), $(".outDate").val())) {
            $(id).show();
        } else {
            $(id).hide();
        }
    } else {
        $(id).hide();
    }
}
function validOutDate() {
    var id = "#" + $(this).attr("name") + "_errorDA";
    var valid = true;
    if ($(".inDate").val() != "") {
        if (compareDate($(".inDate").val(), $(this).val())) {
            $(id).show();
        } else {
            $(id).hide();
        }
    } else {
        $(id).hide();
    }
}
function compareDate(dateIn, dateOut) {
    dateIn = dateIn.replace(/-/g, "");
    dateOut = dateOut.replace(/-/g, "");
    if (parseInt(dateIn) - parseInt(dateOut) < 0)
        return false;
    return true;
}