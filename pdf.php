<?php

require_once __DIR__ . '/vendor/autoload.php';

$html = '';

for ($i=0; $i < 5; $i++) {
   $html .= '<div>';
   $html .= "<img src='https://i.picsum.photos/id/$i/500/500.jpg'/>";
   $html .= '</div>';
}

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();
