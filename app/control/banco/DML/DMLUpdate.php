<<?php
class DMLUpdate extends TPage
{
    public function __construct()
    {
        parent:: __construct();

        try{
            $con = TTransaction::open('curso');

            $criteria = TCriteria::create(['unidade'=>'ACESSORIO']);
            $valores = ['unidade'=>'UN'];
            TDatabase::updateData($con, 'produto', $valores, $criteria);
               
            TTransaction::close();
        }catch (Execption $e){
            new Message('error', $e->getMessage());
        }
    }
}   