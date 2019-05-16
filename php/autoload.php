<?php

function autoload($class) {
    $cartelle = array(
          dirname( dirname(__FILE__) ).'/',
          dirname( dirname(__FILE__) ).'/php/'
    );

    foreach($cartelle as $cartella) {
      if (file_exists($cartella.$class . '.php')) {
          include_once $cartella.$class . '.php'; 
        } 
    }
}

spl_autoload_register('autoload');