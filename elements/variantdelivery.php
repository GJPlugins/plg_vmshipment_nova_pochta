<?php defined('_JEXEC') or die();
if (!class_exists('np_param'))
    require(JPATH_ROOT . DS . 'plugins' . DS . 'vmshipment' . DS .'nova_pochta'. DS .'nova_pochta'.DS .'np_param.php');


//  элемент выбора варианта доставки
class JFormFieldVariantDelivery extends JFormFieldList {
    var $type = 'variantdelivery';
    function getOptions()  {
		$np_param =new np_param();
		$serviceTypes = $np_param->ceshHendler('serviceTypes');
		 foreach ($serviceTypes as $k => $v) {
			$options[] = JHtml::_('select.option', $k, vmText::_(strtoupper($v) ) );
		}
		return $options;
		
    }
}