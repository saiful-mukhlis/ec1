<?php
function smarty_function_css_file($params, &$smarty) {
	Yii::app ()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/'.$params['file']);
}