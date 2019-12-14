<?php
/* @var $this AkutansiController */
/* @var $model Akutansi */

$this->breadcrumbs=array(
	'Akutansi'=>array('index'),
	$model->nid,
);

$this->menu=array(
	array('label'=>'List Akutansi', 'url'=>array('index')),
	array('label'=>'Create Akutansi', 'url'=>array('create')),
	array('label'=>'Update Akutansi', 'url'=>array('update', 'id'=>$model->nid)),
	array('label'=>'Delete Akutansi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Akutansi', 'url'=>array('admin')),
);
?>

<h1>View Akutansi #<?php echo $model->nid; ?></h1>

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
		'nid',
		'keterangan',
		'tambah',
		'kurang',
		'sisa',
	),
)); ?>
