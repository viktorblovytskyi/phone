<?php
/* @var $this NumbersController */
/* @var $model Numbers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'numbers-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->telField($model, 'phone', array('size'=>14, 'maxlength'=>14, 'minlength'=>6)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'owner'); ?>
		<?php echo $form->dropDownList($model,'owner', array('individual'=>'Individual','entity'=>'Entity'), array('onclick'=>'hideElement()','id'=>'owner')); ?>
		<?php echo $form->error($model,'owner'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>4, 'cols'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entity_name', array('style'=>'display:none;','id'=>'name_label')); ?>
		<?php echo $form->textArea($model,'entity_name',array('rows'=>4, 'cols'=>50, 'hidden'=>true,'id'=>'name_area')); ?>
		<?php echo $form->error($model,'entity_name'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">
	hideElement();
	/**
	 * This function displays the field depending on the type.
	 */
	function hideElement(){
		var type 		= document.getElementById('owner').value,
			name_area 	= document.getElementById('name_area'),
			name_label 	= document.getElementById('name_label');
		if(type == 'entity'){
			name_area.hidden = false;
			name_label.style.display = 'block';
		}else{
			name_area.hidden = true;
			name_label.style.display = 'none';
		}
	}
</script>