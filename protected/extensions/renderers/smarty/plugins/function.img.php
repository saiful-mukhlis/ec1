<?php
function smarty_function_img($params, &$smarty) {
	return CHtml::image ( Yii::app()->baseUrl.$params ['src'], $params ['alt'] );
}