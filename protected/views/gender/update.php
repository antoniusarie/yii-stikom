<?php
/* @var $this GenderController */
/* @var $model Gender */

$this->breadcrumbs=array(
	'Gender'=>array('index'),
	$model->kode_gender=>array('view','id'=>$model->kode_gender),
	'Update',
);

$this->menu=array(
	array('label'=>'List Gender', 'url'=>array('index')),
	array('label'=>'Create Gender', 'url'=>array('create')),
	array('label'=>'View Gender', 'url'=>array('view', 'id'=>$model->kode_gender)),
	array('label'=>'Manage Gender', 'url'=>array('admin')),
);
?>

<h1>Update Gender <?php echo $model->kode_gender; ?></h1>

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