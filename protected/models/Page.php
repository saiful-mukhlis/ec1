<?php
class Page extends CModel {
	public $u;	// user
	public $m;	// menu
	public $avatar;
	public function __construct() {
	}
	public function attributeNames() {
		return array_keys ( $this->getMetaData ()->columns );
	}
}