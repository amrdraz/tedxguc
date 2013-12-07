<?php
$this->pageTitle=Yii::app()->name . ' - Teams';
// add url for fb image here when you share it on fb
// $this->fbImage = '';

$baseUrl = Yii::app()->request->baseUrl;
$cs = Yii::app()->getClientScript();
// including animation.css
$cs->registerCssFile($baseUrl.'/css/animations.css');

?>

<section class="teams main-container">			
	<div class="teamsTitle">
			
				<h1>Which team will you apply for?</h1>
				
				<p>TEDxGUC is redefining the X<br>
				We are challenging stereotypes and establishing new<br>
				dynamics and ways of productivity and functionality<br>
				within our teams. </p>
				
				<img src="img/teams/teamsBottomArrow.png" />
			
			</div>
			
			
			
			<article id="logistics">
			
				<h2>COORDINATION</h2>
				<h2>& LOGISTICS</h2>
				
				<img id="naga" src="img/teams/naga.png" />
			
				<div id="logisticsPictogram">
					<img src="img/teams/logistics1.png" />
					<img id="logistics2" src="img/teams/logistics2.png" />
					<img id="logistics3" src="img/teams/logistics3.png" />
				</div>
				
				<p>We satisfy all the logistical needs of the<br> 
				organization to maintain the best and most unique image of TEDxGUC.</p>
			
			</article>
			
			
			
			<article id="fundraising">
			
				<h2>FUNDRAISING</h2>
				
				<img id="samar" src="img/teams/samar.png" />
			
				<div id="fundraisingPictogram">
					<img id="fundraising2" src="img/teams/fundraising2.png" />
					<img src="img/teams/fundraising1.png" />
				</div>
				
				<p>We provide creative and well-constructed<br>
				experiences for TEDXGUC's sponsors, surpassing<br>
				our financial target.</p>
			
			</article>
			
			<article id="pr">
			
				<h2>PUBLIC RELATIONS</h2>
				<h2>& ADVERTISING</h2>
				
				<img id="aya" src="img/teams/aya.png" />
			
				<div id="prPictogram">
					<img id="pr1" src="img/teams/pr1.png" />
					<img id="pr2" src="img/teams/pr2.png" />
				</div>
				
				<p>We brand TEDxGUC in a way that conveys<br>
				its true image and message to the stakeholders,<br>
				reinforcing its essence.</p>
			
			</article>
			
			<article id="design">
			
				<h2>DESIGN</h2>
				<h2>& MULTIMEDIA</h2>
				
				<img id="hassan" src="img/teams/hassan.png" />
			
				<div id="designPictogram">
					<img id="design1" src="img/teams/design1.png" />
					<img src="img/teams/design2.png" />
					<img id="design3" src="img/teams/design3.png" />
				</div>
				
				<p>We maintain a high level of innovation through<br> 
				a culture of constant visual experimentation.</p>
			
			</article>
			
			<article id="socialMedia">
			
				<h2>SOCIAL</h2>
				<h2>& INTERACTIVE MEDIA</h2>
				
				<img id="rana" src="img/teams/rana.png" />
			
				<div id="socialMediaPictogram">
					<img id="socialMedia1" src="img/teams/socialMedia1.png" />
					<img id="socialMedia2" src="img/teams/socialMedia2.png" />
					<img id="socialMedia3" src="img/teams/socialMedia3.png" />
				</div>
				
				<p>We are concerned with communicating ideas through
				artistic expression and experimental media.</p>
			
			</article>
			
			<article id="development">
			
				<h2>MEMBERS'</h2>
				<h2>DEVELOPMENT</h2>
				
				<img id="noura" src="img/teams/noura.png" />
			
				<div id="developmentPictogram">
					<img src="img/teams/development1.png" />
					<img id="development2" src="img/teams/development2.png" />
				</div>
				
				<p>We create an energetic and unique atmosphere<br>
				that keeps members boosted and in constant<br>
				development.</p>
			
			</article>
			
			<article id="coaching">
			
				<h2>SPEAKERS</h2>
				<h2>& COACHING</h2>
				
				<img id="hesham" src="img/teams/hesham.png" />
			
				<div id="coachingPictogram">
					<img id="coaching1" src="img/teams/coaching1.png" />
					<img id="coaching2" src="img/teams/coaching2.png" />
				</div>
				
				<p>We aid speakers in delivering their unique and<br>
				diverse ideas by exploring different fields. Our aim<br>
				is for talks to reach all mindsets.</p>
			
			</article>
			
			
			<div id="outro">
			
				<h1>Now, which team</h1>
				<h1>will you apply for?</h1>
				
				<p>Visit our <span>recruitment booth</span> on campus to collect your application. <br>
				Booth starts on the <span>9th of December.</span></p>
				
				<div>
				
					<span class='st_facebook_large' displayText='Facebook'></span>
					<span class='st_googleplus_large' displayText='Google +'></span>
					<span class='st_twitter_large' displayText='Tweet'></span>
					<span class='st_pinterest_large' displayText='Pinterest'></span>
					<span class='st_email_large' displayText='Email'></span>
				
				</div>
			
			</div>
					
		</section>
	
	
	
	
	
	
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "ur-39d09f47-619-7111-c161-8c49584c99c7", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
	
	
	<script>
		
		var imageTriggers = [
			//	<!--Naga-->
			{img: $('#naga'), top:$('#naga').offset().top, offset:200, animation:'slideUp'},
			// <!--Logistics Red Icon-->
			{img: $('#logistics2'), top:$('#logistics2').offset().top, offset:340, animation:'hatch'},
			// <!--Logistics Grey Icon-->
			{img: $('#logistics3'), top:$('#logistics3').offset().top, offset:340, animation:'hatch'},
			// <!--Samar-->
			{img: $('#samar'), top:$('#samar').offset().top, offset:220, animation:'slideUp'},
			// <!--Fundraising Chart-->
			{img: $('#fundraising2'), top:$('#fundraising2').offset().top, offset:250, animation:'hatch'},
			// <!--Aya-->
			{img: $('#aya'), top:$('#aya').offset().top, offset:300, animation:'slideUp'},
			// <!--PR Communication Rays-->	
			{img: $('#pr1'), top:$('#pr1').offset().top, offset:200, animation:'hatch'},
			{img: $('#pr2'), top:$('#pr2').offset().top, offset:250, animation:'hatch'},
			// <!--Hassan-->
			{img: $('#hassan'), top:$('#hassan').offset().top, offset:200, animation:'slideUp'},
			// <!--Pencil-->	
			{img: $('#design1'), top:$('#design1').offset().top, offset:380, animation:'slideDown'},
			// <!--Design Flask-->	
			{img: $('#design3'), top:$('#design3').offset().top, offset:380, animation:'hatch'},
			// <!--Rana-->
			{img: $('#rana'), top:$('#rana').offset().top, offset:300, animation:'slideUp'}
		];

		$(window).scroll(function() {
			$.each(imageTriggers, function(i, obj){
				var topOfWindow = $(window).scrollTop();
				if (obj.top < topOfWindow+obj.offset) {
					// set the image which was already selected once instead of everytime I loop
					// to it's acosiated animation class
					obj.img.addClass(obj.animation);
					// removes image array after I'm done since we're not using it again
					imageTriggers.splice(i,1);
					delete obj.img; // in case I cause memeory leaks
				}
			});
		});
		
		
		<!--Responsive Screens-->	
			
		$(window).scroll(function() {
				$('#socialMedia1').each(function(){
				var imagePos = $(this).offset().top;
		
				var topOfWindow = $(window).scrollTop();
					if (imagePos < topOfWindow+280) {
						$(this).addClass("hatch");
					}
				});
			});
			
		$(window).scroll(function() {
				$('#socialMedia2').each(function(){
				var imagePos = $(this).offset().top;
		
				var topOfWindow = $(window).scrollTop();
					if (imagePos < topOfWindow+320) {
						$(this).addClass("hatch");
					}
				});
			});
			
		$(window).scroll(function() {
				$('#socialMedia3').each(function(){
				var imagePos = $(this).offset().top;
		
				var topOfWindow = $(window).scrollTop();
					if (imagePos < topOfWindow+360) {
						$(this).addClass("hatch");
					}
				});
			});
			
			
			
		<!--Noura-->
		
			$(window).scroll(function() {
					$('#noura').each(function(){
					var imagePos = $(this).offset().top;
			
					var topOfWindow = $(window).scrollTop();
						if (imagePos < topOfWindow+300) {
							$(this).addClass("slideUp");
						}
					});
				});
		
		
		<!--Development Arrow-->	
			
		$(window).scroll(function() {
				$('#development2').each(function(){
				var imagePos = $(this).offset().top;
		
				var topOfWindow = $(window).scrollTop();
					if (imagePos < topOfWindow+300) {
						$(this).addClass("hatch");
					}
				});
			});
			
			
		<!--Hesham-->
		
			$(window).scroll(function() {
					$('#hesham').each(function(){
					var imagePos = $(this).offset().top;
			
					var topOfWindow = $(window).scrollTop();
						if (imagePos < topOfWindow+240) {
							$(this).addClass("slideUp");
						}
					});
				});
		
		
		<!--Coaching Sheet-->	
			
		$(window).scroll(function() {
				$('#coaching2').each(function(){
				var imagePos = $(this).offset().top;
		
				var topOfWindow = $(window).scrollTop();
					if (imagePos < topOfWindow+300) {
						$(this).addClass("hatch");
					}
				});
			});

		
		
	</script>
