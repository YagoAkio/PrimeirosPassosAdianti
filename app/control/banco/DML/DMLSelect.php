<?php
class DMLSelect extends TPage
{
    public function __construct()
    {
        parent::__construct();

        try
        {
            $conn = TTransaction::open('curso');
            $query = "SELECT nome FROM cliente";
            $dados = TDatabase::getData($conn, $query);

            echo '<pre>';
            print_r($dados);
            echo '</pre>';

            TTransaction::close();
        }
        catch(Exeception $e)
        {
            new TMessage('info', $e->getMessage());
        }
    }
}