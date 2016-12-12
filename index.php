<?php
/*
Plugin Name: My Name Is
*/
function name_shortcodes_init()
{
    function name_shortcode($atts = [], $content = null)
    {
        
        $content .= "Chandana - fun fact: I have a Masters in Project Management";
        return $content;
    }
    add_shortcode('fun-fact-plugin', 'name_shortcode');
}
add_action('init', 'name_shortcodes_init');
