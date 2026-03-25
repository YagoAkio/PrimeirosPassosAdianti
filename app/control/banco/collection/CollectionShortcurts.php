<?php
class CollectionShortcurts extends TPage
{
    public function __construct()
    {
        parent:: __construct();

        try
        {
            TTransaction::open('curso');

            $clientes = Cliente::all();
            echo '<pre>';
            echo '<br> <br> <br> ---------------------------- Primeiro Atalho ---------------------------- <br> <br> <br>';
            print_r($clientes);
            echo'</pre>';

            $count = Cliente::where('situacao','=','Y')->where('genero', '=', 'F')->count();
            new TMessage('info', "Quantidae de Clientes com a situação boa e do genero feminino = $count");

            $clientes2 = Cliente::where('situacao','=','Y')->where('genero','=','F')->load();
            echo '<pre>';
            echo '<br> <br> <br> ---------------------------- Terceiro Atalho ---------------------------- <br> <br> <br>';
            print_r($clientes2);
            echo'</pre>';


            $clientes3 = Cliente::where('id','>','0')->take(10)->skip(20)->load();
            echo '<pre>';
            echo '<br> <br> <br> ---------------------------- Quarto Atalho ---------------------------- <br> <br> <br>';
            print_r($clientes3);
            echo '</pre>';
            
            $clientes4 = Cliente::where('situacao','=','Y')->where('genero','=','F')->first();
            echo '<pre>';
            echo '<br> <br> <br> ---------------------------- Qunito Atalho ---------------------------- <br> <br> <br>';
            print_r($clientes4);
            echo'</pre>';

            $clientes5 = Cliente::where('situacao','=','Y')->where('genero','=','F')->orderBy('nome')->load();
            echo '<pre>';
            echo '<br> <br> <br> ---------------------------- Sexto Atalho ---------------------------- <br> <br> <br>';
            print_r($clientes5);
            echo'</pre>';

            $clientes6 = Cliente::where('cidade_id','=','3')->set('telefone', '3333-3333')->update();
            echo '<pre>';
            echo '<br> <br> <br> ---------------------------- Setimo Atalho ---------------------------- <br> <br> <br>';
            print_r($clientes6);
            echo'</pre>';

            // $clientes7 = Cliente::where('categoria_id','=','3')->delete();
            // echo '<pre>';
            // echo '<br> <br> <br> ---------------------------- Oitavo Atalho de Consulta ---------------------------- <br> <br> <br>';
            // print_r($clientes7);
            // echo'</pre>';

            $clientes8 = Cliente::getIndexedArray('id','nome');
            echo '<pre>';
            echo '<br> <br> <br> ---------------------------- Nono Atalho ---------------------------- <br> <br> <br>';
            print_r($clientes8);
            echo'</pre>';

            $clientes9 = Cliente::where('situacao','=','Y')->orderBy('id')->getIndexedArray('id','nome');
            echo '<pre>';
            echo '<br> <br> <br> ---------------------------- Decimo Atalho ---------------------------- <br> <br> <br>';
            print_r($clientes9);
            echo'</pre>';

            TTransaction::close();
        }
        catch(Exception $e)
        {
            new TMessage('error', $e->getMessage());
        }
    }
}