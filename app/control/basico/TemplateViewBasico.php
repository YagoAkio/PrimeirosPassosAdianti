<?php

use Adianti\Control\TPage;
use Adianti\Widget\Dialog\TMessage;
use Adianti\Widget\Template\THtmlRenderer;

class TemplateViewBasico extends TPage
{
    public function __construct()
    {
        parent:: __construct();

        try
        {
            $html = new THtmlRenderer('app\resources\template-basico.html');

            $custumer = new stdClass;
            $custumer->titulo = 'Lista de Compras';
            $custumer->id = 5;
            $custumer->name = 'Himora';
            $custumer->adress = 'Rua Souza Gab, 175. Bairro Paulista Jardim.';

            $replaces = [];
            $replaces['titulo'] = $custumer->titulo;
            $replaces['id'] = $custumer->id;
            $replaces['name'] = $custumer->name;
            $replaces['adress'] = $custumer->adress;
            $html->enableSection('main',$replaces);
            
            $replace2 = [];
            $replace2['nome'] = 'Tatula 400 TWL';
            $replace2['descricao'] = 'Carretilha de perfil baixo, com 7 rolamentos, ratio 6.4:1 e capacidade para 200g de linha.';


            $html->enableSection('outros',$replace2);
            parent::add($html);
        }
        catch (Exception $e)
        {
            new TMessage('error',$e->getMessage());
        }
    }
}