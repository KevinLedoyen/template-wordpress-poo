<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */


require "/core/Autoloader.php";
\Core\Autoloader::register();

use Core\MyClass;
use Core\Html\OtherClass;


new MyClass;
new OtherClass;


?>
