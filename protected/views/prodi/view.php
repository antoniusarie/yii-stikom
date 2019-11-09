<?php
/* @var $this ProdiController */
/* @var $model Prodi */

$this->breadcrumbs=array(
	'Prodi'=>array('index'),
	$model->kode_prodi,
);

$this->menu=array(
	array('label'=>'List Prodi', 'url'=>array('index')),
	array('label'=>'Create Prodi', 'url'=>array('create')),
	array('label'=>'Update Prodi', 'url'=>array('update', 'id'=>$model->kode_prodi)),
	array('label'=>'Delete Prodi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kode_prodi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Prodi', 'url'=>array('admin')),
);
?>

<h1>View Prodi #<?php echo $model->kode_prodi; ?></h1>

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
		'kode_prodi',
		'prodi',
	),
)); ?>
