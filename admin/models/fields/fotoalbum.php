<?php

defined('_JEXEC') or die;

jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');
 
class JFormFieldFotoalbum extends JFormFieldList
{
    /**
     * The field type.
     *
     * @var string
     */
    protected $type = 'fotoalbum';
 
    /**
     * Method to get a list of options for a list input.
     *
     * @return array An array of JHtml options.
     */
    protected function getOptions()
    {
		
		$options = parent::getOptions();
        return $options;
    }
}