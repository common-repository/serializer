<?php
/*
Plugin Name: Serializer
Plugin URI: http://www.scriptonite.net 
Description: Allows you to have serialization for your Autoplay Media Studio Applications though wordpress.  Autoplay Media Studio is available from Indigorose.com || Plugin Copyright 2011 <a href="http://www.whereyoursolutionis.com">Innovative Solutions</a>
Author: Scriptonite 
Version: 1.0.3
Author URI: http://www.scriptonite.net  
 */
 
require(ABSPATH . 'wp-content/plugins/serializer/functions.php');  
require(ABSPATH . 'wp-content/plugins/serializer/register.php'); 
register_activation_hook(__FILE__,'install_serializer');


add_action('plugins_loaded',create_function('','global $serialization_meta_instance; $serialization_meta_instance = new serialization_meta();'));
?>