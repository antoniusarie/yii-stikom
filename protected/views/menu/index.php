<?php
/* @var $this MenuController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Menu',
);

$this->menu=array(
	array('label'=>'Create Menu', 'url'=>array('create')),
	array('label'=>'Manage Menu', 'url'=>array('admin')),
);
?>

<h1>Menu</h1>

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

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
