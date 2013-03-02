<?php
$this->pageTitle=Yii::app()->name . ' - Speakers Applcation';
?>
<section class="application main-container">			
	
	
	
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
		
		<!-- This part is where error apear when submitting 
		They will apear inside something like this
		<div id="speaker-form_es_" class="errorSummary"><p>Please fix the following input errors:</p>
		<ul>
			<li>The file "Amr Mohamed Youssef Draz_cvdocx" cannot be uploaded. Only files with these extensions are allowed: doc, docx, odt, txt, pdf.</li>
		</ul>
		</div>
		-->
		<?php echo $form->errorSummary($model); ?>

		<div class="row">
			<!-- basically prints out a label for the filed replace it with waht ever you want -->
			<label for="Speaker_name" class="required">Name <span class="required">*</span></label>
			<!-- This is the actual input filed the arry in the end can be considered the attribut of the tag -->
			<input size="60" maxlength="60" calss="input" name="Speaker[name]" id="Speaker_name" type="text" />
			<!-- shows the error for that filed remove it wif you want -->
			<?php echo $form->error($model,'name'); ?>
		</div>

		<div class="row">
			<label for="Speaker_age" class="required">Age <span class="required">*</span></label>			
			<input name="Speaker[age]" id="Speaker_age" type="text" />			
			<?php echo $form->error($model,'age'); ?>	
		</div>

		<div class="row">
			<label for="Speaker_occupation" class="required">Occupation <span class="required">*</span></label>
			<input size="60" maxlength="60" name="Speaker[occupation]" id="Speaker_occupation" type="text" />
			<?php echo $form->error($model,'occupation'); ?>
		</div>

		<div class="row">
			<label for="Speaker_phone" class="required">Phone <span class="required">*</span></label>
			<input size="15" maxlength="15" name="Speaker[phone]" id="Speaker_phone" type="text" />
			<?php echo $form->error($model,'phone'); ?>
		</div>

		<div class="row">
			<label for="Speaker_email" class="required">Email <span class="required">*</span></label>
			<input size="60" maxlength="70" name="Speaker[email]" id="Speaker_email" type="text" />
			<?php echo $form->error($model,'email'); ?>
		</div>

		<div class="row">
			<label for="Speaker_cv" class="required">C.V. <span class="required">*</span></label>
			<?php echo $form->fileField($model, 'cv') ; ?>
			<small>Only accepts: <b>doc,docx,odt,txt,pdf</b></small>
			<?php echo $form->error($model,'cv'); ?>			
		</div>

		<div class="row">
			<label for="Speaker_fb_link">Facebook</label>
			<input size="60" maxlength="120" name="Speaker[fb_link]" id="Speaker_fb_link" type="text" />
			<?php echo $form->error($model,'fb_link'); ?>	
		</div>

		<div class="row">
			<label for="Speaker_tw_link">Twitter</label>
			<input size="60" maxlength="120" name="Speaker[tw_link]" id="Speaker_tw_link" type="text" />
			<?php echo $form->error($model,'tw_link'); ?>	
		</div>

		<div class="row">
			<label for="Speaker_ln_link">Other</label>				
			<input size="60" maxlength="120" name="Speaker[ln_link]" id="Speaker_ln_link" type="text" />				
			<?php echo $form->error($model,'ln_link'); ?>	
		</div>

		<div class="row">
			<label for="Speaker_prev_talk_url">link to prev talk</label>	
			<input size="60" maxlength="120" name="Speaker[prev_talk_url]" id="Speaker_prev_talk_url" type="text" />
			<?php echo $form->error($model,'prev_talk_url'); ?>	
		</div>

		<div class="row">
			<label for="Speaker_prev_events" class="required">Events Attended <span class="required">*</span></label>
			<textarea rows="6" cols="50" name="Speaker[prev_events]" id="Speaker_prev_events"></textarea>
			<?php echo $form->error($model,'prev_events'); ?>	
		</div>

		<div class="row">
			<label for="Speaker_fav_talks" class="required">Favorit Talks <span class="required">*</span></label>
			<textarea rows="6" cols="50" name="Speaker[fav_talks]" id="Speaker_fav_talks"></textarea>
			<?php echo $form->error($model,'fav_talks'); ?>	
		</div>

		<div class="row">
			<label for="Speaker_video_url" class="required">Video Url <span class="required">*</span></label>		
			<input size="60" maxlength="120" name="Speaker[video_url]" id="Speaker_video_url" type="text" />				
			<?php echo $form->error($model,'video_url'); ?>	
		</div>

		<div class="row buttons">
			<input type="submit" name="yt0" value="Submit" />
		</div>

	
	<?php $this->endWidget(); ?><!--  end of form -->

</section>
