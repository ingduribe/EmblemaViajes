<?php 

require __DIR__.'./../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pf = new Html2Pdf();
$html2pf->writeHTML('<h1>Terminos y condiciones</h1>');
$html2pf->output();

?>