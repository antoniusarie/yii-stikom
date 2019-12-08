<?php

class SiswaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				// 'users'=>array('@'),
				'roles'=>array('user')
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				// 'users'=>array('@'),
				'roles'=>array('admin')
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				// 'users'=>array('admin'),
				'roles'=>array('admin')
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Siswa;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Siswa']))
		{

			$model->attributes = $_POST['Siswa'];
			$uploadFile = CUploadedFile::getInstance($model,'images');

			// Validation if file is empty fill with = default.png
			if(!empty($uploadFile)){
			     $random = rand(0,9999);
			     $time = time();  
			     $fileName = $random."-".$time.".".$uploadFile->getExtensionName();  // random number + time + ext
			 } else {
			     $fileName = 'default.png';	
			 }

			$model->images = $fileName;
			
			if($model->save()){
				if(!empty($uploadFile))
				{		
					$uploadFile->saveAs(dirname(Yii::app()->request->scriptFile).'/images/'.$fileName);
				}
				// $this->redirect(array('view','id'=>$model->no_siswa));
				$this->redirect(array('admin')); // redirect ke page admin
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model = $this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Siswa']))
		{
			$_POST['Siswa']['images'] = $model->images;
			$model->attributes = $_POST['Siswa'];
			$uploadFile = CUploadedFile::getInstance($model,'images');

			if($model->images == "default.png") {
				$random = rand(0,9999);
				$time = time();  
				$fileName = $random."-".$time.".".$uploadFile->getExtensionName();
				$model->images = $fileName; // jika file yg lama adalah default.png maka nama file baru di random 
			} else {
				$fileName = $model->images; // jika tidak, nama file baru disamakan dengan nama file lama / overwrite existing 
			}
			
			if($model->save()){
				if(!empty($uploadFile)) 
				{
					$uploadFile->saveAs(dirname(Yii::app()->request->scriptFile).'/images/'.$fileName);
				} 
				// $this->redirect(array('view','id'=>$model->no_siswa));
				$this->redirect(array('admin'));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Siswa');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Siswa('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Siswa']))
			$model->attributes=$_GET['Siswa'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Siswa the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Siswa::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Siswa $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='siswa-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
