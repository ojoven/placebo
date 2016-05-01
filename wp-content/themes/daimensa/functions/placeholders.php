<?php
/*************************************
 * Placeholders
 *************************************/

/** LOAD SECTION **/
function lorem_ipsum_placeholder($length){
    $loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    $loremIpsum = substr($loremIpsum, 0, $length);
    $loremIpsum = trim($loremIpsum);
    $loremIpsum = rtrim($loremIpsum, '.');
    $loremIpsum = rtrim($loremIpsum, ',');
    $loremIpsum = $loremIpsum . '.';
    return $loremIpsum;
}