<?php

namespace SportStephanLegendDesign\Containers;

use Plenty\Plugin\Templates\Twig;

class SportStephanLegendDesignContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('SportStephanLegendDesign::Stylesheet');
    }
}