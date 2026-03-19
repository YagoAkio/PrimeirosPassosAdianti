<?php
class ObjectArray extends TPage
{
    public function __construct(){
        parent:: __construct();

        try
        {
            TTransaction::open('curso');

            $produto = new Produto(3);
            
            echo '<prep>';
            print_r($produto->toArray());
            echo '</prep>';
            
            // $dados = [];
            // $dados['descricao'] = 'SMART WATCH';
            // $dados['estoque'] = 50;
            // $dados['preco_venda'] = 800;
            // $dados['unidade'] = 'ACESSORIO';
            // $dados['local_foto'] = '';
            
            // $produto = new Produto;
            // $produto->fromArray($dados);
            // $produto->store();

            TTransaction::close();
        }
        catch(Exception $e)
        {
            new TMessage('error', $e->getMessage());
        }
    }
}