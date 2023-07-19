<?php

namespace Planty\Theme\JSXBlock;

class TestimonialBlock extends JSXBlock
{
    public function TestimonialRender(array $attributes)
    {
        $html = '<div class="wp-block-planty-testimonial">';
        $testimonials = array_slice($attributes['testimonials'], 0, $attributes['nb']);
        foreach ($testimonials as $testimonial) {
            $imageSrc = isset($testimonial['imageSrc']) ? $testimonial['imageSrc'] : '';
            $title = isset($testimonial['title']) ? $testimonial['title'] : '';
            $content = isset($testimonial['content']) ? $testimonial['content'] : '';

            $html .= <<<HTML
			<div class="testimonial">
				<img src="{$imageSrc}">
				<div class="testimonial-content">
					<h2>{$title}</h2>
					<p>{$content}</p>
				</div>
			</div>
		HTML;
        }

        return $html . '</div>';
    }
}