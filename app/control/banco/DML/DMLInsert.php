<?php
class DMLInsert extends TPage
{
    public function __construct()
    {
        parent:: __construct();

        try{
            $con = TTransaction::open('curso');
            // Produto 1
            TDatabase::insertData($con, 'produto', [
                'id'          => 3001,
                'descricao'   => 'Vara de Pesca Carbono Maciço 2.7m',
                'estoque'     => 12.0,
                'preco_venda' => 289.90,
                'unidade'     => 'UN',
                'local_foto'  => 'imagens/vara_carbono_27m.jpg'
            ]);     
            TTransaction::close();
        }catch (Execption $e){
            new Message('error', $e->getMessage());
        }
    }
}