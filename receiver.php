<?php

if (!defined('IN_IA')) {
	exit('Access Denied');
}


require IA_ROOT . '/addons/hunter_mall/version.php';
require IA_ROOT . '/addons/hunter_mall/defines.php';
require hunter_mall_INC . 'functions.php';
require hunter_mall_INC . 'receiver.php';
class hunter_mallModuleReceiver extends Receiver
{
	public function receive()
	{
		parent::receive();
	}
}


?>