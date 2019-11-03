<?php
/* @var $this JurusanController */
/* @var $model Jurusan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jurusan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_jurusan'); ?>
		<?php echo $form->textField($model,'kode_jurusan',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'kode_jurusan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_jurusan'); ?>
		<?php echo $form->textField($model,'nama_jurusan',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_jurusan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->