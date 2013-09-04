<?php
$this->pageTitle=Yii::app()->name . ' - Speakers';
$this->page = 'speakers';
?>

<section class="main-container speakers">

	<?php 
		foreach ($speakers as $speaker) {
			echo CHtml::link('<article class="speakerColumn">'.
				CHtml::image(Yii::app()->request->baseUrl.'/img/speakers/'.$speaker->img).
				'<h3>'.$speaker->name.'</h3>'.
				'<br/><br/>'.
				'<p>'.$speaker->getShortSummary(200).'</p>'.
				'</article>', array('speaker/view','id'=>$speaker->id));
		}
	?>
<!-- 
	<a href="#">
		<article class="speakerColumn">
	
			<img class="" src="img/speakers/MetwallyMathana.jpg" />
		
			<h3>Metwally Mathana</h3>
			<br/><br/>
			<p> In 1998 Mahanna was competing in the world cup in Dubai, on his 1st lift he equalized the world record, on the 2nd Mathana broke the world record. Then broke it again. And then for the 3rd time in one night he broke the ... </p>
	
		</article> -->
	<!-- 
	<a href="#">
		<article class="speakerColumn">
	
			<img class="" src="img/speakers/LoayHamed.jpg" />
		
			<h3>Loay Hamed</h3>
			<br/><br/>
			<p>Loay graduated from the German University in Cairo where he decided to major in electronics engineering. The 25 year old has always been interested in quantum and modern physics along with unusual …</p>
	
	</a>
 --><!-- 
	<a href="#">
		<article class="speakerColumn">
	
			<img class="" src="img/speakers/MostafaHemdan.jpg" />
		
			<h3>Mostafa Hemdan</h3>
			<br/><br/>
			<p>A young ambitious entrepreneur who led a team of 20 students to found a company for e-waste "electronic waste" recycling. RecycloBekia started with very low capital in a small garage in Egypt, now RecycloBekia is among ...</p>
	
		</article>
	</a>
	 -->
	<a href="#">
		<article class="speakerColumn last">
	
			<img class="" src="img/speakers/MetwallyMathana.jpg" />
		
			<h3>Murtadha Al-Tameemi</h3>
			<br/><br/>
			<p>Murtadha Al-Tameemi of GEMSI (The Global Entrepreneurship and Maker Space Initiative), is one of the first to introduce Hackerspaces, a brand new open- innovation platform, into the Middle East. Contrary to the …  </p>
	
		</article>	
	</a>

</section>