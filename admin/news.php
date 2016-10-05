<?php 

defined('_JEXEC') or die();

$controller = JControllerLegacy::getInstance('News');//NewsController 
$input = JFactory::getApplication()->input;

$controller ->execute($input->get('task','display'));

$controller->redirect();