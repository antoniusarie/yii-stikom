<?php
/* @var $this KelasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kelas',
);

$this->menu=array(
	array('label'=>'Create Kelas', 'url'=>array('create')),
	array('label'=>'Manage Kelas', 'url'=>array('admin')),
);
?>

<h1>Kelas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
