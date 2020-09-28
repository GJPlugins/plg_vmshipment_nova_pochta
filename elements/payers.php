<?php defined('_JEXEC') or die();
if (!class_exists('np_param'))
    require(JPATH_ROOT . DS . 'plugins' . DS . 'vmshipment' . DS .'nova_pochta'. DS .'nova_pochta'.DS .'np_param.php');


//  элемент выбора варианта доставки
class JFormFieldPayers extends JFormFieldList {
    var $type = 'payers';
    function getOptions()  {
		$np_param =new np_param();
		$payers = $np_param->ceshHendler('payer');
		if($payers['action']=='write'){
			unset($payers['action']);
			$np_param->ceshWrite('payer',$payers);	
		}
		foreach ($payers as $k => $v) {
			$options[] = JHtml::_('select.option', $k, vmText::_(strtoupper($v) ) );
		}
		return $options;		
    }
}