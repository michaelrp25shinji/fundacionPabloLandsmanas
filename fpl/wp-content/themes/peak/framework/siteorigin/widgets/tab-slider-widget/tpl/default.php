<?php
/**
 * @var $style
 * @var $type
 * @var $animation
 * @var $easing
 * @var $loop
 * @var $slideshow
 * @var $slideshow_speed
 * @var $animation_speed
 * @var $elements
 */


$shortcode = '[tab_slider style="' . $style . '" type="' . ($type ? $type : 'flex') . '" animation="' . $animation . '" easing="' . $easing . '" loop="' . ($loop ? 'true' : 'false') . '" slideshow="' . ($slideshow ? 'true' : 'false') . '" slideshow_speed="' . $slideshow_speed . '" animation_speed="' . $animation_speed . '" ]';

$shortcode .= '<ul>';

foreach ($elements as $element):

    $shortcode .= '<li>';

    $shortcode .= $element['text'];

    $shortcode .= '</li>';

endforeach;

$shortcode .= '</ul>';

$shortcode .= '[/tab_slider]';

echo do_shortcode($shortcode);
