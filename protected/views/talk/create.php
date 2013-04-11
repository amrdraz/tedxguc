<?php
/* @var $this TalkController */
/* @var $model Talk */

$this->breadcrumbs=array(
	'Talks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Talk', 'url'=>array('index')),
	array('label'=>'Manage Talk', 'url'=>array('admin')),
);
?>

<h1>Create Talk</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>