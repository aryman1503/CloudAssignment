<?php

require_once 'Parsedown.php';

$parsedown = new Parsedown();

$text = file_get_contents('2-Basics/labs.md');
echo $text;

?>
