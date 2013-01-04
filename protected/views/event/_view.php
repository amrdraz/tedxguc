<article >
	<?php echo CHtml::link('<img src="img/events/'.$data->thumb.'" alt="'.$data->title.' thumb">', array('site/events','url'=>$data->url)); ?>
	<section>
		<h3><?php echo CHtml::link($data->title, array('site/events','url'=>$data->url)); ?></h3>
		<p>
			<?php echo $data->shortDescription; ?>
		</p>
	</section>
</article>