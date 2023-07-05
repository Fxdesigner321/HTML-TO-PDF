<?php
require_once "vendor/autoload.php";
  
use Dompdf\Dompdf;
 
// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = file_get_contents('index.html'); // here test.html is the file name
$dompdf->loadHtml($html);
  
$dompdf->setPaper('A4', 'landscape');

$dompdf->render();

$dompdf->stream("codexworld", array("Attachment" => 0));

?>