<?php
class FormularioBootstrapEstatico extends TPage
{
    private $form;

    public function __construct()
    {
        parent:: __construct();

        $this->form = new BootstrapFormBuilder;
        $this->form->setFormTitle('Formulário bootstrap estático');

        $id             = new TEntry('id');
        $descricao      = new TEntry('descricao');
        $senha          = new TPassword('senha');

        $id -> setEditable(FALSE);

        $id             -> setSize('100%');
        $descricao      -> setSize('100%');
        $senha          -> setSize('100%');        

        $this -> form -> addFields([new TLabel('Id')], [$id]);
        $this -> form -> addFields([new TLabel('Descricao')], [$descricao]);
        $this -> form -> addFields([new TLabel('Senha')], [$senha]);
        
        $this -> form -> addAction('Enviar', new TAction([$this, 'onSend']), 'fa:save');

        parent::add($this -> form);
    }

    public static function onSend($param){
        echo '<pre>';
        var_dump($param);
        echo '</pre>';
    }
}