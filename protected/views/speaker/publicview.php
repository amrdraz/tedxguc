<?php
/* @var $this SpeakerController */
/* @var $model Speaker */

$this->pageTitle=Yii::app()->name . ' - '.$model->name;
$this->page = 'speaker';

?>

<div class="speakerDetailedView  main-container">

	<h1><?php echo $model->name; ?></h1>
	<?php  echo CHtml::image(Yii::app()->request->baseUrl.'/img/speakers/'.$model->img) ?>
	
	<p>
	<?php echo CHtml::encode($model->summary); ?>
	</p>

</div>