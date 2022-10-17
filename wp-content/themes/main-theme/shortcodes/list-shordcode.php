<?php
add_shortcode('arrow-list', function ($attr, $content = null): string
{
    return '<div class="ul--arr">'. $content . '</div>';
});
add_shortcode('circle-list', function ($attr, $content = null): string
{
    return '<div class="ul--circle">'. $content . '</div>';
});
