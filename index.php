<?php

/*

Plugin Name: Name-Plugin-1

*/

function wporg_shortcodes_init()
{
    function wporg_shortcode($atts = [], $content = null)
    {
            $content .= <<<EOT
            <h1>John Malto</h1>
			<h1>7689599</h1>
            
EOT;
        return $content;
    }
    add_shortcode('name-student-plugin', 'wporg_shortcode');
}
add_action('init', 'wporg_shortcodes_init');

?>
