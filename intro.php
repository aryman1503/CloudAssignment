<?php

require_once 'Parsedown.php';

$parsedown = new Parsedown();

$text = file_get_contents('1-Introduction/intro.md');

echo $text;

?>
