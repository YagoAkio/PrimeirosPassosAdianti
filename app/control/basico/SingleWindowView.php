<?php

use Adianti\Control\TWindow;
use Adianti\Widget\Template\THtmlRenderer;

class SingleWindowView extends TWindow
{
    public function __construct()
    {
        parent:: __construct();
        parent:: setTitle('Janela única');
        parent:: setSize(0.5, 0.5);
        // parent::removePadding(); //retira o padding da janela
        // parent::removeTitleBar(); // retira a barra de título da janela
        // parent::removeBorder(); // retira a borda da janela
        
        $html = new THtmlRenderer('app\resources\page.html');
       
        $replace = [];
        $replace['title'] = 'Convocação da Seleção Brasileira de Futebol para a Copa do Mundo de 2022';
        $replace['body'] = '
        A convocação da Seleção Brasileira de Futebol para a Copa do Mundo de 2022 aconteceu no dia 7 de novembro de 2022, e contou com a presença de 26 jogadores. 
        A lista foi divulgada pelo técnico Tite, que optou por incluir alguns jogadores experientes e outros jovens talentos. 
        Entre os convocados, destacam-se nomes como Neymar, Alisson, Casemiro, Vinícius Júnior, Raphinha e Richarlison. 
        A seleção brasileira tem como objetivo conquistar o hexacampeonato mundial e conta com um elenco forte e competitivo para alcançar esse feito histórico.
        ';
        $replace['footer'] = 'Fonte: https://www.cbf.com.br/selecao-brasileira/noticias/selecao-masculina/convocacao-da-selecao-brasileira-para-a-copa-do-mundo-de-2022';

        $html->enableSection('main', $replace);

        parent::add($html);
    }
}
