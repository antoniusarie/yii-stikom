<?php

/**
 * This is the model class for table "siswa".
 *
 * The followings are the available columns in table 'siswa':
 * @property string $no_siswa
 * @property string $nama_siswa
 * @property string $images
 * @property string $kode_gender
 * @property string $kode_kelas
 * @property string $jurusan
 * @property string $kode_prodi
 */
class Siswa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */

	public $namaKelas="";
	public $namaJurusan="";
	public $namaProdi="";
	public $namaGender="";

	public function tableName()
	{
		return 'siswa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('no_siswa, nama_siswa, kode_gender, kode_kelas, kode_prodi, jurusan', 'required'),
			array('no_siswa', 'unique'), // Duplicate - Existing record validation
			array('no_siswa', 'length', 'max'=>4),
			array('nama_siswa', 'length', 'max'=>50),
			array('images', 'file', 'types'=>'jpg, gif, png', 'allowEmpty'=>false, 'except'=>'insert, update'), 
			array('kode_gender, kode_kelas, kode_prodi', 'length', 'max'=>2),
			array('jurusan', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('no_siswa, nama_siswa, images, kode_gender, kode_kelas, jurusan, kode_prodi', 'safe', 'on'=>'search'),
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
			// Parameter: [Relation Table - Model Class],  [field-name This Table]
			'relasijurusan'=> array(self::BELONGS_TO, 'Jurusan', 'jurusan'), 
			'relasiprodi'=> array(self::BELONGS_TO, 'Prodi', 'kode_prodi'),
			'relasikelas'=> array(self::BELONGS_TO, 'Kelas', 'kode_kelas'),
			'relasigender'=> array(self::BELONGS_TO, 'Gender', 'kode_gender'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'no_siswa' => 'No Siswa',
			'nama_siswa' => 'Nama Siswa',
			'images' => 'Foto',
			'kode_gender' => 'Gender',
			'kode_kelas' => 'Kelas',
			'jurusan' => 'Jurusan',
			'kode_prodi' => 'Program Studi',
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

		$criteria->compare('no_siswa',$this->no_siswa,true);
		$criteria->compare('nama_siswa',$this->nama_siswa,true);
		$criteria->compare('kode_gender',$this->kode_gender,true);
		$criteria->compare('kode_kelas',$this->kode_kelas,true);
		$criteria->compare('jurusan',$this->jurusan,true);
		$criteria->compare('kode_prodi',$this->kode_prodi,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Siswa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
