<?php
/* @var $this AttendeeController */
/* @var $data Attendee */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('event_id')); ?>:</b>
	<?php echo CHtml::encode($data->event_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('middle_name')); ?>:</b>
	<?php echo CHtml::encode($data->middle_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birth_year')); ?>:</b>
	<?php echo CHtml::encode($data->birth_year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('home_address')); ?>:</b>
	<?php echo CHtml::encode($data->home_address); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('gucian')); ?>:</b>
	<?php echo CHtml::encode($data->gucian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gucian_other')); ?>:</b>
	<?php echo CHtml::encode($data->gucian_other); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bus_number')); ?>:</b>
	<?php echo CHtml::encode($data->bus_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('education_level')); ?>:</b>
	<?php echo CHtml::encode($data->education_level); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_title')); ?>:</b>
	<?php echo CHtml::encode($data->job_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tedx_info')); ?>:</b>
	<?php echo CHtml::encode($data->tedx_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('how_many')); ?>:</b>
	<?php echo CHtml::encode($data->how_many); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('how_much')); ?>:</b>
	<?php echo CHtml::encode($data->how_much); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('how_did')); ?>:</b>
	<?php echo CHtml::encode($data->how_did); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('how_other')); ?>:</b>
	<?php echo CHtml::encode($data->how_other); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('about_theme')); ?>:</b>
	<?php echo CHtml::encode($data->about_theme); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('speaker_choice')); ?>:</b>
	<?php echo CHtml::encode($data->speaker_choice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('excpect_talks')); ?>:</b>
	<?php echo CHtml::encode($data->excpect_talks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intresting_talk')); ?>:</b>
	<?php echo CHtml::encode($data->intresting_talk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waiting_list')); ?>:</b>
	<?php echo CHtml::encode($data->waiting_list); ?>
	<br />

	*/ ?>

</div>