<?php
/* @var $this MemberController */
/* @var $model Member */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'member-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array(
        'enctype'=>'multipart/form-data',
    ),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php
	        $Labels = $model->attributeLabels();
	        echo $form->labelEx($model, 'img_file') ;
	        echo $model->img;
	        echo $form->fileField($model, 'img_file') ;
	        // this is where you'll find the file types wrrapped inside a small tag
	        echo " <small>Only accepts: <b>" . $Labels['image_types'] . "</b></small>";
	        echo $form->error($model, 'img_file');
        ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'role'); ?>
		<?php echo $form->textField($model,'role',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'role'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'major'); ?>
		<?php echo $form->textField($model,'major',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'major'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'skills'); ?>
		<?php echo $form->textArea($model,'skills',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'skills'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'talents'); ?>
		<?php echo $form->textArea($model,'talents',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'talents'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'achievments'); ?>
		<?php echo $form->textArea($model,'achievments',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'achievments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'why'); ?>
		<?php echo $form->textArea($model,'why',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'why'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'past_experience'); ?>
		<?php echo $form->textArea($model,'past_experience',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'past_experience'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'facebook'); ?>
		<?php echo $form->textField($model,'facebook',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'facebook'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'website'); ?>
		<?php echo $form->textField($model,'website',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'website'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->