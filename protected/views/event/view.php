<?php

$this->menu=array(
	array('label'=>'Create Event', 'url'=>array('create')),
	array('label'=>'Update Event', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Event', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Event', 'url'=>array('admin')),
	);
	?>
	<div class="event">

		<h1><?php echo $model->title; ?></h1>

		<article>
			<?php echo $model->description ?>	
		</article>

		<?php 
//add carsel images here
		// foreach ($model->images as $key => $image) { ?>

		<?php //} ?>

		
		<img class="eventImg" src="<?php echo Yii::app()->request->baseUrl; ?>/img/events/xlounge/10.jpg" />
		<img class="eventImg" src="<?php echo Yii::app()->request->baseUrl; ?>/img/events/xlounge/1.jpg" />
		<img class="eventImg" src="<?php echo Yii::app()->request->baseUrl; ?>/img/events/xlounge/2.jpg" />
		<img class="eventImg" src="<?php echo Yii::app()->request->baseUrl; ?>/img/events/xlounge/3.jpg" />
		<img class="eventImg" src="<?php echo Yii::app()->request->baseUrl; ?>/img/events/xlounge/4.jpg" />
		<img class="eventImg" src="<?php echo Yii::app()->request->baseUrl; ?>/img/events/xlounge/5.jpg" />
		<img class="eventImg" src="<?php echo Yii::app()->request->baseUrl; ?>/img/events/xlounge/6.jpg" />
		<img class="eventImg" src="<?php echo Yii::app()->request->baseUrl; ?>/img/events/xlounge/7.jpg" />
		<img class="eventImg" src="<?php echo Yii::app()->request->baseUrl; ?>/img/events/xlounge/9.jpg" />


	</div>


