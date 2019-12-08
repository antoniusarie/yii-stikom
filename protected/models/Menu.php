<?php

/**
 * This is the model class for table "menu".
 *
 * The followings are the available columns in table 'menu':
 * @property integer $menu_id
 * @property string $label
 * @property integer $status
 * @property integer $position
 * @property string $url
 * @property string $description
 * @property string $created_date
 * @property string $updated_date
 */
class Menu extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'menu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('label, url', 'required'),
			array('position', 'unique'),
			array('status, position', 'numerical', 'integerOnly'=>true),
			array('label, description', 'length', 'max'=>255),
			array('url, icon', 'length', 'max'=>128),
			array('created_date, updated_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('menu_id, label, status, position, url, icon, description, created_date, updated_date', 'safe', 'on'=>'search'),
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
			'menu_id' => 'Menu ID',
			'label' => 'Label',
			'status' => 'Status',
			'position' => 'Urutan',
			'url' => 'URL',
			'icon' => 'Icon',
			'description' => 'Deskripsi',
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

		$criteria->compare('menu_id',$this->menu_id);
		$criteria->compare('label',$this->label,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('position',$this->position);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('icon',$this->icon,true);
		$criteria->compare('description',$this->description,true);
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
	 * @return Menu the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
