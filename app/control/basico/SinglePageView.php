<?php

use Adianti\Control\TPage;
use Adianti\Widget\Container\TVBox;
use Adianti\Widget\Template\THtmlRenderer;
use Adianti\Widget\Util\TXMLBreadCrumb;

class SinglePageView extends TPage
{
    public function __construct()
    {
        parent:: __construct();
        
        $html = new THtmlRenderer('app\resources\page.html');
       
        $replace = [];
        $replace['title'] = 'Motor Rotativo Wankel: Uma Revolução na Engenharia Automotiva';
        $replace['body'] = 'O motor rotativo Wankel, também conhecido como motor de ciclo Wankel, é um tipo de motor de combustão interna que utiliza um rotor em forma de Lévy para converter a energia do combustível em movimento mecânico. 
        Este tipo de motor foi desenvolvido pela empresa japonesa Mazda e é conhecido por sua simplicidade, leveza e alta potência em relação aos motores convencionais. 
        O motor Wankel é composto por um rotor triangular que gira dentro de uma câmara de combustão em forma de anel. 
        À medida que o rotor gira, ele cria três câmaras de combustão distintas, permitindo que o motor funcione de maneira suave e eficiente. 
        A ausência de válvulas e pistões tradicionais contribui para a redução do peso e do número de peças móveis, resultando em um motor mais compacto e leve. 
        O motor Wankel é conhecido por sua alta potência específica, o que significa que pode gerar mais potência em relação ao seu tamanho e peso em comparação com os motores convencionais. 
        No entanto, o motor Wankel também apresenta desafios, como o consumo de combustível relativamente alto e a necessidade de manutenção frequente devido ao desgaste do rotor e das vedações. 
        Apesar desses desafios, o motor rotativo Wankel continua a ser uma inovação significativa na engenharia automotiva, oferecendo uma alternativa única aos motores convencionais e inspirando o desenvolvimento de tecnologias automotivas mais eficientes e avançadas.';
        $replace['footer'] = 'Fonte: https://www.mazda.com.br/tecnologia/motor-wankel/';

        $html->enableSection('main', $replace);

        $vbox = new TVBox;
        $vbox->style = 'width: 100%';   
        $vbox->add(new TXMLBreadCrumb('menu.xml', __CLASS__));
        $vbox->add($html);

        parent::add($vbox); 
    }
}