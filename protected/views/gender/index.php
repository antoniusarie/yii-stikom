<?php
/* @var $this GenderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gender',
);

$this->menu=array(
	array('label'=>'Create Gender', 'url'=>array('create')),
	array('label'=>'Manage Gender', 'url'=>array('admin')),
);
?>

<h1>Gender</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
