<?php

use Adianti\Control\TPage;
use Adianti\Widget\Container\TScroll;
use Adianti\Widget\Container\TTable;
use Adianti\Widget\Form\TEntry;

class ScrollView extends TPage
{
    public function __construct()
    {
        parent::__construct();
        
       $scroll = new TScroll; //cria uma box que tem uma barra de rolagem internamente
       $scroll->setSize('100%', '300px');

       $table = new TTable;
       $scroll->add($table);

       for($n=1; $n<=20;$n++){
            $object = new TEntry('field'.$n);
            $table->addRowSet('Field '.$n, $object);
       }

       parent::add($scroll);
    }
}
