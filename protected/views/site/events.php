<?php
$this->pageTitle=Yii::app()->name . ' - Events';
$this->page = 'events';
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'../event/_view',
	'emptyText'=>'We are yet to hold any event, check back soon.',
)); ?>
