<?php
/* @var $this TalkController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Talks',
);

$this->menu=array(
	array('label'=>'Create Talk', 'url'=>array('create')),
	array('label'=>'Manage Talk', 'url'=>array('admin')),
);
?>

<h1>Talks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
