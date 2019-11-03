<?php
/* @var $this SiswaController */
/* @var $model Siswa */

$this->breadcrumbs=array(
	'Siswa'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Siswa', 'url'=>array('index')),
	array('label'=>'Create Siswa', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#siswa-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Siswa</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'siswa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'no_siswa',
		'nama_siswa',
		array(
			'name'=>'images',
			'type'=>'html',
			'header'=>'Foto',
			'value'=>'CHtml::image("images/$data->images", "", array("width"=>70))',
		),
		array(
			'name'=>'namaGender',
			'type'=>'raw',
			'header'=>'Nama Gender',
			'value'=>'CHtml::encode($data->relasigender->gender)',
		),
		array(
			'name'=>'namaKelas',
			'type'=>'raw',
			'header'=>'Lokasi Kelas',
			'value'=>'CHtml::encode($data->relasikelas->keterangan)',
		),
		array(
			'name'=>'namaJurusan',
			'type'=>'raw',
			'header'=>'Nama Jurusan',
			'value'=>'CHtml::encode($data->relasijurusan->nama_jurusan)',
		),
		array(
			'name'=>'namaProdi',
			'type'=>'raw',
			'header'=>'Program Studi',
			'value'=>'CHtml::encode($data->relasiprodi->prodi)',
		),
		array(
			'class'=>'CButtonColumn',
			'header'=>'Tindakan'
		),
	),
)); ?>
