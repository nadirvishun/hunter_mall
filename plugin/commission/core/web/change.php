<?php
if (!defined('IN_IA')) 
{
	exit('Access Denied');
}
class Change_EweiShopV2Page extends PluginWebPage 
{
	public function main() 
	{

		global $_GPC;
		global $_W;
		if($_GPC['action']=='pass'){
			pdo_update('ewei_shop_withdraw',array('status'=>1));
		}
		elseif($_GPC['action']=='refuse'){
			pdo_update('ewei_shop_withdraw',array('status'=>2));
		}	


		if($_GPC['status']==1){
			$data=pdo_fetchall('select * from ims_ewei_shop_withdraw where status=:status',array(':status'=>0));
			$msg['header']='待审核申请';
		}
		elseif($_GPC['status']==2){
			$data=pdo_fetchall('select * from ims_ewei_shop_withdraw where status!=:status',array(':status'=>0));
			$msg['header']='已审核申请';
		}

		
		
		include $this->template();
	}
}