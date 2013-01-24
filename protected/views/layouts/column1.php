<?php $this->beginContent('//layouts/main'); ?>
<div id="container">

	<div class="awards">
		<a target="_blank" href="http://www.cssdesignawards.com"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mainElements/css-design-awards-nominee-left-black.png" /></a>
		
		<a target="_blank" href="http://www.csswinner.com/details/tedxguc/4282/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mainElements/nominee-black-left.png" /></a>
	</div>
	
	<header >
	
		<div class="socialMedia">
			<a target="_blank" href="http://www.youtube.com/user/TEDxGUC"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mainElements/subscribeOnYoutube.png" /></a>
			<a target="_blank" href="http://www.facebook.com/TEDxGUC"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mainElements/fb.png" /></a>
			<a target="_blank" href="https://twitter.com/TEDxGUC"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mainElements/twitter.png" /></a>
		</div>
		
		<nav>
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/about')),
				array('label'=>'Team', 'url'=>array('/site/team')),
				array('label'=>'Events', 'url'=>array('site/events')),
				array('label'=>'Sponsors', 'url'=>array('site/sponsors')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
		</nav>
		<?php
		$controler = Yii::app()->getController();
			if (!($controler->id=='site' && $controler->action->id == 'index'))
			 // echo '<img src="'.Yii::app()->request->baseUrl.'/img/mainElements/tedxgucLogo.png" />';
		?>
		
		<div class="fb-like" data-href="http://tedxguc.com/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="false" data-font="arial"></div>
		
	</header>
	
	<?php if(false && isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<footer id="footer">
		
		<div class="footer-container">
		
			<img class="aboutImg" src="<?php echo Yii::app()->request->baseUrl; ?>/img/mainElements/footerlogo.png" />
		
			<p>
			What is TEDx?
			<br/>
			
			In the spirit of ideas worth spreading, TED has created a program called TEDx. TEDx is a program of local, self-organized events that bring people together to share a TED-like experience. Our event is called TEDx[name], where x = independently organized TED event. At our TEDx[name] event, TEDTalks video and live speakers will combine to spark deep discussion and connection in a small group. The TED Conference provides general guidance for the TEDx program, but individual TEDx events, including ours, are self-organized.
			
			<br/><br/>
			
			This independent TEDx event is operated under license from <a href="http://www.ted.com" class="external-link" title="External link: TED Homepage ted.com, opens in a new window.">TED</a>.
			
			<br/><br/>
			
			Designed by <a target="_blank" href="http://ranaelgohary.com">Rana Elgohary</a> and developed by <a href="mailto:amr.m.draz@gmail.com">Amr Draz</a>
			
			</p>
			
			<div class="footer-bottom-right">
				
				<form class="subscribe-box">
					<input type="email" name="email" class="newsletter-email" placeholder="youremail@email.com" />
					<a id='subscribe-submit' href="#" class="subscribeToNewsletter">
						<div class="callToAction">
							Subscribe
						</div>
					</a>
				</form>

				<div class="socialMedia">
					<a target="_blank" href="http://www.youtube.com/user/TEDxGUC"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mainElements/subscribeOnYoutube.png" /></a>
					<a target="_blank" href="http://www.facebook.com/TEDxGUC"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mainElements/fb.png" /></a>
					<a target="_blank" href="https://twitter.com/TEDxGUC"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mainElements/twitter.png" /></a>
				</div>
				
			</div>
	
			<div class="footer-bottom">
				&nbsp;
			</div>
		
		</div>
		
	</footer><!-- footer -->

</div><!-- page -->
<?php $baseUrl = Yii::app()->request->baseUrl; ?>

<script type="text/javascript">
	//initialize niceScroll
	console.log("ready");
	jQuery(document).ready(function($) {
		$('html').niceScroll();
	});
	baseUrl = "<?php echo $baseUrl; ?>/";
</script>

<?php Yii::app()->clientScript->registerScriptFile($baseUrl."/js/functions.js",CClientScript::POS_END); ?>

<?php $this->endContent(); ?>