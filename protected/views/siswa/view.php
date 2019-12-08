<?php
/* @var $this SiswaController */
/* @var $model Siswa */

$this->breadcrumbs=array(
	'Siswa'=>array('index'),
	$model->no_siswa,
);

$this->menu=array(
	array('label'=>'List Siswa', 'url'=>array('index')),
	array('label'=>'Create Siswa', 'url'=>array('create')),
	array('label'=>'Update Siswa', 'url'=>array('update', 'id'=>$model->no_siswa)),
	array('label'=>'Delete Siswa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->no_siswa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Siswa', 'url'=>array('admin')),
);
?>

<h1>View Siswa #<?php echo $model->no_siswa; ?></h1><br>

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
		'no_siswa',
		'nama_siswa',
		array(
			'type' => 'raw',
			'label' => $model->getAttributeLabel('images'),
			'value' => '<img src="'. Yii::app()->request->baseUrl.'/images/'.$model->images .'" width="140">',
			'visible' =>!Yii::app()->user->isGuest && Yii::app()->user->checkAccess('admin')
		),
		array(
			'label' => $model->getAttributeLabel('alamat'),
			'value' => $model->alamat,
			'visible' =>!Yii::app()->user->isGuest && Yii::app()->user->checkAccess('admin')
		),
		array(
			'label' => $model->getAttributeLabel('gender'),
			'value' => $model->relasigender->gender,
			'visible' =>!Yii::app()->user->isGuest && Yii::app()->user->checkAccess('admin')
		),
		array(
			'label' => $model->getAttributeLabel('kode_kelas'),
			'value' => $model->relasikelas->keterangan,
			'visible' =>!Yii::app()->user->isGuest && Yii::app()->user->checkAccess('admin')
		),
		array(
			'label' => $model->getAttributeLabel('jurusan'),
			'value' => $model->relasijurusan->nama_jurusan,
		),
		array(
			'label' => $model->getAttributeLabel('kode_prodi'),
			'value' => $model->relasiprodi->prodi
		)
	),
)); ?>
