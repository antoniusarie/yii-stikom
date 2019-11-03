<?php
/* @var $this ProdiController */
/* @var $model Prodi */

$this->breadcrumbs=array(
	'Prodi'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Prodi', 'url'=>array('index')),
	array('label'=>'Create Prodi', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#prodi-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Program Studi</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'prodi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'kode_prodi',
		'prodi',
		array(
			'class'=>'CButtonColumn',
			'header'=>'Tindakan'
		),
	),
)); ?>
