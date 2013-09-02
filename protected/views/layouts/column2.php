<?php $this->beginContent('//layouts/column1'); ?>
<div class="<?php echo ($this->page==null)?'':$this->page;?> main-container">
	<?php if (!empty($this->menu)) { ?>
	<sidebar>
		<?php
			if(Yii::app()->user->isGuest) {
				echo '<section class="tweets">
						<hr/>
							<h3>Tweets</h3>
						<div id="tweets"></div>
					</section>
					<!--<section class="news">
						<hr/>
						<h3>News</h3>
						<div>
							
						</div>
					</section>-->';
			} else {
				$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Operations',
				));
				$this->widget('zii.widgets.CMenu', array(
					'items'=>$this->menu,
					'htmlOptions'=>array('class'=>'operations'),
				));
				$this->endWidget();
			}
		?>
	</sidebar><!-- sidebar -->
	<section class="content">
		<?php echo $content; ?>
	</secton><!-- content -->
	<?php } else echo $content; ?>
</div>
<?php $this->endContent(); ?>