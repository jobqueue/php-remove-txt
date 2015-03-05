<?php 
include 'vendor/autoload.php';

$url_pdf = "https://ujsportal.pacourts.us/DocketSheets/MDJReport.ashx?docketNumber=MJ-19311-CR-0000113-2015";

$parser = new \Smalot\PdfParser\Parser();
$pdf    = $parser->parseFile($url_pdf);
$text = $pdf->getText();
//This attempts to match the datetime format
//echo preg_replace("/Printed: \d+\/\d+\/\d{4} \d+:\d+ [aApP][mM]/", " ", $input_lines);
//You can also borrow Gordo's regex for this one https://www.codersclan.net/ticket/896

//echo preg_replace("/(Printed:)\s(\d+\/\d+\/\d{4})\s(\d+:\d+\s[aApP][mM])/", " ", (string)$text);
//This tries to match anything from Printed: to Recent, not including Recent
//echo preg_replace("/(Printed:)\s(\d+\/\d+\/\d{4})\s(\d+:\d+\s[aApP][mM])\s(?=Recent)/", "", (string)$text);

//You could try your own regex for php here: http://www.phpliveregex.com/p/ahX


//This tries to replace anything from Printed to AM/PM, including Printed and AM/PM
//echo preg_replace("/Printed:.* [aApP][mM]/", " ", (string)$text);

?>