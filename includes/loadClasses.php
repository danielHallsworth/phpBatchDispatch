<?php

   spl_autoload_register('loadClassesFnc');

   function loadClassesFnc($className){
   	
   	$path     = 'model/';
   	$ext      = '.php';
   	$fullPath = $path . $className . $ext;

    include_once $fullPath;

  }