
<?php
/*
Plugin Name: Design Message
*/
function quote_shortcodes_init()
{
    function quote_shortcode($atts = [], $content = null)
    {
        $oQuote = json_decode(file_get_contents("http://quotesondesign.com/wp-json/posts?filter[orderby]=rand&filter[posts_per_page]=1"));   
        $content .= $oQuote[0]->{'content'};
        return $content;
    }
    add_shortcode('design-message-of-the-day-plugin', 'quote_shortcode');
}
add_action('init', 'quote_shortcodes_init');
