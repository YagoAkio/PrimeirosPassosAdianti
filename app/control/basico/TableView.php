<?php

use Adianti\Control\TPage;
use Adianti\Widget\Container\TTable;
use Adianti\Widget\Form\TEntry;
use Adianti\Widget\Form\TLabel;

Class TableView extends TPage
{
    public function __construct()
    {
        parent::__construct();
        
        $table = new TTable;
        $table->border = '1';
        $table->cellpadding = '4';
        $table->style = 'border-collapse: collapse; width: 100%;';
        
        $row = $table->addRow();
        $row->addCell('Nome');
        $row->addCell('Idade');
        $row->addCell('Cidade');

        $title = new TLabel('titulo','red',18);

        $row = $table->addRow();
        $cell = $row->addCell($title);
        $cell->colspan = 3;
        $cell->style = 'padding: 10px;';

        $row = $table->addRow();
        $row->addCell('João');
        $row->addCell('30');
        $row->addCell('São Paulo');

        $id = new TEntry('id');
        $nome = new TEntry('nome');
        $endereco = new TEntry('endereco');
        $fone = new TEntry('fone');
        $obs = new TEntry('obs');

        $table->addRowSet(new TLabel('Código'), $id);
        $table->addRowSet(new TLabel('Nome'), $nome);
        $table->addRowSet(new TLabel('Endereço'), $endereco);
        $table->addRowSet(new TLabel('Fone'), $fone);
        $table->addRowSet(new TLabel('Observação'), $obs);

        parent::add($table);
    }
}