<?php

if (!defined('IN_IA')) {
	exit('Access Denied');
}


require_once IA_ROOT . '/addons/hunter_mall/version.php';
require_once IA_ROOT . '/addons/hunter_mall/defines.php';
require_once hunter_mall_INC . 'functions.php';
class hunter_mallModule extends WeModule
{
	public function welcomeDisplay()
	{
		header('location: ' . webUrl());
		exit();
	}
}


?>