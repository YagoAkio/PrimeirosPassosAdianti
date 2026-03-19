<?php
class ObjectFind extends TPage
{
    public function __construct(){
        parent:: __construct();

        try
        {
            TTransaction::open('curso');

            TTransaction::dump();

            $produto = Produto::find(8);

            if($produto instanceof Produto)
            {
                echo '<b>Descrição</b>: ' . $produto->descricao;
                echo '<br>';
                echo '<b>Estoque</b>: ' . $produto->estoque;
            }


            TTransaction::close();
        }
        catch(Exception $e)
        {
            new TMessage('error', $e->getMessage());
        }
    }
}