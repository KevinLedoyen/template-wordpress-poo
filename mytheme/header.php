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
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<title><?php wp_title(); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ) ?>/assets/bootstrap/css/bootstrap.min.css">


</head>
<body <?php body_class(); ?>>

<?php 
wp_nav_menu(array('theme_location' => 'main_menu'));
?>