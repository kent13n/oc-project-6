<?php

namespace Planty\Theme\JSXBlock;

class SectionBlock extends JSXBlock
{
    public array $attributes = [
        'backgroundColor' => ['type' => 'string', 'default' => ''],
        'backgroundImage' => ['type' => 'string', 'default' => ''],
        'backgroundImageRepeat' => ['type' => 'boolean', 'default' => false],
        'backgroundImagePositionX' => ['type' => 'number', 'default' => 0],
        'backgroundImagePositionY' => ['type' => 'number', 'default' => 0],
        'enableBackgroundImage' => ['type' => 'boolean', 'default' => false],
        'waveSeparator' => ['type' => 'boolean', 'default' => false],
        'waveMarker' => ['type' => 'boolean', 'default' => false],
        'waveHeight' => ['type' => 'number', 'default' => 40]
    ];

    public function SectionRender(array $attributes, $html = '')
    {
        return $html;
    }
}
