<?php
/* @var $this AttendeeController */
/* @var $model Attendee */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'event_id'); ?>
		<?php echo $form->textField($model,'event_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'middle_name'); ?>
		<?php echo $form->textField($model,'middle_name',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'birth_year'); ?>
		<?php echo $form->textField($model,'birth_year',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'home_address'); ?>
		<?php echo $form->textField($model,'home_address',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gucian'); ?>
		<?php echo $form->textField($model,'gucian'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gucian_other'); ?>
		<?php echo $form->textField($model,'gucian_other',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bus_number'); ?>
		<?php echo $form->textField($model,'bus_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'education_level'); ?>
		<?php echo $form->textField($model,'education_level'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'job_title'); ?>
		<?php echo $form->textField($model,'job_title',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tedx_info'); ?>
		<?php echo $form->textArea($model,'tedx_info',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'how_many'); ?>
		<?php echo $form->textField($model,'how_many'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'how_much'); ?>
		<?php echo $form->textField($model,'how_much'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'how_did'); ?>
		<?php echo $form->textField($model,'how_did'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'how_other'); ?>
		<?php echo $form->textField($model,'how_other',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'about_theme'); ?>
		<?php echo $form->textArea($model,'about_theme',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'speaker_choice'); ?>
		<?php echo $form->textArea($model,'speaker_choice',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'excpect_talks'); ?>
		<?php echo $form->textField($model,'excpect_talks'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'intresting_talk'); ?>
		<?php echo $form->textArea($model,'intresting_talk',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'waiting_list'); ?>
		<?php echo $form->textField($model,'waiting_list'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->