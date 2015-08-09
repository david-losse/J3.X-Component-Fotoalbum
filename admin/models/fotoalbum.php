<?php
 
// Den direkten Aufruf verbieten
defined('_JEXEC') or die;
 
jimport('joomla.application.component.modellist');

 
class FotoalbumModelFotoalbum extends JModelList
{
	protected $allItems = null;
		
		
		public function getEditForm($data = array(), $loadData = true) 
        {
				$data = JFactory::getApplication()->input->getVar('formdata', array());;
                
				foreach($data as $id => $key) {
				$row = $this->getAll((int) $id);
				$row = $row[0];
				
				$form = $this->loadForm(
                                        'com_fotoalbum.fotoalbum',
                                        'fotoalbum_edit',
                                        array('control' => 'jform', 'load_data' => $loadData
                                       ));
				
				$form->setValue("id", null, (int) $id);
				
				break; //sorgt dafür das nur der erste Wert ausgeführt wird.
				}

                return $form;
        }
		
    public function getItem($id = null)
    {
      $db = JFactory::getDBO();
	  $db->setUTF(); 
      
      $query = $db->getQuery(true)
	  ->select('felderliste')
	  ->from('#__fotoalbum'); 	
	  if(!is_null($id)) $query->where('id = "'.(int) $id.'"');
	  
      $db->setQuery($query);
	  
	  try {
        $db->execute();
      } catch (RuntimeException $e) {
        JError::raiseError(500, $e->getMessage());
      }
	  
	  $this->allItems = $db->loadObjectList();
	  	  
      return $this->allItems;
    }
	 public function setUpdateData($jform) {
	  echo "<pre>";print_r($jform);echo "</pre>";
	  exit;
	 }
}