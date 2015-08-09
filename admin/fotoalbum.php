<?php
 
defined('_JEXEC') or die;
 
$controller = JControllerLegacy::getInstance('fotoalbum');
 
$task = JFactory::getApplication()->input->getCmd('task');

$controller->execute($task);
 
$controller->redirect();
