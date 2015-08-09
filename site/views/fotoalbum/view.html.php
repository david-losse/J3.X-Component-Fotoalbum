<?php
defined('_JEXEC') or die;

jimport('joomla.application.component.view');

class FotoalbumViewFotoalbum extends JViewLegacy {
  
  protected $items;
  
  function display($tpl = null) {
    $this->items = $this->get('Items');
    parent::display($tpl);
  }
}