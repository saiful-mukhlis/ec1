<?php
class ProductTmp extends CFormModel {
	public $categories ;
	public function rules() {
		return array (
				array (
						'categories',
						'safe' 
				) 
		);
	}
}