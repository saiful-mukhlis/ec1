<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property integer $id
 * @property string $name
 * @property string $title
 * @property string $image
 * @property string $alt_image
 * @property string $note_image
 * @property string $price
 * @property string $title_desc
 * @property string $desc
 * @property string $sort_desc
 */
class ProductExtDetail extends Product {
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public $categories;
	public $imageExist;
	public $pathImage;
	public $urlImage;
	public function getCategories(){
		if ($this->categories==null) {
			$this->categories =  Categoryproduct::model()->with('category')->findAllByAttributes(array('productid'=>$this->id));
		}
		return $this->categories;
	}
	public function isImageExist(){
		if ($this->image==null) {
			return null;
		}
		return file_exists($this->getPathImage());
	}
	public function getPathImage(){
		if ($this->pathImage==null) {
			$this->pathImage=Yii::app()->basePath.Yii::app()->params['pathImgProduct1'].$this->image;
		}
		return $this->pathImage;
	}
	public function getUrlImage($size){
		if ($this->urlImage==null) {
			$this->urlImage=Yii::app()->baseUrl.'/images/size/'.$size.Yii::app()->params['urlImgProduct1'].$this->image;
		}
		return $this->urlImage;
	}
}