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
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $meta_description
 *
 * The followings are the available model relations:
 * @property CategoryProduct[] $categoryProducts
 */
class Product extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('name', 'length', 'max'=>50),
			array('title, image, alt_image, note_image, title_desc', 'length', 'max'=>100),
			array('price', 'length', 'max'=>10),
			array('sort_desc, meta_title, meta_keywords, meta_description', 'length', 'max'=>255),
			array('desc', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, title, image, alt_image, note_image, price, title_desc, desc, sort_desc, meta_title, meta_keywords, meta_description', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'categoryProducts' => array(self::HAS_MANY, 'CategoryProduct', 'productid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'title' => 'Title',
			'image' => 'Image',
			'alt_image' => 'Alt Image',
			'note_image' => 'Note Image',
			'price' => 'Price',
			'title_desc' => 'Title Desc',
			'desc' => 'Desc',
			'sort_desc' => 'Sort Desc',
			'meta_title' => 'Meta Title',
			'meta_keywords' => 'Meta Keywords',
			'meta_description' => 'Meta Description',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('alt_image',$this->alt_image,true);
		$criteria->compare('note_image',$this->note_image,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('title_desc',$this->title_desc,true);
		$criteria->compare('desc',$this->desc,true);
		$criteria->compare('sort_desc',$this->sort_desc,true);
		$criteria->compare('meta_title',$this->meta_title,true);
		$criteria->compare('meta_keywords',$this->meta_keywords,true);
		$criteria->compare('meta_description',$this->meta_description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}