<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Slideshow Test</title>

<style>

body	{background-color:black;color:white;width:100%;height:100%;margin:0 auto}
#mainWrapper	{width:960px;height:200px;margin:0 auto;display:block;}
.leftContent, .rightContent	{width:210px;height:200px;display:block;}
.middleContent {width:540px;height:200px;float:left;display:block;background-color:red;}
.leftContent {float:left;background-color:blue;}
.rightContent {float:right;background-color:green;}



</style>





<script type="text/javascript" src="js/fadeslideshow.js">
</script>

<script type="text/javascript">

var mygallery=new fadeSlideShow({
	wrapperid: "fadeshow1", //ID of blank DIV on page to house Slideshow
	dimensions: [200, 200], //width/height of gallery in pixels. Should reflect dimensions of largest image
	imagearray: [
		["images/PlayerCutOut-1.png", ],
		["images/PlayerCutOut-2.png", ]
	],
	displaymode: {type:'auto', pause:2000, cycles:0, wraparound:false},
	persist: true, //remember last viewed slide and recall within same session?
	fadeduration: 1750, //transition duration (milliseconds)
	descreveal: "ondemand",
	togglerid: ""
})

</script>





</head>

<body>

<div style="clear:both;"><?php include('slideshow/slideshow-inc.php'); ?></div>




</div><!--mainWrapper-->
</body>
</html>
