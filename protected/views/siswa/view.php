<?php
/* @var $this SiswaController */
/* @var $model Siswa */

$this->breadcrumbs=array(
	'Siswa'=>array('index'),
	$model->no_siswa,
);

$this->menu=array(
	array('label'=>'List Siswa', 'url'=>array('index')),
	array('label'=>'Create Siswa', 'url'=>array('create')),
	array('label'=>'Update Siswa', 'url'=>array('update', 'id'=>$model->no_siswa)),
	array('label'=>'Delete Siswa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->no_siswa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Siswa', 'url'=>array('admin')),
);
?>

<h1>View Siswa #<?php echo $model->no_siswa; ?></h1><br>
<img src="<?php echo Yii::app()->request->baseUrl.'/images/'.$model->images; ?>" width="140">
<hr>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'no_siswa',
		'nama_siswa',
		'kode_gender',
		'kode_kelas',
		'jurusan',
		'kode_prodi',
	),
)); ?>
