<?php
//============================================================+
// File name   : example_052.php
// Begin       : 2009-05-07
// Last Update : 2013-05-14
//
// Description : Example 052 for TCPDF class
//               Certification Signature (experimental)
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Certification Signature (experimental)
 * @author Nicola Asuni
 * @since 2009-05-07
 */

// Include the main TCPDF library (search for installation path).
include('library/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->setCreator(PDF_CREATOR);
$pdf->setAuthor('Nicolas Minue');
$pdf->setTitle('Orden Médica');
$pdf->setSubject('TCPDF Tutorial');
$pdf->setKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 002', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->setMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->setHeaderMargin(PDF_MARGIN_HEADER);
$pdf->setFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->setAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

/*
NOTES:
 - To create self-signed signature: openssl req -x509 -nodes -days 365000 -newkey rsa:1024 -keyout tcpdf.crt -out tcpdf.crt
 - To export crt to p12: openssl pkcs12 -export -in tcpdf.crt -out tcpdf.p12
 - To convert pfx certificate to pem: openssl pkcs12 -in tcpdf.pfx -out tcpdf.crt -nodes
*/

// set certificate file
$certificate = 'file://'.realpath('tcpdf.crt');

// set additional information
$info = array(
	'Name' => 'TCPDF',
	'Location' => 'Office',
	'Reason' => 'Testing TCPDF',
	'ContactInfo' => 'http://www.tcpdf.org',
	);

// set document signature
$pdf->setSignature($certificate, $certificate, 'orden', '', 2, $info);

// set font
$pdf->setFont('helvetica', '', 12);

// add a page
$pdf->AddPage();

$pdf->writeHTML($text, true, 0, true, 0);
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// *** set signature appearance ***

// create content for signature (image and/or text)
$pdf->Image('images/tcpdf_signature.png', 180, 60, 15, 15, 'PNG');

// define active area for signature appearance
$pdf->setSignatureAppearance(180, 60, 15, 15);

// -----------------------------------------------------------------------------

$tbl = <<<EOD
<table cellspacing="0" cellpadding="1" border="1">
    <tr>
		<td align="center">Descripción</td>
        <td align="center">Cantidad</td>
        <td align="center">Precio</td>
    </tr>
    <tr>
        <td rowspan="2">Sesiones Kinesiología<br /></td>
        <td rowspan="3" align="right">10<br /></td>
		<td rowspan="4" align="right">$150<br /></td>
    </tr>
    <tr>
       
    </tr>
	<tr>
       
    </tr>
	<tr>
       
    </tr>
	<tr>
	   <td> </td>
	   <td align="right"> <b>Total</b><br /></td>
	   <td align="right"> <b>$1500</b><br /></td>
    </tr>
		

</table>
EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// print a line of text
$text = 'Este es un <b color="#FF0000">documento firmado digitalmente</b> por la administración del Sindicato de los Empleados Textiles y Afines.<br />Para validar esta firma se recomienda abrir este documento con <b>Adobe Acrobat</b> para agregar el certificado a la <i>Lista de Identidades Confiables</i>.<br /><br />Para más informacion comuníquese al tel: <b>+54 9 380 4397644</b> o vía mail a <b>consultas@setia.com. </b><br /><br />';
$pdf->writeHTML($text, true, 0, true, 0);


// *** set an empty signature appearance ***
$pdf->addEmptySignatureAppearance(180, 80, 15, 15);

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('orden.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
