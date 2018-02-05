<?php

if (!defined('IN_IA')) {
	exit('Access Denied');
}


require_once IA_ROOT . '/addons/hunter_mall/version.php';
require_once IA_ROOT . '/addons/hunter_mall/defines.php';
require_once hunter_mall_INC . 'functions.php';
require_once hunter_mall_INC . 'processor.php';
require_once hunter_mall_INC . 'plugin_model.php';
require_once hunter_mall_INC . 'com_model.php';
class hunter_mallModuleProcessor extends Processor
{
	public function respond()
	{
		return parent::respond();
	}
}


?>