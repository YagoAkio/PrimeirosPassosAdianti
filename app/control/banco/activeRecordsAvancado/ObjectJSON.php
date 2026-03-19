<?php
class ObjectJSON extends TPage
{
    public function __construct(){
        parent:: __construct();

        try
        {
            TTransaction::open('curso');

            $produto = new Produto(3);
            
            print_r($produto->toJson());

            echo '<br>';
            

            print $produto->render('O produto (<b>{id}</b>) - nome: <b>{descricao}</b> - preco R$ <b>{preco_venda}</b>');
            
            echo '<br>';
            echo '<br>';

            print 'Valor do estoque: ' . '<b>' . $produto->evaluate('= {preco_venda} * {estoque}') . '</b>';

            TTransaction::close();
        }
        catch(Exception $e)
        {
            new TMessage('error', $e->getMessage());
        }
    }
}