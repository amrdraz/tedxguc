<?php
/* @var $this AttendeeController */
/* @var $model Attendee */

$this->breadcrumbs=array(
	'Attendees'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Attendee', 'url'=>array('index')),
	array('label'=>'Create Attendee', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('attendee-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Attendees</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'attendee-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'event_id',
		'first_name',
		'middle_name',
		'last_name',
		'birth_year',
		/*
		'home_address',
		'gucian',
		'gucian_other',
		'bus_number',
		'email',
		'phone',
		'education_level',
		'job_title',
		'tedx_info',
		'how_many',
		'how_much',
		'how_did',
		'how_other',
		'about_theme',
		'speaker_choice',
		'excpect_talks',
		'intresting_talk',
		'waiting_list',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
