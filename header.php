<?php
/**
 * Header template.
 * 
 * @package Zenith
 */
?>

<!doctype html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <title>Wordpress Theme</title>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>This is the Header</header>