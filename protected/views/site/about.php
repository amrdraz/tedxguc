<?php $this->page = 'about'; ?>
<nav>
	<ul>
		<li >
			<?php echo CHtml::link('What is <br/> <strong>TED?</strong>', array('about','page'=>'ted'), array('class'=>($page=="ted"?"active":""))); ?>
		</li>
		<li >
			<?php echo CHtml::link('What is <br/> <strong>TED<sup>x</sup>?</strong>', array('about','page'=>'tedx'), array('class'=>($page=="tedx"?"active":""))); ?>
		</li>
		<li >
			<?php echo CHtml::link('What is <br/> <strong>TED<sup>x</sup>GUC?</strong>', array('about','page'=>'tedxguc'), array('class'=>($page=="tedxguc"?"active":""))); ?>
		</li>
	</ul>
</nav>
<article >
	<?php echo $this->renderPartial('about/'.$page); ?>
</article>
