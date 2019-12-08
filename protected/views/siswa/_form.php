<?php
/* @var $this SiswaController */
/* @var $model Siswa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'siswa-form',
	'htmlOptions' => array(
		'enctype' => 'multipart/form-data',
	),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'no_siswa'); ?>
		<?php echo $form->textField($model,'no_siswa',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'no_siswa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_siswa'); ?>
		<?php echo $form->textField($model,'nama_siswa',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_siswa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textArea($model,'alamat',array('rows'=>3,'cols'=>50)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'images'); ?>
		<?php echo CHtml::activeFileField($model, 'images'); ?>
		<?php echo $form->error($model,'images'); ?>
		<br>
		<?php if($model->isNewRecord!='1'){ 
			 echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$model->images,"images",array("width"=>200));
		} ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_gender'); ?>
		<?php echo $form->dropDownList($model,'kode_gender',CHtml::listData(Gender::model()->findAll(
			array('order'=>'kode_gender asc')), 'kode_gender', 'gender'),
			array('empty'=>'Silahkan Pilih', 'class'=>'form-control', 'value'=>''));
		?>
		<?php echo $form->error($model,'kode_gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_kelas'); ?>
		<?php echo $form->dropDownList($model,'kode_kelas',CHtml::listData(Kelas::model()->findAll(
			array('order'=>'kode asc')), 'kode', 'keterangan'),
			array('empty'=>'Silahkan Pilih', 'class'=>'form-control'));
		?>
		<?php echo $form->error($model,'kode_kelas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jurusan'); ?>
		<?php echo $form->dropDownList($model,'jurusan',CHtml::listData(Jurusan::model()->findAll(
			array('order'=>'kode_jurusan asc')), 'kode_jurusan', 'nama_jurusan'),
			array('empty'=>'Silahkan Pilih', 'class'=>'form-control'));
		?>
		<?php echo $form->error($model,'jurusan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_prodi'); ?>
		<?php echo $form->dropDownList($model,'kode_prodi',CHtml::listData(Prodi::model()->findAll(
			array('order'=>'kode_prodi asc')), 'kode_prodi', 'prodi'),
			array('empty'=>'Silahkan Pilih', 'class'=>'form-control'));
		?>
		<?php echo $form->error($model,'kode_prodi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->