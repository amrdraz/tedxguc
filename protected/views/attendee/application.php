<?php
$this->pageTitle=Yii::app()->name . ' - Speakers Applcation';
?>
<section class="application main-container">			
	
	<div class="speakerFormText">
		<div class="speakerFormTextContainer">
			<h3>TED<sup>x</sup>GUC Speaker’s Journey</h3>
			<div class="left">
				<h4>Our Theme</h4>
				<h5>Synergizers<br><br></h5>
				<h4>Date of Event</h4>
				<h5>April 26th</h5>
			</div>
			<div class="right">
				<p>
					To all GUC students, alumni, teacher assistants, and professors,
					<br><br>
					To all non-GUCians who want to witness this happening,
					<br><br>
					TEDxGUC is pleasantly inviting you to attend its first event ever; SYNERGIZERS. Now YOU have the chance to meet and connect with a community of people from a wide range of fields who, with us, aim to provide an inspirational coverage of Ideas Worth Spreading.
					<br><br>
					Join us on Friday the 26th of April in the GUC examination halls. Fill in the below application, and find us in the platform area to ask about your invitation.
					<br><br>
					Please note that filling this application does not guarantee that you will find an available invitation.<br><br>
			</div>
		</div>
	</div>
	
	<div class="SpeakerFormTriangle"></div>
	
	<div class="speakerForm">
	
	<hr/>
	
	<h3>Attendee Application</h3>
	
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

	<br>
		
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
		<sapn class="hint">eg. 1991</span>
		<?php echo $form->textField($model,'birth_year',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'birth_year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'home_address'); ?>
		<?php echo $form->textField($model,'home_address',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'home_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gucian'); ?><br>
		<?php echo $form->radioButtonList($model,'gucian',array('GUCian', 'Other'),array('separator'=>'<br>')); ?>
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
		<?php echo $form->textArea($model,'tedx_info',array()); ?>
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
		<?php echo $form->textArea($model,'about_theme',array()); ?>
		<?php echo $form->error($model,'about_theme'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'speaker_choice'); ?>
		<?php echo $form->textArea($model,'speaker_choice',array()); ?>
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
		<?php echo $form->textArea($model,'intresting_talk',array()); ?>
		<?php echo $form->error($model,'intresting_talk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'waiting_list'); ?><br>
		<?php echo $form->radioButtonList($model,'waiting_list',array('Yes', 'No'),array('separator'=>' ')); ?>
		<?php echo $form->error($model,'waiting_list'); ?>
	</div>

	<br>

	<div class="row buttons submit">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
	
		
		
	
		</div>
		
		<div class="speakerFormText guidelines">
			<div class="speakerFormTextContainer" id="guidelines">
				<h3>&nbsp;</h3>
				<div class="left">
					&nbsp;
				</div>
				<div class="right">
					&nbsp;
				</div>
			</div>
		</div>
		
</section>
