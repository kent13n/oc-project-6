<?php

namespace Planty\Theme\JSXBlock;

class JSXBlock
{
    public string $dir = '';
    public string $name = '';
    public array $attributes = [];
    public array $components = [];

    public function __construct(string $name, array $attributes, array $components = ['wp-blocks', 'wp-editor', 'wp-i18n', 'wp-element', 'wp-components'])
    {
        $this->name = $name;
        $this->attributes = $attributes;
        $this->components = $components;
        $this->dir = get_stylesheet_directory() . '/blocks';
    }

    public function Register(): bool
    {
        if (!function_exists('register_block_type')) {
            return false;
        }

        wp_register_script(
            $this->name,
            get_stylesheet_directory_uri() . "/blocks/dist/{$this->name}.js",
            $this->components,
            filemtime("{$this->dir}/dist/{$this->name}.js")
        );

        wp_register_style(
            "{$this->name}-editor",
            get_stylesheet_directory_uri() . "/blocks/{$this->name}/editor.css",
            [],
            filemtime("{$this->dir}/{$this->name}/editor.css")
        );

        wp_register_style(
            $this->name,
            get_stylesheet_directory_uri() . "/blocks/{$this->name}/style.css",
            [],
            filemtime("{$this->dir}/{$this->name}/style.css")
        );

        $method = ucfirst($this->name) . "Render";
        
        register_block_type("planty/{$this->name}", array(
            'editor_script' => $this->name,
            'editor_style' => "{$this->name}-editor",
            'style' => $this->name,
            'attributes' => $this->attributes,
            'render_callback' => [$this, $method]
        ));

        return true;
    }
}
