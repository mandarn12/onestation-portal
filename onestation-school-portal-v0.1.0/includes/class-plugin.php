<?php
namespace OneStation;
class Plugin{public function run(){add_action('plugins_loaded',[$this,'init']);}public function init(){}}
