<?php

add_action('init','register_menus');

function register_menus(){
    register_nav_menus([
        'main'=> 'Main Menu top of the page',
        'social'=> 'Social menu in footer'
    ]);
}