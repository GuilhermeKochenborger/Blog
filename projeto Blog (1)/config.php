<?php

$mysql = new mysqli('localhost', 'root', 'Gui48772017!', 'blog');
$mysql->set_charset('utf8');

if ($mysql == FALSE) {
    echo "Erro na conexão";
}

?>