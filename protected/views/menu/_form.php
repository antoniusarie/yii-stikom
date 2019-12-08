<?php
/* @var $this MenuController */
/* @var $model Menu */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'menu-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'label'); ?>
		<?php echo $form->textField($model,'label',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'label'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',array(
			'empty'=>'Pilih',
			'1'=>'Aktif',
			'0'=>'Nonaktif',
		)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'position'); ?>
		<?php echo $form->textField($model,'position'); ?>
		<?php echo $form->error($model,'position'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'icon'); ?>
		<?php echo $form->textField($model,'icon', array(
			'class'=>'iconpicker',
			'data-input-search'=>true,
			'data-placement'=>'bottomLeft',
			'placeholder'=>'Fontawesome Icon',
			'style'=>'cursor: pointer'
		)); ?>
		<span class="input-group-addon" id="sizing-addon2" style="cursor: pointer;">
			<i class="fas fa-font" id="font"></i>
		</span>
		<?php echo $form->error($model,'icon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'url'); ?>
		<br>
		<p><i><b>Catatan :</b></i></p>
		<h6>
			<i>Nama URL :</i> <span style="color:maroon">path-ke-folder-view</span><br>
			<i>Contoh :</i><br>
			<ol>
				<li><b><span style="color:maroon">#</span></b> <i>(default empty)</i></li>	
				<li><b><span style="color:maroon">static page</span></b> <i>(site/page&view=[page name])</i></li>	
				<li><b><span style="color:maroon">menu</span></b> <i>(menu -> page index)</i></li>	
				<li><b><span style="color:maroon">menu/admin</span></b> <i>(menu -> page admin)</i></span>	
			</ol>
		</h6>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('cols'=>60, 'rows'=>4, 'maxlength'=>255)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->