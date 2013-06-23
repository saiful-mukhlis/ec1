<?php

/**
 * This is the model class for table "category_product".
 *
 * The followings are the available columns in table 'category_product':
 * @property integer $id
 * @property integer $categoryid
 * @property integer $productid
 *
 * The followings are the available model relations:
 * @property Product $product
 * @property Category $category
 */
class Categoryproduct extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Categoryproduct the static model class
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
		return 'category_product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('categoryid, productid', 'required'),
			array('categoryid, productid', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, categoryid, productid', 'safe', 'on'=>'search'),
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
			'product' => array(self::BELONGS_TO, 'Product', 'productid'),
			'category' => array(self::BELONGS_TO, 'Category', 'categoryid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'categoryid' => 'Categoryid',
			'productid' => 'Productid',
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
		$criteria->compare('categoryid',$this->categoryid);
		$criteria->compare('productid',$this->productid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}