<?php
defined('_JEXEC') or die;
	
jimport('joomla.application.component.controller');

$controller = JControllerLegacy::getInstance('fotoalbum');

$input = JFactory::getApplication()->input;

$controller->execute($input->get('task'));