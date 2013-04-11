<?php
/* @var $this AttendeeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Attendees',
);

$this->menu=array(
	array('label'=>'Create Attendee', 'url'=>array('create')),
	array('label'=>'Manage Attendee', 'url'=>array('admin')),
);
?>

<h1>Attendees</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
