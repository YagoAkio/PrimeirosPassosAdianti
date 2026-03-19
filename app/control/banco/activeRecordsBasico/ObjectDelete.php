<?php
class ObjectDelete extends TPage
{
    public function __construct(){
        parent:: __construct();

        try{

            TTransaction::open('curso');

            TTransaction::dump();

            $produto = Produto::find(25);
            
            if($produto instanceof Produto)
            {
                // $produto->delete();
            }

            // $produto = new Produto;
            // $produto->delete(25);

            TTransaction::close();
        }catch(Exceptio $e){
            new TMessage('error',$e->getMessage());
        }
    }
}