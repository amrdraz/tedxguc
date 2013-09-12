<?php
/* @var $this SpeakerController */
/* @var $model Speaker */

$this->pageTitle=Yii::app()->name . ' - '.$model->name;
$this->page = 'speakers-detailed';

?>
<section class="main-container speakers-detailed cf">
	
	<?php  echo CHtml::image(Yii::app()->request->baseUrl.'/img/speakers/detailed/'.$model->detailed_img) ?>

	<div id="speakers-text-column">
		
		<h1><?php echo $model->name.($model->talk?': '.'<span>'.$model->talk->title.'</span>':''); ?></h1>
		<p>
		<?php echo $model->summary; ?>
		</p>

		<?php if ($model->talk) { ?>
		<div id="watchTalk">
			
			<?php if ($model->talk->speaker_summary) { ?>
				<p><?php echo $model->talk->speaker_summary ?></p>
			<?php } ?>
			<a href="<?php echo $this->createUrl('site/talks'); ?>">
				<div id="watchTalkButton">
					<h3 id="watchTalkHeading">WATCH TALK</h3>
					<?php  echo CHtml::image(Yii::app()->request->baseUrl.'/img/speakers/watchTalkArrow.png') ?>
				</div>
			</a>
		</div>
		<?php } ?>
			

	</div>

</section>