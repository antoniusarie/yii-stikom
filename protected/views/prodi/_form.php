<?php
/* @var $this ProdiController */
/* @var $model Prodi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prodi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_prodi'); ?>
		<?php echo $form->textField($model,'kode_prodi',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'kode_prodi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prodi'); ?>
		<?php echo $form->textField($model,'prodi',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'prodi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->