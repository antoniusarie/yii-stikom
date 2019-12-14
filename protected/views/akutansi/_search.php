<?php
/* @var $this AkutansiController */
/* @var $model Akutansi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nid'); ?>
		<?php echo $form->textField($model,'nid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keterangan'); ?>
		<?php echo $form->textField($model,'keterangan',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tambah'); ?>
		<?php echo $form->textField($model,'tambah'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kurang'); ?>
		<?php echo $form->textField($model,'kurang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sisa'); ?>
		<?php echo $form->textField($model,'sisa'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->