<?php

use Adianti\Control\TPage;
use Adianti\Widget\Container\TNotebook;
use Adianti\Widget\Container\TVBox;
use Adianti\Widget\Form\TLabel;

class VBoxView extends TPage
{
    public function __construct()
    {
        parent::__construct();
        
        $notebook1 = new TNotebook;
        $notebook2 = new TNotebook;

        $notebook1->appendPage('Page 1', new TLabel('page 1'));
        $notebook1->appendPage('Page 2', new TLabel('page 2'));

        $notebook2->appendPage('Page 1', new TLabel('page 1'));
        $notebook2->appendPage('Page 2', new TLabel('page 2'));

        $vbox = new TVBox;
        $vbox->style = 'width: 100%';
        $vbox->add($notebook1);
        $vbox->add($notebook2);

        parent::add($vbox);
    }
}