<?php

use Adianti\Control\TPage;
use Adianti\Widget\Dialog\TMessage;
use Adianti\Widget\Template\THtmlRenderer;

class TemplateViewMask extends TPage
{
    public function __construct()
    {
        parent:: __construct();

        try
        {
            $html = new THtmlRenderer('app/resources/template-masks.html');

            $replace = [];
            $replace['date'] = date('d/m/Y');
            $replace['datetime'] = date('H:i:s');
            $replace['number'] = number_format(123456.78, 2, ',', '.');
            $replace['value1'] = number_format(10, 2, ',', '.');
            $replace['value2'] = number_format(20, 2, ',', '.');
            $replace['value3'] = number_format(30, 2, ',', '.');
            $replace['evaluate'] = number_format(10 + 20 + 30, 2, ',', '.');

            $html->enableSection('main',$replace);

            parent::add($html);
        }
        catch (Exception $e)
        {
            new TMessage('error', $e->getMessage());
        }
    }
}