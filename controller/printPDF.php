<?php

require_once("../config/path.inc.php");
require_once("function_AutoLoad.php");
require_once($_GLOBALS["in_path"] . "libs/fpdf/fpdf.php");
if (isset($_POST['array-list'])) {
    $listPDF = unserialize(base64_decode($_POST['array-list']));
    $varsPDF = unserialize(base64_decode($_POST['vars-list']));
    $titleList = $_POST['title-list'];
    $cellWidth = 190 / count($varsPDF);
    $fontSize = 10;
    if (count($varsPDF) > 8) {
        $fontSize = 8;
    }

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Helvetica', 'B', 14);
    $pdf->Write(7, $titleList);
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->SetFont('Helvetica', 'B', 10);
        $pdf->SetFillColor(128, 128, 128);
    for ($i = 0; $i < count($varsPDF); $i++) {
        $pdf->SetTextColor(255, 255, 255);
        $pdf->Cell($cellWidth, 15, key($varsPDF), 1, '', '',true);
        next($varsPDF);
    }
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Ln();
    for ($j = 0; $j < count($listPDF); $j++) {
        $aux = $listPDF[$j]->toArray();
        for ($k = 0; $k < count($aux); $k++) {
            $pdf->Cell($cellWidth, 15, $aux[$k], 1);
        }
        $pdf->Ln();
    }
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Write(7, date("d-m-Y"));
    $pdf->Ln();
    $pdf->Output("", "pdff.pdf");

    echo "<script language='javascript'>window.open('prueba.pdf','_self','');</script>"; //para ver el archivo pdf generado
    //exit;
} else {
    echo 'nope';
}
?>

