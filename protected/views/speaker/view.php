<?php
/* @var $this SpeakerController */
/* @var $model Speaker */

$this->breadcrumbs=array(
	'Speakers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Speaker', 'url'=>array('index')),
	array('label'=>'Public view', 'url'=>array('publicview','id'=>$model->id)),
	array('label'=>($model->talk)?'Visit Talk':'Add Talk', 'url'=>($model->talk)?array('talk/view','id'=>$model->talk->id):array('talk/create')),
	array('label'=>'Create Speaker', 'url'=>array('create')),
	array('label'=>'Update Speaker', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Speaker', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Speaker', 'url'=>array('admin')),
);
?>

<h1>View Speaker #<?php echo $model->id; ?></h1>

	<?php  echo CHtml::image(Yii::app()->request->baseUrl.'/img/speakers/detailed/'.$model->detailed_img) ?>

	<?php  echo CHtml::image(Yii::app()->request->baseUrl.'/img/speakers/main/'.$model->img) ?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'age',
		'occupation',
		'phone',
		'email',
		'cv',
		'fb_link',
		'tw_link',
		'ln_link',
		'prev_talk_url',
		'prev_events',
		'fav_talks',
		'video_url',
		'summary',
		'event_id',
	),
)); ?>
