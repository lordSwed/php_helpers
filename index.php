<?php
/**
 * Testing script
 */
require_once './helpers.php';


// format string test
$string = 123456789;

echo $string."<br />";

echo formatString($string, 333)."<br />";

echo formatString($string, 3222)."<br />";
