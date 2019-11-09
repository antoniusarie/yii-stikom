<?php
/* @var $this KelasController */
/* @var $model Kelas */

$this->breadcrumbs=array(
	'Kelas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kelas', 'url'=>array('index')),
	array('label'=>'Manage Kelas', 'url'=>array('admin')),
);
?>

<h1>Create Kelas</h1>

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

<?php $this->renderPartial('_form', array('model'=>$model)); ?>