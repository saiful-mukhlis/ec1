<?php
function smarty_function_script($params, &$smarty) {
	Yii::app ()->clientScript->registerScript($params['name'], $params['script'],CClientScript::POS_END);
}