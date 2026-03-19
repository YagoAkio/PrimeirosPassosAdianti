<?php
class TesteView extends TPage
{
    public function __construct(){
        parent:: __construct();

        echo 'construtor <br>';
    }

    public function onEvento(){
        echo 'evento <br>';
    }

    public function onEventoEstatico(){
        echo 'evento estático <br>';
    }

    public function show(){
        parent:: show();

        echo 'show <br>';
    }
}