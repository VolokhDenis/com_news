<?php

defined('_JEXEC') or die();

class NewsViewItem extends JViewLegacy {

	protected $form;
	protected $item;


	public function display($tpl=null){ 

		$this-> form = $this ->get('Form');//getForm обращение к модели
		$this-> item = $this ->get('Item');

		$this->addToolBar();

		parent::display($tpl); 

		$this->setDocument();


	}

	protected function addToolBar(){ //Формируем панель управления страницы добавления Item

		JToolBarHelper::title(JText::_('COM_NEWS_MANAGER_ITEM_ADD')); //Формируем заголовк
		JToolBarHelper::save('item.save');
		JToolBarHelper::cancel('item.cancel');

	}

	protected function setDocument(){
		
		$document = JFactory::getDocument();
		$document -> setTitle(JText::_('COM_NEWS_ADMINISTRATION'));
		//Кроме переопределения заголовка вкладки здесь можно подключать сторонние файлы нарисмер css Или JS Итп
	}




}