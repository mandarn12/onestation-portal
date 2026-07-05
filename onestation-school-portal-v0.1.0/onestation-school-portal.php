<?php
/** Plugin Name: OneStation School Portal */
defined('ABSPATH')||exit;
require_once __DIR__.'/includes/class-plugin.php';
(new OneStation\Plugin())->run();
