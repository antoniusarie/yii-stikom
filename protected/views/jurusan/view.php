<?php
/* @var $this JurusanController */
/* @var $model Jurusan */

$this->breadcrumbs=array(
	'Jurusans'=>array('index'),
	$model->kode_jurusan,
);

$this->menu=array(
	array('label'=>'List Jurusan', 'url'=>array('index')),
	array('label'=>'Create Jurusan', 'url'=>array('create')),
	array('label'=>'Update Jurusan', 'url'=>array('update', 'id'=>$model->kode_jurusan)),
	array('label'=>'Delete Jurusan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_jurusan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jurusan', 'url'=>array('admin')),
);
?>

<h1>View Jurusan #<?php echo $model->kode_jurusan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_jurusan',
		'nama_jurusan',
	),
)); ?>
