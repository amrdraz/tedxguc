<?php
/* @var $this TalkController */
/* @var $model Talk */

$this->breadcrumbs=array(
	'Talks'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Talk', 'url'=>array('index')),
	array('label'=>'Create Talk', 'url'=>array('create')),
	array('label'=>'View Talk', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Talk', 'url'=>array('admin')),
);
?>

<h1>Update Talk <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>