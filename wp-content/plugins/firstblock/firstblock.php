<?php
/**
 * Plugin Name: My first block
 * Plugin URI: maruf.za786@gmail.com 
 * Description: Add custom block for guttenberg editor
 * Author: Morshed Maruf
 * Author URI: maruf.za786@gmail.com
 * Version: 1.0.0
 */

 function blocks_course_firstblock_init(){
    register_block_type_from_metadata( __DIR__ );
 }

 add_action( "init", "blocks_course_firstblock_init" );