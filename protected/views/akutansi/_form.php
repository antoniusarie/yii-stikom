<?php
/* @var $this AkutansiController */
/* @var $model Akutansi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'akutansi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'keterangan'); ?>
		<?php echo $form->textField($model,'keterangan',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'keterangan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tambah'); ?>
		<?php echo $form->textField($model,'tambah'); ?>
		<?php echo $form->error($model,'tambah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kurang'); ?>
		<?php echo $form->textField($model,'kurang'); ?>
		<?php echo $form->error($model,'kurang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sisa'); ?>
		<?php echo $form->textField($model,'sisa'); ?>
		<?php echo $form->error($model,'sisa'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->