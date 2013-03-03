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
			<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>60)); ?>
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
			<?php echo $form->textField($model,'occupation',array('size'=>60,'maxlength'=>60)); ?>
			<?php echo $form->error($model,'occupation'); ?>
		</div>

		<div class="row">
			<label for="Speaker_phone" class="required">Phone <span class="required">*</span></label>
			<?php echo $form->textField($model,'phone',array('size'=>15,'maxlength'=>15)); ?>
			<?php echo $form->error($model,'phone'); ?>
		</div>

		<div class="row">
			<label for="Speaker_email" class="required">Email <span class="required">*</span></label>
			<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>70)); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>

		<div class="row">
			<label for="Speaker_cv" class="required">C.V. <span class="required">*</span></label>
			<?php echo $form->fileField($model, 'cv') ; ?>
			<small>Only accepts: <b>doc,docx,odt,txt,pdf</b></small>
			<?php echo $form->error($model,'cv'); ?>			
		</div>

		<hr/>
		
		<h4 id="previousExperiences">General Info</h4>

		<div class="row">
			<label for="Speaker_fb_link">Facebook</label>
		<?php echo $form->textField($model,'fb_link',array('size'=>60,'maxlength'=>120)); ?>
			<?php echo $form->error($model,'fb_link'); ?>	
		</div>

		<div class="row">
			<label for="Speaker_tw_link">Twitter</label>
		<?php echo $form->textField($model,'tw_link',array('size'=>60,'maxlength'=>120)); ?>
			<?php echo $form->error($model,'tw_link'); ?>	
		</div>

		<div class="row">
			<p class="hint">Something else you might want to tell us about, Blog, Social media etc...</p>
			<label for="Speaker_ln_link">Other</label>				
			<?php echo $form->textField($model,'ln_link',array('size'=>60,'maxlength'=>120)); ?>				
			<?php echo $form->error($model,'ln_link'); ?>	
		</div>

		<div class="row">
			
			<p class="hint">
				 YouTube link of previous experiences (if there were any)
			</p>
			<label for="Speaker_prev_talk_url">Link to Previous Talk</label>	
			<?php echo $form->textField($model,'prev_talk_url',array('size'=>60,'maxlength'=>120)); ?>
			<?php echo $form->error($model,'prev_talk_url'); ?>	
		</div>

		<div class="row">
			<p class="hint">
				Have you ever attended/ participated in any TEDx Events before:
				If yes, state your favorite, and briefly explain why.
			</p>
			<label for="Speaker_prev_events">Events Attended</label>
			<?php echo $form->textArea($model,'prev_events',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'prev_events'); ?>	
		</div>

		<div class="row">
			<p class="hint">
				List two of your favorite TED talk titles, and state the reason for liking them.
			</p>
			<label for="Speaker_fav_talks" class="required">Favourite Talks <span class="required">*</span></label>
			<?php echo $form->textArea($model,'fav_talks',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'fav_talks'); ?>	
		</div>

		<div class="row">
			<p class="hint">
				To let us know more about you, please include a video (Vimeo or Youtube link between 4 to 8 minutes maximum) answering the following questions:
				<ol>
					<li>1. Title of your talk.</li>
					<li>2. Brief description of your talk.</li>
					<li>3. How long do you expect your talk to be?</li>
					<li>4. Link between your talk and our theme.</li>
					<li>5. Why do you think your idea is worth spreading?</li>
					<li>6. Who do you aim to impact/ motivate in your talk?</li>
					<li>7. Do you believe you can change people’s lives with your talk? 
					<br>Explain briefly.<br><br></li>
				</ol>
			</p>
			<label for="Speaker_video_url" class="required">Video Url <span class="required">*</span></label>		
			<?php echo $form->textField($model,'video_url',array('size'=>60,'maxlength'=>120)); ?>
			<?php echo $form->error($model,'video_url'); ?>	
		</div>
		
		<p class="hint terms">I have read and agree to the <a href="#guidelines"/>guidelines</a></p>

		<div class="row buttons submit">
			<input type="submit" name="yt0" value="Submit" />
		</div>

	
	<?php $this->endWidget(); ?><!--  end of form -->
	
	
		
		
	
		</div>
		
		<div class="speakerFormText guidelines">
			<div class="speakerFormTextContainer" id="guidelines">
				<h3>Guidelines</h3>
				<div class="left">
					&nbsp;
				</div>
				<div class="right">
					<h4>Selection</h4> 
					<h5>TEDx Organizers are responsible for procuring and handling their own speakers. TED staff do not help identify or secure speakers. TEDx organizers cannot speak at their own TEDx events.<br><br></h5>
					
					<h4>Payment</h4>
					<h5>TEDx events may never pay speakers.<br><br></h5>
					
					<h4>Sponsorship</h4>
					<h5>Speakers may not sponsor any portion of your TEDx event, in-kind or otherwise. Sponsors of your event cannot be speakers.<br><br></h5>
					
					<h4>Duration</h4>
					<h5>No talk can exceed 18 minutes in length.<br><br></h5>
					
					<h4>Multi-topical and Multidisciplinary</h4>
					<h5>TEDx events must feature a diversity of speakers from across several disciplines that address a variety of topics. These topics should not fall under a single subject.<br><br></h5>
					
					<h4>Programming</h4>
					<h5>Up to 75% of your program can consist of original speakers. 25 percent of your program should feature TEDTalks that have been featured on TED.com<br><br></h5>
					
					<h4>Presentations</h4>
					<h5>Every talk's content must be in compliance with copyright law. Speakers must inform you beforehand of any third-party material that will be used in their presentations and seek written permissions to copyrighted materials when applicable. TED cannot assist with this process or act as a consultant on individual cases.<br><br></h5>
					
					<h4>Content</h4>
					<h5>Speakers must tell a story or argue for an idea. They may not use the TED stage to sell products, promote themselves or businesses. Every talk's content must be original and give credit where appropriate. Speakers cannot plagiarize or impersonate other persons, living or dead.
					<br><br>
					Speakers must be able to confirm the claims presented in every talk -- TED and TEDx are exceptional stages for showcasing advances in science, and we can only stay that way if the claims presented in our talks can stand up to scrutiny from the scientific community. TED is also not the right platform for talks with an inflammatory political or religious agenda, nor polarizing “us vs them” language. If Talks fail to meet the standards above, TED reserves the right to insist on their removal.<br><br></h5>
					
					<h4>Speaker release</h4>
					<h5>Everyone who appears onstage must sign the TEDx Speaker Release form.<br><br></h5>
					
					<h4>TEDxTalks videos</h4>
					<h5>TEDx event teams must upload videos of every talk from their event to the TEDxTalks YouTube channel (and only the TEDxTalks YouTube channel) unless the content is in violation of the above rules. If an organizer chooses to withhold a talk, they are fully responsible for informing TEDx staff and then for communicating the reasoning of their actions to the speakers.</h5>
				</div>
			</div>
		</div>
		
</section>
