<?php
/* @var $this SpeakerController */
/* @var $data Speaker */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('age')); ?>:</b>
	<?php echo CHtml::encode($data->age); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('occupation')); ?>:</b>
	<?php echo CHtml::encode($data->occupation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cv')); ?>:</b>
	<a href="<?php echo Yii::app()->request->baseUrl.'/docs/cv/'.$data->cv; ?>" ><?php echo CHtml::encode($data->cv); ?></a>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fb_link')); ?>:</b>
	<?php echo CHtml::encode($data->fb_link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tw_link')); ?>:</b>
	<?php echo CHtml::encode($data->tw_link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ln_link')); ?>:</b>
	<?php echo CHtml::encode($data->ln_link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prev_talk_url')); ?>:</b>
	<?php echo CHtml::encode($data->prev_talk_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prev_events')); ?>:</b>
	<?php echo CHtml::encode($data->prev_events); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fav_talks')); ?>:</b>
	<?php echo CHtml::encode($data->fav_talks); ?>
	<br />

	*/ ?>
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('video_url')); ?>:</b>
	<?php echo CHtml::encode($data->video_url); ?>
	<br />


</div>