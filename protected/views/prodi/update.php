<?php
/* @var $this ProdiController */
/* @var $model Prodi */

$this->breadcrumbs=array(
	'Prodis'=>array('index'),
	$model->kode_prodi=>array('view','id'=>$model->kode_prodi),
	'Update',
);

$this->menu=array(
	array('label'=>'List Prodi', 'url'=>array('index')),
	array('label'=>'Create Prodi', 'url'=>array('create')),
	array('label'=>'View Prodi', 'url'=>array('view', 'id'=>$model->kode_prodi)),
	array('label'=>'Manage Prodi', 'url'=>array('admin')),
);
?>

<h1>Update Prodi <?php echo $model->kode_prodi; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>