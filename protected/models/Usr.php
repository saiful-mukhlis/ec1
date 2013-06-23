<?php

/**
 * This is the model class for table "usr".
 *
 * The followings are the available columns in table 'usr':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $name
 * @property string $email
 * @property string $notelp
 * @property string $alamat
 * @property string $avatar
 * @property string $last_login
 * @property string $activation_code
 * @property string $created
 * @property integer $create_by
 * @property string $updated
 * @property integer $update_by
 * @property integer $status
 */
class Usr extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usr the static model class
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
		return 'usr';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password', 'required'),
			array('create_by, update_by, status', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>50),
			array('password, alamat, activation_code', 'length', 'max'=>255),
			array('name, email', 'length', 'max'=>100),
			array('notelp', 'length', 'max'=>30),
			array('avatar', 'length', 'max'=>200),
			array('last_login, created, updated', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, name, email, notelp, alamat, avatar, last_login, activation_code, created, create_by, updated, update_by, status', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'name' => 'Name',
			'email' => 'Email',
			'notelp' => 'Notelp',
			'alamat' => 'Alamat',
			'avatar' => 'Avatar',
			'last_login' => 'Last Login',
			'activation_code' => 'Activation Code',
			'created' => 'Created',
			'create_by' => 'Create By',
			'updated' => 'Updated',
			'update_by' => 'Update By',
			'status' => 'Status',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('notelp',$this->notelp,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('avatar',$this->avatar,true);
		$criteria->compare('last_login',$this->last_login,true);
		$criteria->compare('activation_code',$this->activation_code,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('create_by',$this->create_by);
		$criteria->compare('updated',$this->updated,true);
		$criteria->compare('update_by',$this->update_by);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}