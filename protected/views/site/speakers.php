<?php
$this->pageTitle=Yii::app()->name . ' - Speakers';
$this->page = 'speakers';
$len = count($speakers);
$midlen = ceil($len/2);

function iterratSpeakers($speakers,$start, $end) {
	for ($i=$start;$i<$end;$i++) {
		$speaker = $speakers[$i];
		
		echo CHtml::link('<article>'.
			CHtml::image(Yii::app()->request->baseUrl.'/img/speakers/main/'.$speaker->img).
				'<div class="speakers-text-container">'.
					'<h3>'.$speaker->name.($speaker->talk?': '.'<span>'.$speaker->talk->title.'</span>':'').'</h3>'.
					'<p>'.$speaker->getShortSummary(120).'</p>'.
				'</div>'.
			'</article>', array('speaker/view','id'=>$speaker->id));
	}
}
?>
<section class="main-container speakers-main cf">
		
		<div id="speakers-column-left">
			<?php 
				iterratSpeakers($speakers,0,$midlen);
			?>
			
			
			<a href="speakers/abdullahsuliman.html">
				<article>
				
					<img src="img/speakers/main/abdullahsuliman.png" />
					
					<div class="speakers-text-container">
					
						<h3>Abdullah Suliman: <span>Paradox Within</span></h3>
						
						<p>Abdallah Soliman is a Senior Engineering student at The German University in Cairo. The writings of Linguist Dr. Abdelwahab ..</p>
					
					</div>
				
				</article>
			</a>
		
		</div>
		
		<div id="speakers-column-right">
			<?php 
				iterratSpeakers($speakers,$midlen,$len);
			?>
			
				
				<a href="speakers/sherifhamed.html">
					<article>
					
						<img src="img/speakers/main/sherifhamed.png" />
						
						<div class="speakers-text-container">
			
							<h3>Sherif Hamed: <span>Paradox Within</span></h3>
							
							<p>Sherif Hamed, Graduated in 2012 from the German University in Cairo, Networks Engineering Major, and currently he is ..</p>
						
						</div>
					
					</article>
				</a>
		
		</div>
		
	</section>
