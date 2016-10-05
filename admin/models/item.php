<?php

defined('_JEXEC') or die();

class NewsModelItem extends JModelAdmin{

    public function getForm($data=array(), $loadData=true){
		$form = $this->loadForm(
			'com_news.item',
			'item',
			array(
				'control'=>'jform',
				'load_data'=>$loadData
				)
			);

		if(empty($form)){
			return FALSE;

		}
		
	return $form;

	}	

	public function getItem(){
		return TRUE;

	}

}
