<?php
/* @var $this SpeakerController */
/* @var $model Speaker */
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
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'age'); ?>
		<?php echo $form->textField($model,'age'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'occupation'); ?>
		<?php echo $form->textField($model,'occupation',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>70)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cv'); ?>
		<?php echo $form->textField($model,'cv',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fb_link'); ?>
		<?php echo $form->textField($model,'fb_link',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tw_link'); ?>
		<?php echo $form->textField($model,'tw_link',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ln_link'); ?>
		<?php echo $form->textField($model,'ln_link',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prev_talk_url'); ?>
		<?php echo $form->textField($model,'prev_talk_url',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prev_events'); ?>
		<?php echo $form->textArea($model,'prev_events',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fav_talks'); ?>
		<?php echo $form->textArea($model,'fav_talks',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'video_url'); ?>
		<?php echo $form->textField($model,'video_url',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->