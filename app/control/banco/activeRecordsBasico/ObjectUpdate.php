<?php
class ObjectUpdate extends TPage
{
    public function __construct(){
        parent:: __construct();

        try{

            TTransaction::open('curso');

            TTransaction::dump();

            $produto = Produto::find(25);
            
            if($produto instanceof Produto)
            {
                $produto->descricao = 'GRAVADOR CD-R';
                $produto->store();
            }

            TTransaction::close();
        }catch(Exceptio $e){
            new TMessage('error',$e->getMessage());
        }
    }
}