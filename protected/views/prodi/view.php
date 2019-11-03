<?php
/* @var $this ProdiController */
/* @var $model Prodi */

$this->breadcrumbs=array(
	'Prodis'=>array('index'),
	$model->kode_prodi,
);

$this->menu=array(
	array('label'=>'List Prodi', 'url'=>array('index')),
	array('label'=>'Create Prodi', 'url'=>array('create')),
	array('label'=>'Update Prodi', 'url'=>array('update', 'id'=>$model->kode_prodi)),
	array('label'=>'Delete Prodi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_prodi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Prodi', 'url'=>array('admin')),
);
?>

<h1>View Prodi #<?php echo $model->kode_prodi; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_prodi',
		'prodi',
	),
)); ?>
