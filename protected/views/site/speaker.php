<?php
$this->pageTitle=Yii::app()->name . ' - Speakers Applcation';
?>
<section class="application main-container">			
	

	<?php echo $this->renderPartial('form/speaker', array('model'=>$model)); ?>

</section>
