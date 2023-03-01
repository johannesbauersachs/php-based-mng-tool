<?php
require_once __DIR__ . "/vendor/autoload.php";
$kostenX = $_POST["kostenX"];
$kundeX = $_POST["kundeX"];
$datumX = $_POST["datumX"];
$rechnungsNummerX = $_POST["rechnungsNummerX"];
$bermerkung = $_POST["bemerkung"];
$link = "https://newwebtec.de";
global $name;
$name = $kundeX;



$formular = stripslashes(
    "\n\n\n\nSchönen guten Tag " . $kundeX . ",\n\n" . 
    "Ihre Sendung ist heute dem " . $datumX . " eingeroffen mit der Sendenummer " . $rechnungsNummerX . "\n" . 
    "Wenn sie sich einen Überblick machen wollen, nutzen sie " . $link . " um mehr darüber zu erfahren." . 
    "\n\nDiese Email wurde durch Beispiel Firma an sie gesendet.\n\n" . "Wenn sie fragen zum Versanddatum oder dem Inhalt der Sendung haben sollten, wenden Sie sich bitte an den Absender.\n\n" . 
    "Mit freundlichen Grüßen\n\n" . "Ihr Beispiel Firma Team\n\n" . "Kosten: " . $kostenX);
$formular = iconv('UTF-8', 'windows-1252', $formular . "\n\n\n\n" . $bermerkung);
$fpdf = new FPDF();

$fpdf->AddPage();
$fpdf->SetFont("Arial");
$fpdf->MultiCell(0,5,$formular);

$fpdf->Output("Rechnung.pdf","D");

?>