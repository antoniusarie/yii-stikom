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

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
