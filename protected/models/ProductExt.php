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
class ProductExt extends Product
{
	public $img;
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('name', 'length', 'max'=>50),
			array('title, image, alt_image, note_image, title_desc', 'length', 'max'=>100),
			array('price', 'length', 'max'=>10),
			array('sort_desc', 'length', 'max'=>255),
			array('desc', 'safe'),
			array('img','vimg'),
			array('img', 'file', 'types'=>'jpg, gif, png', 'allowEmpty'=>true, 'maxSize'=>100000000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, title, image, alt_image, note_image, price, title_desc, desc, sort_desc', 'safe', 'on'=>'search'),
		);
	}
	
	public function attributeLabels()
	{
		return array(
				'id' => 'ID',
				'name' => 'Name',
				'title' => 'Title',
				'image' => 'Image',
				'img' => 'Image',
				'alt_image' => 'Alt Image',
				'note_image' => 'Note Image',
				'price' => 'Price',
				'title_desc' => 'Title Desc',
				'desc' => 'Desc',
				'sort_desc' => 'Sort Desc',
		);
	}

	public function vimg($attribute,$params)
	{
		if ($this->img==null) {
			return true;
		}
		$minWidth=100;
		$minHeight=100;
		$file = $this->img;
	
		if (!$file instanceof CUploadedFile) {
			$file = CUploadedFile::getInstance($this, $attribute);
			if (null === $file)
				return true;
		}
	
	
		$size = getimagesize($file->tempName);
		if (false === $size) {
			$message = Yii::t('app', 'File cannot be uploaded because it is not a valid image file');
			$this->addError( $attribute, $message);
			return;
		}
	
		if (!empty($minWidth) && $size[0] < $minWidth) {
			$message = Yii::t('app', 'Image is too small: image  width should be not less than {minWidth} pixels', array('{minWidth}' => $minWidth));
			$this->addError( $attribute, $message);
		}
	
		if (!empty($minHeight) && $size[1] < $minHeight) {
			$message = Yii::t('app', 'Image is too small: image  height should be not less than {minHeight} pixels', array('{minHeight}' => $minHeight));
			$this->addError( $attribute, $message);
		}
	}
	public function sanitize_filename( $str, $relative_path = FALSE)
	{
		$bad = array(
				'../', '<!--' , '-->', '<', '>' ,
				"'", '"' , '&', '$', '#' ,
				'{', '}' , '[', ']', '=' ,
				';', '?' , '%20', '%22',
				'%3c',      // <
				'%253c',    // <
				'%3e',      // >
				'%0e',      // >
				'%28',      // (
				'%29',      // )
				'%2528',    // (
				'%26',      // &
				'%24',      // $
				'%3f',      // ?
				'%3b',      // ;
				'%3d',       // =
				' ',
				'----',
				'---',
				'--'
		);
		 
		if ( ! $relative_path)
		{
			$bad[] = './';
			$bad[] = '/';
		}
		 
		$str = $this->remove_invisible_characters($str, FALSE);
		return stripslashes( str_replace($bad, '-' , $str ));
	}
	function remove_invisible_characters ($str , $url_encoded = TRUE)
	{
		$non_displayables = array();
		 
		// every control character except newline (dec 10),
		// carriage return (dec 13) and horizontal tab (dec 09)
		if ($url_encoded)
		{
			$non_displayables[] = '/%0[0-8bcef]/';  // url encoded 00-08, 11, 12, 14, 15
			$non_displayables[] = '/%1[0-9a-f]/';   // url encoded 16-31
		}
		 
		$non_displayables[] = '/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]+/S';   // 00-08, 11, 12, 14-31, 127
		 
		do
		{
			$str = preg_replace($non_displayables, '', $str, - 1, $count);
		}
		while ($count);
		 
		return $str;
	}
	
	
}