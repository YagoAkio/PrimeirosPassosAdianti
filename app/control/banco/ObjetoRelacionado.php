<?php
class ObjetoRelacionado extends TPage
{
    public function __construct()
    {
        parent:: __construct();
        try
        {
            TTransaction::open('curso');
            
            //$contatos = Cliente::find(1)->hasMany('Contato');
            //$contatos = Cliente::find(1'->hasMany('Contato','cliente_id', 'id', 'tipo');
            $contatos = Cliente::find(1)->filterMany('Contato')->where('tipo','=','face')->load();

            $habilidades = Cliente::find(1)->belongsToMany('Habilidade');

            echo '<pre>';
            var_dump($contatos);
            echo '</pre>';


            echo '<pre>';
            var_dump($habilidades);
            echo '</pre>';

            TTransaction::close();
        }catch(Exception $e){
            new TMessage('error', $e->getMessage());
        }
    }
}