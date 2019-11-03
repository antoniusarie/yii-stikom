<?php
/* @var $this JurusanController */
/* @var $model Jurusan */

$this->breadcrumbs=array(
	'Jurusan'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Jurusan', 'url'=>array('index')),
	array('label'=>'Create Jurusan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#jurusan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Jurusan</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'jurusan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'kode_jurusan',
		'nama_jurusan',
		array(
			'class'=>'CButtonColumn',
			'header'=>'Tindakan'
		),
	),
)); ?>
