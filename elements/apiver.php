<?php defined('_JEXEC') or die();

JFormHelper::loadFieldClass('list');
jimport('joomla.form.formfield');

class JFormFieldApiver extends JFormFieldList{
	var $type = 'apiver';
	function getOptions() {
		
		$doc = JFactory::getDocument();
		$doc->addStyleSheet( JURI::root().'plugins'.DS.'vmshipment'.DS.'nova_pochta'.DS.'css'.DS.'np_set_admin.css');
		$doc->addScript(JURI::root().'plugins'.DS .'vmshipment'.DS.'nova_pochta'.DS.'js'.DS.'np_set_admin.js');
		
		$arrayApiver = array ('1'=>'2.0' , '0'=>'1.0');
		foreach ($arrayApiver as $apiver => $v) {
			$options[] = JHtml::_('select.option', $apiver, vmText::_(strtoupper($v) ) );
		}
		return $options;
    }
}//