<?php
/* @var $this SiswaController */
/* @var $model Siswa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'no_siswa'); ?>
		<?php echo $form->textField($model,'no_siswa',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_siswa'); ?>
		<?php echo $form->textField($model,'nama_siswa',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kode_kelas'); ?>
		<?php echo $form->textField($model,'kode_kelas',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jurusan'); ?>
		<?php echo $form->textField($model,'jurusan',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->