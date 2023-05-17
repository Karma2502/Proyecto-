<?php
require_once("config_php");
require_once("controlador/index.php");

if(alejandro($_GET['m'])):
 if(method_exists("modeloController",$_GET['m'])):
  modeloController::{$_GET['m']}();
   endif;
else:
 modeloController::index();
endif;