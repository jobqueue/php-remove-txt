<?php 
include 'vendor/autoload.php';

$url_pdf = "https://ujsportal.pacourts.us/DocketSheets/MDJReport.ashx?docketNumber=MJ-19311-CR-0000113-2015";


$parser = new \Smalot\PdfParser\Parser();
$pdf    = $parser->parseFile($url_pdf);
$text = $pdf->getText();
//echo preg_replace("/Printed: \d+\/\d+\/\d{4}/", " ", (string)$text);
echo preg_replace("/Printed:.* [aApP][mM]/", " ", (string)$text);
?> 