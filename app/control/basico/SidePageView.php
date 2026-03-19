<?php

use Adianti\Control\TPage;
use Adianti\Widget\Base\TScript;
use Adianti\Widget\Template\THtmlRenderer;

class SidePageView extends TPage
{
    public function __construct()
    {
        parent::__construct();
        parent::setTargetContainer('adianti_right_panel');
        
        
        $html = new THtmlRenderer('app\resources\side.html');

        $replace = [];
        $replace['title'] = 'Carretilha Shimano Antares 10000';
        $replace['body'] = 'A carretilha Shimano Antares 10000 é um equipamento de pesca de alta qualidade, projetado para oferecer desempenho excepcional e durabilidade. 
        Com um design moderno e robusto, esta carretilha é ideal para pescadores que buscam uma experiência de pesca eficiente e confortável. 
        A Antares 10000 possui um sistema de freio avançado, que proporciona controle preciso sobre a linha, permitindo que os pescadores enfrentem peixes grandes e fortes com confiança. 
        Além disso, a carretilha é equipada com rolamentos de alta qualidade, garantindo um funcionamento suave e silencioso durante a pesca. 
        Com sua construção resistente e recursos inovadores, a Shimano Antares 10000 é uma escolha popular entre os entusiastas da pesca esportiva.
        Em resumo, a carretilha Shimano Antares 10000 é um equipamento de pesca confiável e eficiente, projetado para atender às necessidades dos pescadores mais exigentes, oferecendo desempenho superior e durabilidade em cada lançamento.
        Especificações técnicas:
        - Capacidade de linha: 0,30mm/200m, 0,35mm/150m, 0,40mm/100m
        - Relação de engrenagem: 5.2:1
        - Peso: 450g
        - Rolamentos: 6+1
        - Freio: Sistema de freio magnético
        - Material do corpo: Alumínio
        - Material da bobina: Alumínio
        - Cor: Preto e vermelho
        - Garantia: 1 ano
        - Acessórios incluídos: Chave de ajuste, óleo lubrificante, manual do usuário.';
        $replace['footer'] = 'Fonte: https://www.shimano.com.br/produtos/carretilhas/antares-10000';

        $html->enableSection('main', $replace);
        parent::add($html);
    }

    public function onClose()
    {
        TScript::create("Template.closeRightPanel()");
    }
}