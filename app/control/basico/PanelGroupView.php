<?php

use Adianti\Control\TPage;
use Adianti\Widget\Container\TPanelGroup;

class PanelGroupView extends TPage
{
    public function __construct()
    {
        parent::__construct();
        
        $panel = new TPanelGroup('Tipos de Motor e suas Características');

        $table = new TTable;
        $table->border = '1';
        $table->style = 'border-collapse: collapse; width: 100%;';
        $table->addRowSet('Tipo de Motor', 'Vantagens', 'Desvantagens');
        $table->addRowSet('Motor a Combustão', 'Ampla disponibilidade de combustível, maior autonomia, custo inicial mais baixo', 'Emissões de poluentes, ruído, manutenção frequente');
        $table->addRowSet('Motor Elétrico', 'Emissões zero, baixo ruído, manutenção reduzida', 'Autonomia limitada, tempo de recarga, custo inicial mais alto');
        $table->addRowSet('Motor Híbrido', 'Combinação de motor a combustão e elétrico, maior eficiência de combustível, menor impacto ambiental', 'Custo inicial mais alto, complexidade mecânica, manutenção especializada');
        
        $panel->add($table);
        $panel->addFooter('Fonte: https://www.mundodasmotos.com.br/tipos-de-motores-de-motos/');
        parent::add($panel);

    }
}
