<?php

defined('_JEXEC') or die();

class NewsViewNews extends JViewLegacy { //Создаем класс вида как часть глобального класса JViewLegacy

	public function display($tpl=null){ //Передаем виду макет tpl по умолчанию default


		$this->addToolBar(); //Добавляем тулбар

		parent::display($tpl); //падгружаем файл display.php 

		$this->setDocument(); //добавим некие дополнительные значения в сформированный документ

	}

	protected function addToolBar(){ //Формируем панель управления страницы администратора

		JToolBarHelper::title(JText::_('COM_NEWS_MANAGER_NEWS')); //Формируем заголовк
		JToolBarHelper::addNew('item.add');//Создаю кнопку добавить новый элемент, где item это название sub контроллера который выполнит задачу а add - название задачи - function
		JToolBarHelper::editList('item.edit');

		JToolBarHelper::deleteList('','news.delete');
	}

	protected function setDocument(){
		
		$document = JFactory::getDocument();
		$document -> setTitle(JText::_('COM_NEWS_ADMINISTRATION'));
		//Кроме переопределения заголовка вкладки здесь можно подключать сторонние файлы нарисмер css Или JS Итп
	}

}