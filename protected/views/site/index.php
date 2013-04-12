<?php $this->pageTitle=Yii::app()->name; ?>

<div id="container" class="homepage" >

	<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/homepage/background.jpg" id="background" alt="">
	<section id="intro" class="slide" >
	
	<div class="awardsRight">
		<a target="_blank" href="http://www.awwwards.com/best-websites/tedxguc-1"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/awards/awwwards.png" /></a>
	</div>
	
		<header>
		
			<div class="socialMedia">
				<a target="_blank" href="http://www.youtube.com/user/TEDxGUC"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mainElements/subscribeOnYoutube.png" /></a>
				<a target="_blank" href="http://www.facebook.com/TEDxGUC"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mainElements/fb.png" /></a>
				<a target="_blank" href="https://twitter.com/TEDxGUC"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mainElements/twitter.png" /></a>
			</div>
			
			<nav>
					<?php 
					$mainmenu = array(
					array('label'=>'Home', 'url'=>array('/site/index')),
					array('label'=>'About', 'url'=>array('/site/about')),
					array('label'=>'Team', 'url'=>array('/site/team')),
					array('label'=>'Events', 'url'=>array('site/events')),
					array('label'=>'Sponsors', 'url'=>array('site/sponsors')),
					array('label'=>'Contact', 'url'=>array('/site/contact')),
					array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					);
				$this->widget('zii.widgets.CMenu',array(
					'items'=>$mainmenu,
					));
					?>
			</nav>
			
 
			<?php echo CHtml::link('<div id="speakerApplication"></div>', array('attendee/application'), array('id'=>'')) ?>

			<h3 id="deadline2">Deadline: <span>20/4/2013</span></h3>
			


			<div class="fb-like" data-href="http://tedxguc.com/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="false" data-font="arial">
			</div>

		</header>
		
		
			
			<div class="neg-parallelogram">
				&nbsp;
			</div>
			<div class="parallelogram">
				<h2>A TED <strong>TALE</strong></h2>
			</div>
			
			<div class="logoAndInstructions">
			
				<img class="homepageLogo" src="<?php echo Yii::app()->request->baseUrl; ?>/img/mainElements/homepageLogo.jpg" />
				
				<div class="instructions centredShape">
				
					<div class="instructionLine"><p>Navigate vertically using your keyboard arrows</p><img class="img1" src="img/mainElements/staticKeyboardArrows.png" /><img id="dynamicArrow" src="img/mainElements/dynamicKeyboardArrow.png" /></div>
					<div class="instructionLine"><p>Or just slowly scroll using your mouse wheel</p><img class="img2" src="img/mainElements/mouse.png" /></div>
					
				</div>

			</div>

		</section>

		<section id="play" class="slide" >

		</section>
		

		<section id="conclusion" class="slide">
				
				<a id="scrollTop" class="top" href="#" title="Back to top"></a>
				
				<div id="cssa" class="awards">
					<a target="_blank" href="http://www.cssawards.net/tedxguc/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/awards/cssa.png" /></a>
				</div>
				
				<div id="cssda" class="awards">
					<a target="_blank" href="http://www.cssdesignawards.com"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/awards/cssda.png" /></a>
				</div>
				
				<div id="csswinner" class="awards">
					<a target="_blank" href="http://www.csswinner.com/details/tedxguc/4282/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/awards/csswinner.png" /></a>
				</div>

				<img class="illustratedLogo centredShape" src="<?php echo Yii::app()->request->baseUrl; ?>/img/homepage/illustratedLogo.png" />
				
				
			
			
				<form class="header2 centredShape">

					<input type="email" name="email" class="newsletter-email" placeholder="youremail@email.com" />
					<a id='subscribe-submit' href="#" class="subscribeToNewsletter">
						<div class="callToAction">
							KEEP ME UPDATED
						</div>
					</a>

				</form>
				
				
				
				<div class="fb-like" id="recommend" data-href="http://tedxguc.com" data-send="true" data-width="700" data-show-faces="true" data-action="recommend"></div>
				
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
						
						Designed by <a target="_blank" href="http://ranaelgohary.com">Rana Elgohary</a> developed by <a href="mailto:amr.m.draz@gmail.com">Amr Draz</a> and illustrations by <a target="_blank" href="http://www.behance.net/K-A-S-S-A-B">Omar Kassab</a>
						</p>
						
						<div class="footer-bottom-right">
						
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
				
				
		</section>



		</div>

		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/raphael-min.js" ></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/raphael.along.js" ></script>
		<script type="text/javascript">
		var homepageImg = "<?php echo Yii::app()->request->baseUrl; ?>/img/homepage/",
		baseUrl = "<?php echo Yii::app()->request->baseUrl; ?>/";

		</script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/homepage.js" ></script>