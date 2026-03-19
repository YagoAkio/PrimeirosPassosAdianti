<?php

use Adianti\Control\TPage;
use Adianti\Widget\Base\TElement;

class EmbeddedPDFView extends TPage
{
    public function __construct()
    {
        parent::__construct();
        
        $pdf = new TElement('iframe');
        $pdf->width = '100%';
        $pdf->height = '600px';
        $pdf->src = 'https://api.slingacademy.com/v1/sample-data/files/just-text.pdf';
        $pdf->type = 'application/pdf';
        
        parent::add($pdf);
    }
}