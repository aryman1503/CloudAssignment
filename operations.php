<?php

require_once 'Parsedown.php';

$parsedown = new Parsedown();

$text = file_get_contents('H:\Aryman\Project\self\html\Cloud\1-Introduction\labs.md');

echo $text;

?>