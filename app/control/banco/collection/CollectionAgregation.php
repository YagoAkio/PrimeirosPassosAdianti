<?php
class CollectionAgregation extends TPage
{
    public function __construct()
    {
        parent:: __construct();

        try
        {
            TTransaction::open('curso');
            TTransaction::dump();

            $total = Venda::sumBy('total');
            echo '<pre>Total de vendas - ';
            var_dump($total);
            echo '</pre>';

            echo '<br>';

            $count = Venda::countDistinctBy('total');
            echo '<pre>Quntidade de vendas - ';
            var_dump($count);
            echo '</pre>';

            echo '<br>';

            $rows = Venda::groupBy('dt_venda, cliente_id')->sumBy('total');
            echo '<pre>';
            print_r($rows);
            echo '</pre>';

            $total2 = Venda::where('dt_venda', '>', '2015-03-12')->sumBy('total');
            echo '<pre>Total de vendas apatir de 12/03/2015 - ';
            var_dump($total2);
            echo '</pre>';

            $count2 = Venda::where('dt_venda', '>', '2015-03-12')->countDistinctBy('id');
            echo '<pre>Quntidade de vendas apatir de 12/03/2015 - ';
            var_dump($count2);
            echo '</pre>';

            $row2 = Venda::where('dt_venda','>','2015-03-12')->groupBy('dt_venda')->maxBy('total');

            echo '<pre>';
            print_r($row2);
            echo '</pre>';

            $total3 = Venda::where('dt_venda','>','2015-04-12')->where('dt_venda','<','2019-04-12')->sumBy('total');
            echo '<pre>Total de vendas de 12/04/2015 a 12/04/2019 - ';
            var_dump($total3);
            echo '</pre>';

            $row3 = Venda::where('dt_venda','>','2015-04-12')->where('dt_venda','<','2019-04-12')->groupBy('cliente_id')->sumBy('total');
            echo '<pre>';
            print_r($row3);
            echo '</pre>';

            TTransaction::close();
        }
        catch(Exception $e)
        {
            new TMessage('error', $e->getMessage());
        }
    }
}