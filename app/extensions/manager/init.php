<?php 
/* 
*      Robo Gallery     
*      Version: 2.8.8 - 29167
*      By Robosoft
*
*      Contact: https://robosoft.co/robogallery/ 
*      Created: 2015
*      Licensed under the GPLv2 license - http://opensource.org/licenses/gpl-2.0.php

 */

if ( ! defined( 'ABSPATH' ) ) exit;

include_once plugin_dir_path( __FILE__ ).'class.addons.php';

new rbsGalleryAddons( ROBO_GALLERY_TYPE_POST );