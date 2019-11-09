<?php
/* @var $this SiswaController */
/* @var $model Siswa */

$this->breadcrumbs=array(
	'Siswa'=>array('index'),
	$model->no_siswa=>array('view','id'=>$model->no_siswa),
	'Update',
);

$this->menu=array(
	array('label'=>'List Siswa', 'url'=>array('index')),
	array('label'=>'Create Siswa', 'url'=>array('create')),
	array('label'=>'View Siswa', 'url'=>array('view', 'id'=>$model->no_siswa)),
	array('label'=>'Manage Siswa', 'url'=>array('admin')),
);
?>

<h1>Update Siswa <?php echo $model->no_siswa; ?></h1>

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