<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $nama
 * @property string $email
 * @property string $role
 * @property string $created_by
 * @property string $updated_by
 * @property string $created_date
 * @property string $updated_date
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, role', 'required'),
			array('username', 'unique'),
			array('username, nama, email', 'length', 'max'=>100),
			array('password', 'length', 'max'=>200),
			array('role', 'length', 'max'=>20),
			array('created_by, updated_by', 'length', 'max'=>50),
			array('created_date, updated_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, nama, email, role, created_by, updated_by, created_date, updated_date', 'safe', 'on'=>'search'),
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
			'id' => 'User ID',
			'username' => 'Username',
			'password' => 'Password',
			'nama' => 'Name',
			'email' => 'Email',
			'role' => 'Role',
			'created_by' => 'Created By',
			'updated_by' => 'Updated By',
			'created_date' => 'Created Date',
			'updated_date' => 'Updated Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('role',$this->role,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('updated_by',$this->updated_by,true);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('updated_date',$this->updated_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
