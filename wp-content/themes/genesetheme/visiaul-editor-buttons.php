<?php

/*
Plugin Name: Visual Editor Buttons for shortcode
Plugin URI: #
Description: Adds a button to visual editor.
Author: Genese
*/

function enqueue_plugin_scripts($plugin_array)
{
    //enqueue TinyMCE plugin script with its ID.
    $plugin_array["shortcode_button_plugin"] =  plugin_dir_url(__FILE__) . "../js/mce-button.js";
    return $plugin_array;
}

add_filter("mce_external_plugins", "enqueue_plugin_scripts");

function register_buttons_editor($buttons)
{
    //register buttons with their id.
    array_push($buttons, "shortcode");
    return $buttons;
}

add_filter("mce_buttons", "register_buttons_editor");