<?php

use Adianti\Control\TPage;
use Adianti\Widget\Base\TElement;

class EmbeddedSystemView extends TPage
{
    public function __construct()
    {
        parent::__construct();
        
        $object = new TElement('iframe');
        $object->width = '100%';
        $object->height = '600px';
        $object->src = 'https://loldle.net/';
        $object->frameborder = '0';
                
        parent::add($object);
    }
}