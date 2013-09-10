<?php
/* @var $this TalkController */
/* @var $model Talk */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'talk-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'url_id'); ?>
		<?php echo $form->textField($model,'url_id',array('size'=>12,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'url_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'summary'); ?>
		<?php echo $form->textArea($model,'summary',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'summary'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'speaker_summary'); ?>
		<?php echo $form->textArea($model,'speaker_summary',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'speaker_summary'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'speakers'); ?>
		<?php echo $form->dropDownList($model,'speakers',$model->speakersOptions, array('id'=>'speakerSelect','class'=>'select2', 'multiple'=>true)); ?>
		<?php echo $form->error($model,'speakers'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->