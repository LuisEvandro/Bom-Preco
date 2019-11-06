<?php

require 'config.php';

// funcao que carrega as classes automaticamente
function __autoload($class) {
    require LIBS . $class .".php";
}
// carrega o bootstrap - inicializador
$bootstrap = new Bootstrap();
$bootstrap->init();