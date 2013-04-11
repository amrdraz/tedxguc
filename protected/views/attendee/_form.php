<?php
/* @var $this AttendeeController */
/* @var $model Attendee */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'attendee-form',
		'enableClientValidation' => true,
	    'clientOptions' => array(
	        'validateOnSubmit' => true,
	    ),
	    'htmlOptions'=>array(
	        'enctype'=>'multipart/form-data',
	    ),
	)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'middle_name'); ?>
		<?php echo $form->textField($model,'middle_name',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'middle_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birth_year'); ?>
		<p class="hint">eg. 1991</p>
		<?php echo $form->textField($model,'birth_year',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'birth_year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'home_address'); ?>
		<?php echo $form->textField($model,'home_address',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'home_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gucian'); ?>
		<?php echo $form->radioButtonList($model,'gucian',array('GUCian', 'Other'),array('separator'=>' ')); ?>
		<?php echo $form->textField($model,'gucian_other',array('size'=>30,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'gucian_other'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bus_number'); ?>
		<?php echo $form->textField($model,'bus_number'); ?>
		<?php echo $form->error($model,'bus_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'education_level'); ?><br>
		<?php echo $form->radioButtonList($model,'education_level',$model->educationLevelOptions,array('separator'=>'<br>')); ?>
		<?php echo $form->error($model,'education_level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'job_title'); ?>
		<?php echo $form->textField($model,'job_title',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'job_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tedx_info'); ?>
		<?php echo $form->textArea($model,'tedx_info',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tedx_info'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'how_many'); ?><br>
		<?php echo $form->radioButtonList($model,'how_many',$model->howManyOptions,array('separator'=>'<br>')); ?>
		<?php echo $form->error($model,'how_many'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'how_much'); ?><br>
		<?php echo $form->radioButtonList($model,'how_much',$model->howMuchOptions,array('separator'=>'<br>')); ?>
		<?php echo $form->error($model,'how_much'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'how_did'); ?><br>
		<?php echo $form->radioButtonList($model,'how_did',$model->howDidOptions,array('separator'=>'<br>')); ?>
		<?php echo $form->textField($model,'how_other',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'how_other'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'about_theme'); ?>
		<?php echo $form->textArea($model,'about_theme',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'about_theme'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'speaker_choice'); ?>
		<?php echo $form->textArea($model,'speaker_choice',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'speaker_choice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'excpect_talks'); ?><br>
		<?php echo $form->textField($model,'excpect_talks'); ?>
		<?php echo $form->error($model,'excpect_talks'); ?>
		<br>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'intresting_talk'); ?>
		<?php echo $form->textArea($model,'intresting_talk',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'intresting_talk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'waiting_list'); ?><br>
		<?php echo $form->radioButtonList($model,'waiting_list',array('Yes', 'No'),array('separator'=>' ')); ?>
		<?php echo $form->error($model,'waiting_list'); ?>
	</div>

	<div class="row buttons submit">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->