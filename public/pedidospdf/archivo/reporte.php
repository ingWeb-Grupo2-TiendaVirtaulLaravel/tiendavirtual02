<?php

require_once('../vendor/autoload.php');

require_once('documento/index.php');

//llamada base de datos
require_once('informacion.php');

// crea nuevo documento PDF 
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);


$pdf->AddPage();


$plantilla = getPlantilla($informacion);

// Contenido del documento PDF en HTML
$html = <<<EOD

        $plantilla

EOD;

$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 0, 0, true, '', true);
// ---------------------------------------------------------

// Cierra y sale del documento PDF
$pdf->Output('reporte.pdf', 'I');

?>