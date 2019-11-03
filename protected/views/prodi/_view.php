<?php
/* @var $this ProdiController */
/* @var $data Prodi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_prodi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_prodi), array('view', 'id'=>$data->kode_prodi)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prodi')); ?>:</b>
	<?php echo CHtml::encode($data->prodi); ?>
	<br />


</div>