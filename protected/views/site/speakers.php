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
		</div>
		
		<div id="speakers-column-right">
			<?php 
				iterratSpeakers($speakers,$midlen,$len);
			?>
		</div>
		
	</section>
