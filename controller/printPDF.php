<?php

require_once("../config/path.inc.php");
require_once("function_AutoLoad.php");
require_once($_GLOBALS["in_path"] . "libs/fpdf/fpdf.php");
if (isset($_POST['array-list'])) {
    $listPDF = unserialize(base64_decode($_POST['array-list']));
    $varsPDF = unserialize(base64_decode($_POST['vars-list']));
    //var_dump($varsPDF);
    /*foreach ($listPDF as $row) {
        $aux = $row->toArray();
        foreach ($aux as $string) {
            echo $string . " ";
        }
        echo "<br>";
    }*/
    $pdf = new FPDF();
    $pdf->AddPage();

    $pdf->SetFont('Helvetica', 'B', 14);
    foreach ($varsPDF as $var){
        $pdf->Cell(40,7,$var,1);
    $pdf->Ln();
    
      $pdf->Cell(40,5,"hola",1);
      $pdf->Cell(40,5,"hola2",1);
      $pdf->Cell(40,5,"hola3",1);
      $pdf->Cell(40,5,"hola4",1);
      $pdf->Ln();
      $pdf->Cell(40,5,"linea ",1);
      $pdf->Cell(40,5,"linea 2",1);
      $pdf->Cell(40,5,"linea 3",1);
      $pdf->Cell(40,5,"linea 4",1);
    }
    $pdf->Output("", "pdff.pdf");

    echo "<script language='javascript'>window.open('prueba.pdf','_self','');</script>"; //para ver el archivo pdf generado
    //exit;
} else {
    echo 'nope';
}
?>

