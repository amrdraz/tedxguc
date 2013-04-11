<?php
/* @var $this AttendeeController */
/* @var $model Attendee */

$this->breadcrumbs=array(
	'Attendees'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Attendee', 'url'=>array('index')),
	array('label'=>'Manage Attendee', 'url'=>array('admin')),
);
?>

<h1>Create Attendee</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>