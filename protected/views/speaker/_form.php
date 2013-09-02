<?php
/* @var $this SpeakerController */
/* @var $model Speaker */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'speaker-form',
	'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
    'htmlOptions'=>array(
        'enctype'=>'multipart/form-data',
    ),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
	<p>Only Name is required in the Admin View</p>
	
	<br>
	
	<!-- This part is where error appear when submitting 
	They will apear inside something like this
	<div id="speaker-form_es_" class="errorSummary"><p>Please fix the following input errors:</p>
	<ul>
		<li>The file "Amr Mohamed Youssef Draz_cvdocx" cannot be uploaded. Only files with these extensions are allowed: doc, docx, odt, txt, pdf.</li>
	</ul>
	</div>
	-->
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<!-- basically prints out a label for the field replace it with what ever you want -->
		<?php echo $form->labelEx($model,'name'); ?>

		<!-- This is the actual input field the array in the end can be considered the attribute of the tag -->
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>60, 'class'=>'input')); ?>

		<!-- shows the error for that filed remove it if you want -->
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'summary'); ?>
		<?php echo $form->textArea($model,'summary',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'summary'); ?>
	</div>

	<div class="row">
		<?php
	        $Labels = $model->attributeLabels();
	        echo $form->labelEx($model, 'img') ;
	        echo $form->fileField($model, 'img_file') ;
	        // this is where you'll find the file types wrrapped inside a small tag
	        echo " <small>Only accepts: <b>" . $Labels['image_types'] . "</b></small>";
	        echo $form->error($model, 'img_file');
        ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'event_id'); ?>
		<?php echo $form->dropDownList($model,'event_id',$model->eventsOptions, array('id'=>'eventSelect','class'=>'select2', 'empty'=>'--Does not Belong ot an Event--')); ?>
		<?php echo $form->error($model,'event_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'age'); ?>
		<?php echo $form->textField($model,'age'); ?>
		<?php echo $form->error($model,'age'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'occupation'); ?>
		<?php echo $form->textField($model,'occupation',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'occupation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php
	        $Labels = $model->attributeLabels();
	        echo $form->labelEx($model, 'cv') ;
	        echo $model->cv;
	        echo $form->fileField($model, 'cv_file') ;
	        // this is where you'll find the file types wrrapped inside a small tag
	        echo " <small>Only accepts: <b>" . $Labels['file_types'] . "</b></small>";
	        echo $form->error($model, 'cv_file');
        ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fb_link'); ?>
		<?php echo $form->textField($model,'fb_link',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'fb_link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tw_link'); ?>
		<?php echo $form->textField($model,'tw_link',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'tw_link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ln_link'); ?>
		<?php echo $form->textField($model,'ln_link',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'ln_link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prev_talk_url'); ?>
		<?php echo $form->textField($model,'prev_talk_url',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'prev_talk_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prev_events'); ?>
		<?php echo $form->textArea($model,'prev_events',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'prev_events'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fav_talks'); ?>
		<?php echo $form->textArea($model,'fav_talks',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'fav_talks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'video_url'); ?>
		<?php echo $form->textField($model,'video_url',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'video_url'); ?>
	</div>
		

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->