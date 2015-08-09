<?php

defined('_JEXEC') or die;
 
class fotoalbumController extends JControllerLegacy
{
    /**
     * display task
     *
     * @param bool $cachable
     *
     * @return void
     */
    function display($cachable = false, $urlparams = Array())
    {	
		// Der Standardview wird gesetzt
		JRequest::setVar('view', JRequest::getCmd('view', 'fotoalbum'));
		
        // Die displaymethode der Elternklasse aufrufen
        parent::display($cachable, $urlparams);
    }
}