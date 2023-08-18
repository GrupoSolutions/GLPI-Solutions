<?php
	require './dompdf/autoload.inc.php';
	use Dompdf\Dompdf;
	use Dompdf\Options;
	$options = new Options();
	$options->set('defaultFont', 'Courier');
	$options->set('isRemoteEnabled', TRUE);
	$options->set('debugKeepTemp', TRUE);
	$options->set('isHtml5ParserEnabled', TRUE);
	$options->set('chroot', '/');
	$options->setIsRemoteEnabled(true);
	
	$PDF = new Dompdf($options);
    $PDF->setPaper('A4', 'landscape');
    ob_start();
    require('ar.php');
    $content = ob_get_clean();
	$PDF->loadHtml($content);
	$PDF->render();
	header('Content-type: application/pdf');
	echo $PDF->output();