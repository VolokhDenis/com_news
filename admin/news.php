<?php 

defined('_JEXEC') or die();

$controller = JControllerLegacy::getInstance('News');//NewsController 
$input = Jfactory::getApplication()->input;

$controller ->execute();