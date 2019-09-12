<?php
/*
Plugin Name: Hello Shifter GitHub hosting plugin
Plugin URI: https://github.com/AtsushiA/hello-shifter-github-hosting-plugin
Description: for Shifter GitHub hosting plugin actions DEMO
Author: Atsushi Ando
Version: {release version}
Author URI: https://next-season.net/
*/

add_filter('the_content', 'moji_changer_content_filter');

function moji_changer_content_filter($content) {
    return str_replace('。', '<span style="color:red;font-size:200%;">。</span>', $content);
}