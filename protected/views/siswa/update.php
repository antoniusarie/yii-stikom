<?php
/* @var $this SiswaController */
/* @var $model Siswa */

$this->breadcrumbs=array(
	'Siswas'=>array('index'),
	$model->no_siswa=>array('view','id'=>$model->no_siswa),
	'Update',
);

$this->menu=array(
	array('label'=>'List Siswa', 'url'=>array('index')),
	array('label'=>'Create Siswa', 'url'=>array('create')),
	array('label'=>'View Siswa', 'url'=>array('view', 'id'=>$model->no_siswa)),
	array('label'=>'Manage Siswa', 'url'=>array('admin')),
);
?>

<h1>Update Siswa <?php echo $model->no_siswa; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>