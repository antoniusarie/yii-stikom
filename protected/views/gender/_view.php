<?php
/* @var $this GenderController */
/* @var $data Gender */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_gender')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_gender), array('view', 'id'=>$data->kode_gender)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />


</div>