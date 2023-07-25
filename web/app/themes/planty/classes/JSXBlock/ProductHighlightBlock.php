<?php

namespace Planty\Theme\JSXBlock;

class ProductHighlightBlock extends JSXBlock
{
    public array $attributes = [
        'image' => ['type' => 'string', 'default' => ''],
        'enableLaurel' => ['type' => 'boolean', 'default' => true],
        'laurelLeftX' => ['type' => 'number', 'default' => 190],
        'laurelLeftY' => ['type' => 'number', 'default' => 35],
        'laurelRightX' => ['type' => 'number', 'default' => -200],
        'laurelRightY' => ['type' => 'number', 'default' => 35]
    ];

    public function ProductHighlightRender(array $attributes)
    {
        $laurelLeftStyle = "left: calc(50% - {$attributes['laurelLeftX']}px);";
        $laurelLeftStyle .= "top: {$attributes['laurelLeftY']}px;";
        $laurelRightStyle = "left: calc(50% - {$attributes['laurelRightX']}px);";
        $laurelRightStyle .= "top: {$attributes['laurelRightY']}px;";

        $html = '<div class="wp-block-planty-product-highlight">';
        $html .= <<<HTML
            <img src="/app/themes/planty/assets/laurel-left.png" alt="Laurel left" style="{$laurelLeftStyle}">
            <img src="{$attributes['image']}" alt="product highlight">
            <img src="/app/themes/planty/assets/laurel-right.png" alt="Laurel right" style="{$laurelRightStyle}">
        HTML;
        return $html . '</div>';
    }
}
