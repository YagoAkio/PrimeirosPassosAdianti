<?php

use Adianti\Control\TPage;
use Adianti\Widget\Base\TElement;

class EmbeddedVideoView extends TPage
{
    public function __construct()
    {
        parent::__construct();
        
        $video = new TElement('iframe');
        $video->width = '100%';
        $video->height = '600px';
        $video->src = 'https://www.youtube.com/watch?v=jbR_RL2VOtI';
        $video->frameborder = '0';
        $video->allow = 'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture';
        
        parent::add($video);
    }
}