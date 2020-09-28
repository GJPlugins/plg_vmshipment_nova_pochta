<?php 
define( '_JEXEC', 1 );
header('Content-type: application/json');
define( 'DS', DIRECTORY_SEPARATOR );
define('JPATH_BASE', preg_replace('|plugins.vmshipment.nova_pochta.nova_pochta.tmpl.np.php|i', '', __FILE__));


if (!class_exists('np_param'))
  echo   require(JPATH_BASE  . 'plugins' . DS . 'vmshipment' . DS .'nova_pochta'. DS .'nova_pochta'.DS .'np_param.php');








 ?>


<div id="blankNp">
	<input name="city" />
    <input name="wHause" />
</div>