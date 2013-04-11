<?php
/* @var $this AttendeeController */
/* @var $model Attendee */

$this->breadcrumbs=array(
	'Attendees'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Attendee', 'url'=>array('index')),
	array('label'=>'Create Attendee', 'url'=>array('create')),
	array('label'=>'Update Attendee', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Attendee', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Attendee', 'url'=>array('admin')),
);
?>

<h1>View Attendee #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'event_id',
		'first_name',
		'middle_name',
		'last_name',
		'birth_year',
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
	),
)); ?>
