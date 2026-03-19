<?php

use Adianti\Control\TPage;
use Adianti\Control\TWindow;
use Adianti\Widget\Template\THtmlRenderer;

class OnDemandWindonwView extends TPage
{
    public function __construct()
    {
        parent:: __construct();
        
        $window = TWindow::create('Janela sob demanda', 0.8, null);
        
        $html = new THtmlRenderer('app\resources\page.html');
       
        $replace = [];
        $replace['title'] = 'Motor em W Configuração W: Uma Abordagem Inovadora para o Desempenho Automotivo';
        $replace['body'] = '
        O motor em W, também conhecido como motor de configuração W, é uma abordagem inovadora para o design de motores automotivos que visa melhorar o desempenho e a eficiência.
        Este tipo de motor é caracterizado por ter três bancos de cilindros dispostos em forma de W, com um total de 12 cilindros.
        A configuração em W permite que o motor seja mais compacto em comparação com os motores V tradicionais, o que pode resultar em uma melhor distribuição de peso e um centro de gravidade mais baixo para o veículo.
        Além disso, o motor em W pode oferecer uma maior potência e torque devido à sua capacidade de acomodar mais cilindros em um espaço menor, o que pode ser benéfico para veículos de alto desempenho e esportivos.
        No entanto, o design do motor em W também apresenta desafios, como a complexidade de construção e manutenção, bem como o potencial para maior consumo de combustível em comparação com motores de configuração mais simples.
        Apesar desses desafios, o motor em W continua a ser uma opção interessante para fabricantes de automóveis que buscam oferecer desempenho excepcional e inovação em seus veículos, especialmente em segmentos de luxo e esportivos.
        ';
        $replace['footer'] = 'Fonte: https://www.mercedes-benz.com.br/passengercars/mercedes-benz-cars/models/amg/gt/roadster/explore/motor-w-configuration-w/';

        $html->enableSection('main', $replace);

        $window->add($html);
        $window->show();
        

    }
}
