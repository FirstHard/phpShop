<?php
// General settings
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
define('ROOT', dirname(__FILE__));
define('HOME', $_SERVER['HTTP_HOST'] . $_SERVER["REQUEST_URI"]);
function coreClassLoader($classname) {
  $filename = ROOT . '/app/core/' . $classname .".php";
  include_once($filename);
}
spl_autoload_register('coreClassLoader');

$products = require_once(ROOT . '/app/config/db.php');
$quantities = require_once(ROOT . '/app/config/dbInStock.php');
$html = new TemplateRender('category', [ 'siteTitle' => 'The Shop', 'pageTitle' => 'Товары', 'showAside' => 1, 'products' => $products, 'quantities' => $quantities ], 'output');