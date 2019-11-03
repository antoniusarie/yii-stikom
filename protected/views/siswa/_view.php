<?php
/* @var $this SiswaController */
/* @var $data Siswa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_siswa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->no_siswa), array('view', 'id'=>$data->no_siswa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_siswa')); ?>:</b>
	<?php echo CHtml::encode($data->nama_siswa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_kelas')); ?>:</b>
	<?php echo CHtml::encode($data->kode_kelas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jurusan')); ?>:</b>
	<?php echo CHtml::encode($data->jurusan); ?>
	<br />


</div>