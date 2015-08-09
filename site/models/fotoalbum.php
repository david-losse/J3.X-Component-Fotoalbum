<?php
defined('_JEXEC') or die;

jimport('joomla.application.component.modellist');

class FotoalbumModelFotoalbum extends JModelList
{
  protected function getItems() {
    $db = $this->getDbo();
    $query = $db->getQuery(true);
    $query->from('#__fotoalbum_fotos');
    $query->select('*');
    return $query;
  }
}