<?php

namespace Planty\Theme\JSXBlock;

class TastesBlock extends JSXBlock
{
    public array $attributes = [
        'nb' => ['type' => 'number', 'default' => 4],
        'tastes' => ['type' => 'array', 'default' => []]
    ];

    public function TastesRender(array $attributes)
    {
        $html = '<div class="wp-block-planty-tastes">';
        $tastes = array_slice($attributes['tastes'], 0, $attributes['nb']);

        foreach ($tastes as $taste) {
            $imageSrc = isset($taste['imageSrc']) ? $taste['imageSrc'] : '';
            $title = isset($taste['title']) ? $taste['title'] : '';

            $html .= <<<HTML
			<div class="taste">
				<img src="{$imageSrc}">
				<h3>{$title}</h3>
			</div>
		HTML;
        }

        return $html . '</div>';
    }
}
