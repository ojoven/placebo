<?php
/*************************************
 * WordPress Extend
 *************************************/

/** LOAD SECTION **/
function load_section($section, $data = array()){
    load_view('templates/sections/' . $section, $data);
}

/** LOAD VIEW **/
function load_view($template, $data = array()){
    extract($data);
    require locate_template($template.'.php');
}