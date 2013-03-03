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
				<h5>April 19th</h5>
			</div>
			<div class="right">
				<p>Do you want to become a TEDx speaker? <br>
				Do you have an idea that can change someone’s life? <br>
				Are you waiting for a platform to encourage uncovering your thoughts? 
				<br><br>
				 Well, then it’s just about time that you start preparing, for NOW is your time to shine! TEDxGUC is currently searching for inspiring Synergizers that want to spread something about the theme. Synergizers see the whole as greater than the sum of its parts. They seek for unity and connection. They share and accept. They believe in the impossible and they can change the world! <br> If you are a Synergizer, then do not hesitate to kindly fill in the TEDxGUC Speakers’ Application Form, and await our kind reply.</p>
				 <br><br>
				 <h4>Application Process</h4>
				 <br>
				 <h5>Applicants will get filtered based on their application.<br><br>
				 
				 	Then there will be Interviews, followed by a screening process.<br><br>
				 	
				 	You will be asked to sign the TEDx Speaker Release form.<br><br>
				 	
				 	The TEDxGUC team will take care to prepare and assist the accepted speakers with their presentation.<br><br>
				 </h5>
				 <br>
				 <p>Best of luck for all the Synergizers applying out there!</p>
			</div>
		</div>
	</div>
	
	<div class="SpeakerFormTriangle"></div>
	
	<div class="speakerForm">
	
	<hr/>
	
	<h3>Speaker Application</h3>
	
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
		
		<br>
		
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
		
		<hr/>

		<h4 id="personalInformation">Personal Info</h4>

		<div class="row">
			<!-- basically prints out a label for the filed replace it with waht ever you want -->
			<label for="Speaker_name" class="required">Name <span class="required">*</span></label>
			<!-- This is the actual input filed the arry in the end can be considered the attribut of the tag -->
			<input size="60" maxlength="60" class="input" name="Speaker[name]" id="Speaker_name" type="text" />
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

		<hr/>
		
		<h4 id="previousExperiences">Previous Experiences</h4>

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
	
	
		
		
	
		</div>
		
		<div class="speakerFormText guidelines">
			<div class="speakerFormTextContainer">
				<h3>Guidelines</h3>
				<div class="left">
					<h4>Our Theme</h4>
					<h5>Synergizers<br><br></h5>
					<h4>Date of Event</h4>
					<h5>April 19th</h5>
				</div>
				<div class="right">
					<p>Do you want to become a TEDx speaker? <br>
					Do you have an idea that can change someone’s life? <br>
					Are you waiting for a platform to encourage uncovering your thoughts? 
					<br><br>
					 Well, then it’s just about time that you start preparing, for NOW is your time to shine! TEDxGUC is currently searching for inspiring Synergizers that want to spread something about the theme. Synergizers see the whole as greater than the sum of its parts. They seek for unity and connection. They share and accept. They believe in the impossible and they can change the world! <br> If you are a Synergizer, then do not hesitate to kindly fill in the TEDxGUC Speakers’ Application Form, and await our kind reply.</p>
					 <br><br>
					 <h4>Application Process</h4>
					 <br>
					 <h5>Applicants will get filtered based on their application.<br><br>
					 
					 	Then there will be Interviews, followed by a screening process.<br><br>
					 	
					 	You will be asked to sign the TEDx Speaker Release form.<br><br>
					 	
					 	The TEDxGUC team will take care to prepare and assist the accepted speakers with their presentation.<br><br>
					 </h5>
					 <br>
					 <p>Best of luck for all the Synergizers applying out there!</p>
				</div>
			</div>
		</div>
		
</section>
