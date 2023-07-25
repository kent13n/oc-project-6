<?php

namespace Planty\Theme\JSXBlock;

class TeamBlock extends JSXBlock
{
    public array $attributes = [
        'nb' => ['type' => 'number', 'default' => 3],
        'teammates' => ['type' => 'array', 'default' => []]
    ];

    public function TeamRender(array $attributes)
    {
        $html = '<div class="wp-block-planty-team">';
        $teammates = array_slice($attributes['teammates'], 0, $attributes['nb']);

        foreach ($teammates as $teammate) {
            $photo = isset($teammate['photo']) ? $teammate['photo'] : '';
            $name = isset($teammate['name']) ? $teammate['name'] : '';
            $role = isset($teammate['role']) ? $teammate['role'] : '';

            $html .= <<<HTML
            <div class="teammate">
                <img src="{$photo}" alt="Photo de {$name}">
                <h3>{$name}</h3>
                <p>{$role}</p>
            </div>
        HTML;
        }

        return $html . '</div>';
    }
}
