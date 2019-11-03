<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->breadcrumbs=array(
	'Menu'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Menu', 'url'=>array('index')),
	array('label'=>'Create Menu', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#menu-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Menu</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'menu-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'menu_id',
		'label',
		'status',
		'position',
		'url',
		'description',
		/*
		'created_date',
		'updated_date',
		*/
		array(
			'class'=>'CButtonColumn',
			'header'=>'Tindakan'
		),
	),
)); ?>

<hr>
<p><i><b>Info Status :</b></i></p>
<ul>
	<li><b><span style="color:maroon">1</span></b> = <i>Aktif</i></li>	
	<li><b><span style="color:maroon">0</span></b> = <i>Non Aktif</i></span></li>	
</ul>
</h6>
