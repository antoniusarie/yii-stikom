<?php
/* @var $this JurusanController */
/* @var $model Jurusan */

$this->breadcrumbs=array(
	'Jurusan'=>array('index'),
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

<div class="clearfix">
<?php 
$this->widget('zii.widgets.CMenu', array(
	'items' => array(
		array(
			'label' => '<i class="fas fa-cogs"></i> Operations',
			'url' => '#',
			'linkOptions'=> array(
				'class' => 'btn btn-default dropdown-toggle',
				'data-toggle' => 'dropdown',
			),
			'itemOptions' => array('class'=>'dropdown user'),
			'items' => $this->menu,
		),
	),
	'encodeLabel' => false,
	'htmlOptions' => array(
		'class'=>'nav pull-right',
	),
	'submenuHtmlOptions' => array(
		'class' => 'dropdown-menu pull-right',
		)
	));
?>	
</div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kode_jurusan',
		'nama_jurusan',
	),
)); ?>
