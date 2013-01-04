
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="www-tedxguc-com" data-template-set="html5-reset">

	<meta charset="utf-8">
	<meta http-equiv="Cache-control" content="public">
	<!--
	<script type="text/javascript" src="http://platform.twitter.com/anywhere.js?id&#61;akzPZxSf6sr30votc95ySQ&amp;v&#61;1"></script>

	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!-- For Facebook  -->
	<meta property="og:url" content="http://www.tedxguc.com/">
	<meta property="og:title" content="TEDxGUC">
	<meta property="og:type" content="website">
	<meta property="og:description" content="TEDxGUC is an independently organized TED event hosted in The German University in Cairo, We are a platform for sharing ideas worth spreading">
	<meta property="og:image" content="http://www.tedxguc.com/img/<?php echo ($this->fbImage==null)?'fb-image.jpg': $this->fbImage; ?>">
	<link rel="image_src" href="http://www.tedxguc.com/img/<?php echo ($this->fbImage==null)?'fb-image.jpg': $this->fbImage; ?>" />

	<meta name="title" content="TEDxGUC">
	<!-- Google will often use this as its description of your page/site. Make it good. -->
	<meta name="description" content="TEDxGUC is an independently organized TED event hosted in The German University in Cairo, We are a platform for sharing ideas worth spreading">
	<meta name="keywords" content="GUC TED TEDx TEDxGUC Ideas idea inspiration design entertainement talks speakers egypt German university in cairo">
	<!-- Google will often use this as its description of your page/site. Make it good. -->
	
	<meta name="google-site-verification" content="">
	<!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
	
	<meta name="author" content="Rana Elgohary and Amr Draz">
	<meta name="Copyright" content="TEDxGUC">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<meta name="DC.title" content="TEDxGUC">
	<meta name="DC.subject" content="Spreading Ideas">
	<meta name="DC.creator" content="">
	
	<!--  Mobile Viewport Fix
	j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag 
	device-width : Occupy full width of the screen in its current orientation
	initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
	maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
	-->
	<!-- Uncomment to use; use thoughtfully!
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	-->

	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/img/mainElements/favicon.png">
	<!-- This is the traditional favicon.
		 - size: 16x16 or 32x32
		 - transparency is OK
		 - see wikipedia for info on browser support: http://mky.be/favicon/ -->
		 
	<link rel="apple-touch-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/img/apple-touch-icon.png">
	<!-- The is the icon for iOS's Web Clip.
		 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4's retina display (IMHO, just go ahead and use the biggest one)
		 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
		 - Transparency is not recommended (iOS will put a black BG behind the icon) -->
	
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css">
	

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
	
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" /> -->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
	<script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr-1.7.min.js'></script>
	
	<script>window.jQuery || document.write("<script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.8.0.min.js'>\x3C/script>")</script>

	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.nicescroll.min.js" ></script>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-37249755-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</head>

<body>
<?php echo $content; ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript"> 
	if($("html.ie8").length==1 || $("html.ie7").length==1){
		var $buoop = {vs:{i:8,f:3.6,o:10.6,s:4,n:9}} 
		$buoop.ol = window.onload; 
		window.onload=function(){ 
			 try {if ($buoop.ol) $buoop.ol();}catch (e) {} 
			 var e = document.createElement("script"); 
			 e.setAttribute("type", "text/javascript"); 
			 e.setAttribute("src", "http://browser-update.org/update.js"); 
			 document.body.appendChild(e); 
		} 
	}
</script>
</body>
</html>
