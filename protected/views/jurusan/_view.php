<?php
/* @var $this JurusanController */
/* @var $data Jurusan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_jurusan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_jurusan), array('view', 'id'=>$data->kode_jurusan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_jurusan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_jurusan); ?>
	<br />


</div>