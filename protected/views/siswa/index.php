<?php
/* @var $this SiswaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Siswa',
);

$this->menu=array(
	array('label'=>'Create Siswa', 'url'=>array('create')),
	array('label'=>'Manage Siswa', 'url'=>array('admin')),
);
?>

<h1>Siswa</h1>

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
