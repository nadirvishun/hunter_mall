<?php
if (!defined('IN_IA')) 
{
	exit('Access Denied');
}
define('hunter_mall_DEBUG', false);
!defined('hunter_mall_PATH') && define('hunter_mall_PATH', IA_ROOT . '/addons/hunter_mall/');
!defined('hunter_mall_CORE') && define('hunter_mall_CORE', hunter_mall_PATH . 'core/');
!defined('hunter_mall_DATA') && define('hunter_mall_DATA', hunter_mall_PATH . 'data/');
!defined('hunter_mall_VENDOR') && define('hunter_mall_VENDOR', hunter_mall_PATH . 'vendor/');
!defined('hunter_mall_CORE_WEB') && define('hunter_mall_CORE_WEB', hunter_mall_CORE . 'web/');
!defined('hunter_mall_CORE_MOBILE') && define('hunter_mall_CORE_MOBILE', hunter_mall_CORE . 'mobile/');
!defined('hunter_mall_CORE_SYSTEM') && define('hunter_mall_CORE_SYSTEM', hunter_mall_CORE . 'system/');
!defined('hunter_mall_PLUGIN') && define('hunter_mall_PLUGIN', hunter_mall_PATH . 'plugin/');
!defined('hunter_mall_PROCESSOR') && define('hunter_mall_PROCESSOR', hunter_mall_CORE . 'processor/');
!defined('hunter_mall_INC') && define('hunter_mall_INC', hunter_mall_CORE . 'inc/');
!defined('hunter_mall_URL') && define('hunter_mall_URL', $_W['siteroot'] . 'addons/hunter_mall/');
!defined('hunter_mall_TASK_URL') && define('hunter_mall_TASK_URL', $_W['siteroot'] . 'addons/hunter_mall/core/task/');
!defined('hunter_mall_LOCAL') && define('hunter_mall_LOCAL', '../addons/hunter_mall/');
!defined('hunter_mall_STATIC') && define('hunter_mall_STATIC', hunter_mall_URL . 'static/');
!defined('hunter_mall_PREFIX') && define('hunter_mall_PREFIX', 'ewei_shop_');
define('hunter_mall_PLACEHOLDER', '../addons/hunter_mall/static/images/placeholder.png');
?>