<?php

require_once 'Parsedown.php';

$parsedown = new Parsedown();

$text = file_get_contents('3-Operations/labs.md');

echo $text;

?>
