<?php
/* @var $this AkutansiController */
/* @var $data Akutansi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nid), array('view', 'id'=>$data->nid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tambah')); ?>:</b>
	<?php echo CHtml::encode($data->tambah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kurang')); ?>:</b>
	<?php echo CHtml::encode($data->kurang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sisa')); ?>:</b>
	<?php echo CHtml::encode($data->sisa); ?>
	<br />


</div>