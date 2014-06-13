<html>

<?php
	
	include('mail-inc.php'); // this handles the form. no need to modify mail-inc.php

	if( is_array($_POST) ){
		## modify these values ##
		$email_to = ''; // client email address 
		$email_subject = '2014 On-Line Registration';  // this can be changed to whatever the client wants
		$from_name = 'IowaRenegades.com'; // this can be changed to whatever the client wants
		$from_email = ''; // client email address
			
		$email_body = 'The following 2014 registration form was submitted on '.date("F j, Y, g:i a").' from the iowarenegades.com website.'."\n\n";
		
		foreach( $_POST as $key => $value ){
			if( is_array($value) ){
				$email_body .= $key.": ";
				for( $x=0; $x < count($value); $x++){
					$email_body .= $value[$x].", ";
				}
				$email_body .= "\n";
			}else{
				$email_body .= $key.": ".$value."\n";
			}
		}
		php_email( array('to' => $email_to), array('email' => $from_email, 'name' => $from_name), $email_subject, $email_body);
	}

?>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
<title>Iowa Renegades Fastpitch Softball</title>
    
    <meta name="description" content="Iowa Renegades are Iowa's premier competitive fastpitch softball club with teams from 10U-14U">
    <meta name="keywords" content=" Iowa Renegades, Renegades, Fastpitch Softball, fastpitch, softball, competitive softball, tournament softball, tournaments, try-outs, tryouts, try outs, tryout, teams, 10U Green, 10U Orange, 12U Green, 12U Orange, 14U Green, 14U Orange, 10U, 12U, 14U, Love The Game">
    
    	
    <meta name="author" content="AbstractPixels - abstract-pixels.com">
    <meta name="Contact City" content="Des Moines">
    <meta name="Contact State" content="Iowa">
    <meta name="Copyright" content="copyright ©2012">
    <meta name="revisit-after" content="5 days">
    <meta name="robots" content="index, follow">
    <meta name="rating" content="general">
    <meta name="expires" content="never">
    <meta name="MSSmartTagsPreventParsing" content="TRUE">

<style>

@font-face {
			font-family: 'EnigmaticRegular';
			src: url('fonts/Enigma__2-webfont.eot');
			src: url('fonts/Enigma__2-webfont.eot?#iefix') format('embedded-opentype'),
				 url('fonts/Enigma__2-webfont.woff') format('woff'),
				 url('fonts/Enigma__2-webfont.ttf') format('truetype'),
				 url('fonts/Enigma__2-webfont.svg#EnigmaticRegular') format('svg');
			font-weight: normal;
			font-style: normal;
			}
			
			@font-face {
    font-family: 'BreeSerifRegular';
    src: url('fonts/BreeSerif-Regular-webfont.eot');
    src: url('fonts/BreeSerif-Regular-webfont.eot?#iefix') format('embedded-opentype'),
         url('fonts/BreeSerif-Regular-webfont.woff') format('woff'),
         url('fonts/BreeSerif-Regular-webfont.ttf') format('truetype'),
         url('fonts/BreeSerif-Regular-webfont.svg#BreeSerifRegular') format('svg');
    font-weight: normal;
    font-style: normal;

}

	html, body  {
	height:100%;
	width:100%;
	margin:0;
	padding:0;
	background-image:url(images/Field-OrangeSky.jpg);
	background-position:center top;
			background-size:cover;
	background-repeat:no-repeat;
	background-attachment:fixed;
			font:1em 'EnigmaticRegular', Arial, sans-serif;
			font-weight:normal;
	color: white;
	overflow:visible;
	text-align:left;
}

header	{
			width:970px;
			height:80px;
			background:none;
			font-size:1em;
			font-family:'BreeSerifRegular', Arial, sans-serif;
			text-align:left;
			padding-top:5px;
			padding-right:10px;
			margin:0 auto 0px auto;
			z-index:1010;
			position:relative;
			}
				
			header img	{
				
			
				}

#homei,  {
margin:0 auto;
	visibility: visible;
	position: absolute;
	height:800px;
	background-image:url(images/softball-green-stitches1000.png);
	width: 100%;
	top: 0px;
	padding:0px;
	background-size:contain;
	background-position:center top;
	background-repeat:no-repeat;
	display:block;
}


#contentWrapper	{
	width:960px;
	margin: -16px auto 0px auto;
	display:block;
	text-align:center;
	}
	
#content {
	overflow:hidden;
	position:absolute;
	height:650px;
	width:960px;
	margin:0 auto;
	padding:0;
	display:block;
}	
	
#homei		{	
	left:0px; 
	
	font-size:16px;
	
	}
		
		#homei .headerText		{
		margin:60px auto 0 auto;
		}
		
		#homei h2	{
			font-size:1.5em;
			}
	



/*----------------Content classes-------------*/
.leftWrapper, .rightWrapper	{
	width:200px;
	display:block;
	
	}
	
	.leftWrapper	{
		float:left;
		}
		
	.rightWrapper	{
			float:right;
		}
		
.mainWrapper	{
	width:450px;
	display:block;
		
		padding: 0 50px;
	}

/* ---------------- Menu  --------------- */
.menu {
	position:absolute;
	width:460px;
	height:20px;
	padding:3px 5px 5px 25px;
	right:0px;
	top: 15px;
	border-radius:6px;
	background-color:rgba(252,155,3,.4);
}

.menu a{	
	font-size:1em;
			font-family:'BreeSerifRegular', Arial, sans-serif;
	text-transform:capitalize;
	float:left;
	text-decoration:none;
	position:relative;
	left:-10px;
	padding: 0px 10px 0px 10px;
	color: rgb(57,105,24);
	-webkit-transition:0.5s;
}

.menu a:hover  {
	padding-top:5px;
	color: orange;
	}
	
.menu a:active  {
	color: #bbb;}	

/* ---------------- Content Styling --------------- */	
p	{ 
	padding: 0;
	line-height:20px;
	margin:0px 0 20px 0;
} 

a	{
	color: orange;
	text-decoration:none;
	-webkit-transition: 2.5s;
	-moz-transition: 2.5s;
	transition: 2.5s;

}

a:hover {	
color: green;
background-color:rgba(57,105,24,.4);
	-webkit-transition: 0.5s;
	-moz-transition: 0.5s;
	transition: 0.5s;}
a:active {	
color: #f5f5f5;}
	
a:focus, a:hover, a:active {	
	text-decoration: none;
}


ul {
	 margin-left:-2.75em; left:0; 
}

li { 
	font-style: normal;
	font-variant: normal;
	text-transform: none;
	text-decoration: none;
	list-style-type: none;
	line-height:2.5em;	
	margin:0px;
}

h1, h2, h3, h4 {
	margin: 0;
}

h5	{
	font-size:105%;
	font-weight:normal;
	}

pre {
	font-size: 1.0em;
	line-height: 1.0em;
	overflow-x: auto;
}

ul.gallery {
	position:absolute;
	top:345px;
	left:98px;
	width: 900px;
	height:125px;
	border:none;
	list-style: none;
}
		
li.thumbs {	
	float: left;
	position: relative;
	list-style: none;
	width:130px;
	height: 130px;
	padding: 0px 0 0 0;
	margin-right: 5px;
	overflow:hidden;
	opacity: 1.0;
}

li.thumbs img {			
	border:0px;
	padding:0;
	margin:0px 0 0 0;
}

.serviceslist {
	font-size: 1.42em;
	text-transform: uppercase;
}

#copyright {
	position: fixed;
	font-size:0.65em;
	color:#666;
	width:auto;
	bottom:30px;	
	left:100px;
}

.box, .box2, .box3, .boxfull  { 
	position:relative;
	float:left;
	left:100px;
	top:	245px;
	width:	250px;
	height:	auto;
	overflow:hidden;
	margin:0 20px 0 0;	
}

.boxfull{
	width:530px;
}

.box2{
	width:150px;
}
.box3{
	width:780px;
	height:80px;
	-moz-column-count: 3; 
	-moz-column-gap: 30px; 
	-moz-column-rule: 0px solid black; 
	-webkit-column-count: 3; 
	-webkit-column-gap: 30px; 
	-webkit-column-rule: 0px solid black;
}
	
li.hidden {	
	visibility:hidden; 
	text-decoration:none; 
	border:0;
}





/* ---------------- Color Switch Animation --------------- */
	@keyframes colorSwitch 	{
		
		6% {
				 color: rgb(57,105,24);
				}
			95% {
			color: rgb(227,125,0);
				}
		}

	
	@-moz-keyframes colorSwitch 	{
		
		6% {
				 color: rgb(57,105,24);
				}
			95% {
			color: rgb(227,125,0);
				}
		}
	
	@-webkit-keyframes colorSwitch 	{
	
		6% {
				 color: rgb(57,105,24);
				}
			95% {
			color: rgb(227,125,0);
				}
		}
	
	6% {
				 color: rgb(57,105,24);
				}
			95% {
			color: rgb(227,125,0);
				}
		}
	
	@-ms-keyframes colorSwitch 	{
		
		6% {
				 color: rgb(57,105,24);
				}
			95% {
			color: rgb(227,125,0);
				}
		}	
/* ---------------- end colorSwitch --------------- */


/* ---------------- background-color Switch Animation --------------- */
	@keyframes background-colorSwitch 	{
		
		6% {
				 background-color: rgb(57,105,24);
				}
			95% {
			background-color: rgb(227,125,0);
				}
		}

	
	@-moz-keyframes background-colorSwitch 	{
		
		6% {
				 background-color: rgb(57,105,24);
				}
			95% {
			background-color: rgb(227,125,0);
				}
		}
	
	@-webkit-keyframes background-colorSwitch 	{
	
		6% {
				 background-color: rgb(57,105,24);
				}
			95% {
			background-color: rgb(227,125,0);
				}
		}
	
	6% {
				 background-color: rgb(57,105,24);
				}
			95% {
			background-color: rgb(227,125,0);
				}
		}
	
	@-ms-keyframes background-colorSwitch 	{
		
		6% {
				 background-color: rgb(57,105,24);
				}
			95% {
			background-color: rgb(227,125,0);
				}
		}	
/* ----------------End background-color Switch Animation --------------- */

    
		   .headerText	{
		   			color: rgb(227,125,0);
					margin:60px 0 0 0px;
                    padding:1%;
					 font-family:'BreeSerifRegular', Arial, sans-serif;
					 font-weight:normal;
                    text-align:center;
                    overflow:hidden;
                   line-height:3.1em;
                    }
                    
                     .headerText	 h3	{
					 text-shadow: hsla(210,10%,20%,.3) 0 -1px 0, hsl(210,10%,85%) 0 0px 1px, hsla(200,10%,80%,.8) 0 0 4px, hsla(210,10%,50%,.6) 0 0 4px;
                        font-size:300%;
						 font-weight:normal;
						 letter-spacing:1px;
                        }
                    
                     .headerText	 h4	{
                        font-size:195%;
						 font-weight:normal;
                        
                        }
                        
                         .headerText	 h3 span	{
					margin:-5px;
							animation:colorSwitch 8s ease-out 4.2s infinite alternate;	/* W3 */
							-moz-animation:colorSwitch 8s ease-out 4.2s infinite alternate;	/* Firefox: */
							-webkit-animation:colorSwitch 8s ease-out 4.2s infinite alternate;
							-o-animation:colorSwitch 8s ease-out 4.2s infinite alternate;
							-ms-animation:colorSwitch 8s ease-out 4.2s infinite alternate;
						}
						
						 .headerText	 h3 span:nth-of-type(2) {
						animation:colorSwitch 8s ease-out 4.5s infinite alternate;
						-moz-animation:colorSwitch 8s ease-out 4.5s infinite alternate;
						-webkit-animation:colorSwitch 8s ease-out 4.5s infinite alternate;
						-o-animation:colorSwitch 8s ease-out 4.5s infinite alternate;
						-ms-animation:colorSwitch 8s ease-out 4.5s infinite alternate;
							}
							 .headerText	 h3 span:nth-of-type(3) {
							animation:colorSwitch 8s ease-out 4.8s infinite alternate;
							-moz-animation:colorSwitch 8s ease-out 4.8s infinite alternate;
							-webkit-animation:colorSwitch 8s ease-out 4.8s infinite alternate;
							-o-animation:colorSwitch 8s ease-out 4.8s infinite alternate;
							-ms-animation:colorSwitch 8s ease-out 4.8s infinite alternate;
							}
							 .headerText	 h3 span:nth-of-type(4) {
							animation:colorSwitch 8s ease-out 5.1s infinite alternate;
							-moz-animation:colorSwitch 8s ease-out 5.1s infinite alternate;
							-webkit-animation:colorSwitch 8s ease-out 5.1s infinite alternate;
							-o-animation:colorSwitch 8s ease-out 5.1s infinite alternate;
							-ms-animation:colorSwitch 8s ease-out 5.1s infinite alternate;
							}
							 .headerText	 h3 span:nth-of-type(5) {
							animation:colorSwitch 8s ease-out 5.4s infinite alternate;
							-moz-animation:colorSwitch 8s ease-out 5.4s infinite alternate;
							-webkit-animation:colorSwitch 8s ease-out 5.4s infinite alternate;
							-o-animation:colorSwitch 8s ease-out 5.4s infinite alternate;
							-ms-animation:colorSwitch 8s ease-out 5.4s infinite alternate;
							}
							 .headerText	 h3 span:nth-of-type(6) {
							animation:colorSwitch 8s ease-out 5.7s infinite alternate;
							-moz-animation:colorSwitch 8s ease-out 5.7s infinite alternate;
							-webkit-animation:colorSwitch 8s ease-out 5.7s infinite alternate;
							-o-animation:colorSwitch 8s ease-out 5.7s infinite alternate;
							-ms-animation:colorSwitch 8s ease-out 5.7s infinite alternate;
							}
							 .headerText	 h3 span:nth-of-type(7) {
							animation:colorSwitch 8s ease-out 6.0s infinite alternate;
							-moz-animation:colorSwitch 8s ease-out 6.0s infinite alternate;
							-webkit-animation:colorSwitch 8s ease-out 6.0s infinite alternate;
							-o-animation:colorSwitch 8s ease-out 6.0s infinite alternate;
							-ms-animation:colorSwitch 8s ease-out 6.0s infinite alternate;
							}
							 .headerText	 h3 span:nth-of-type(8) {
							animation:colorSwitch 8s ease-out 6.3s infinite alternate;
							-moz-animation:colorSwitch 8s ease-out 6.3s infinite alternate;
							-webkit-animation:colorSwitch 8s ease-out 6.3s infinite alternate;
							-o-animation:colorSwitch 8s ease-out 6.3s infinite alternate;
							-ms-animation:colorSwitch 8s ease-out 6.3s infinite alternate;
							}
							 .headerText	 h3 span:nth-of-type(9) {
							animation:colorSwitch 8s ease-out 6.6s infinite alternate;
							-moz-animation:colorSwitch 8s ease-out 6.6s infinite alternate;
							-webkit-animation:colorSwitch 8s ease-out 6.6s infinite alternate;
							-o-animation:colorSwitch 8s ease-out 6.6s infinite alternate;
							-ms-animation:colorSwitch 8s ease-out 6.6s infinite alternate;
							}
							 .headerText	 h3 span:nth-of-type(10) {
							animation:colorSwitch 8s ease-out 6.9s infinite alternate;
							-moz-animation:colorSwitch 8s ease-out 6.9s infinite alternate;
							-webkit-animation:colorSwitch 8s ease-out 6.9s infinite alternate;
							-o-animation:colorSwitch 8s ease-out 6.9s infinite alternate;
							-ms-animation:colorSwitch 8s ease-out 6.9s infinite alternate;
							}
							.headerText h3 span:nth-of-type(11) {
							animation:colorSwitch 8s ease-out 7.2s infinite alternate;
							-moz-animation:colorSwitch 8s ease-out 7.2s infinite alternate;
							-webkit-animation:colorSwitch 8s ease-out 7.2s infinite alternate;
							-o-animation:colorSwitch 8s ease-out 7.2s infinite alternate;
							-ms-animation:colorSwitch 8s ease-out 7.2s infinite alternate;
							}
							.headerText h3 span:nth-of-type(12) {
							animation:colorSwitch 8s ease-out 7.5s infinite alternate;
							-moz-animation:colorSwitch 8s ease-out 7.5s infinite alternate;
							-webkit-animation:colorSwitch 8s ease-out 7.5s infinite alternate;
							-o-animation:colorSwitch 8s ease-out 7.5s infinite alternate;
							-ms-animation:colorSwitch 8s ease-out 7.5s infinite alternate;
							}
							.headerText h3 span:nth-of-type(13) {
							animation:colorSwitch 8s ease-out 7.8s infinite alternate;
							-moz-animation:colorSwitch 8s ease-out 7.8s infinite alternate;
							-webkit-animation:colorSwitch 8s ease-out 7.8s infinite alternate;
							-o-animation:colorSwitch 8s ease-out 7.8s infinite alternate;
							-ms-animation:colorSwitch 8s ease-out 7.8s infinite alternate;
							}
							 .headerText	 h3 span:nth-of-type(14) {
							animation:colorSwitch 8s ease-out 8.1s infinite alternate;
							-moz-animation:colorSwitch 8s ease-out 8.1s infinite alternate;
							-webkit-animation:colorSwitch 8s ease-out 8.1s infinite alternate;
							-o-animation:colorSwitch 8s ease-out 8.1s infinite alternate;
							-ms-animation:colorSwitch 8s ease-out 8.1s infinite alternate;
							}
							 .headerText	 h3 span:nth-of-type(15) {
							animation:colorSwitch 8s ease-out 8.4s infinite alternate;
							-moz-animation:colorSwitch 8s ease-out 8.4s infinite alternate;
							-webkit-animation:colorSwitch 8s ease-out 8.4s infinite alternate;
							-o-animation:colorSwitch 8s ease-out 8.4s infinite alternate;
							-ms-animation:colorSwitch 8s ease-out 8.4s infinite alternate;
							}
							 .headerText	 h3 span:nth-of-type(16) {
							animation:colorSwitch 8s ease-out 8.7s infinite alternate;
							-moz-animation:colorSwitch 8s ease-out 8.7s infinite alternate;
							-webkit-animation:colorSwitch 8s ease-out 8.7s infinite alternate;
							-o-animation:colorSwitch 8s ease-out 8.7s infinite alternate;
							-ms-animation:colorSwitch 8s ease-out 8.7s infinite alternate;
							}
							.headerText h3 span:nth-of-type(17) {
							animation:colorSwitch 8s ease-out 9.0s infinite alternate;
							-moz-animation:colorSwitch 8s ease-out 9.0s infinite alternate;
							-webkit-animation:colorSwitch 8s ease-out 9.0s infinite alternate;
							-o-animation:colorSwitch 8s ease-out 9.0s infinite alternate;
							-ms-animation:colorSwitch 8s ease-out 9.0s infinite alternate;
							}
							.headerText h3 span:nth-of-type(18) {
							animation:colorSwitch 8s ease-out 9.3s infinite alternate;
							-moz-animation:colorSwitch 8s ease-out 9.3s infinite alternate;
							-webkit-animation:colorSwitch 8s ease-out 9.3s infinite alternate;
							-o-animation:colorSwitch 8s ease-out 9.3s infinite alternate;
							-ms-animation:colorSwitch 8s ease-out 9.3s infinite alternate;
							}
							.headerText h3 span:nth-of-type(19) {
							animation:colorSwitch 8s ease-out 9.6s infinite alternate;
							-moz-animation:colorSwitch 8s ease-out 9.6s infinite alternate;
							-webkit-animation:colorSwitch 8s ease-out 9.6s infinite alternate;
							-o-animation:colorSwitch 8s ease-out 9.6s infinite alternate;
							-ms-animation:colorSwitch 8s ease-out 9.6s infinite alternate;
							}
							


		
.hr	{
	width:100%;
	height:2px;
	margin:5px 0 10px 0;
	 background-color: rgb(57,105,24);
	animation:colorSwitch 8s ease-out 4.2s infinite alternate;	/* W3 */
							-moz-animation:background-colorSwitch 5s ease-out 1.2s infinite alternate;	/* Firefox: */
							-webkit-animation:background-colorSwitch 5s ease-out 1.2s infinite alternate;
							-o-animation:background-colorSwitch 5s ease-out 1.2s infinite alternate;
							-ms-animation:background-colorSwitch 5s ease-out 1.2s infinite alternate;
	display:block;
	}
	



footer	{
		width: 100%;
		display:block;
		text-align:center;
		font-size:1.1em;
		font-family:'BreeSerifRegular', Arial, sans-serif;
		margin:650px auto 0 auto;
		padding-top:5px;
		border-radius: 0px;
		color: rgb(227,125,0);
		
		background: rgba(0,0,0,1);
		
		box-shadow: 20px 17px 20px 9px rgba(19,19,19,.5), -20px 17px 20px 9px rgba(19,19,19,.5);
			border-top:solid 1px black;
			z-index:1005;
			float:left;
		}
    
    footer li	{
        padding: 15px;
        display:inline;
        list-style:none;
        }
        
    footer a, footer a:visited {
        color:#fff; 
        text-shadow:1px 1px #888;
        text-decoration:none;
        }
        
    footer a:hover	{
    color: rgb(255,153,0);
    text-shadow:2px 2px #000;
    }
	
	footer table	{
		font-size:.8em;
		}
		
		footer table td	{
	padding: 10px;
		}

</style>

		<script>
		  document.createElement('header');
		  document.createElement('footer');
		  document.createElement('section');
		  document.createElement('aside');
		  document.createElement('nav');
		  document.createElement('article');
		  document.createElement('video');
		</script>

		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/valid.js"></script> 
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/scroll.js"></script>
		<script type="text/javascript" src="js/slimbox2.js"></script>
		<script type="text/javascript" src="js/fade.js"></script>

<!-- Google Analytics -->           
           <script type="text/javascript">
			  var _gaq = _gaq || [];
			  _gaq.push(['_setAccount', 'UA-33670959-1']);
			  _gaq.push(['_trackPageview']);
			
			  (function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			  })();			
			</script>
<!-- End Google Analytics -->

</head>

<body onLoad="setTimeout(function() { window.scrollTo(0, 1) }, 100);">

<header>
        
        <p><img src="images/RenegadesTransShadow565X150.png" alt="Iowa Renegades logo" width="495" height="130" style="display:inline-block;"/></p>
        
        <div class="menu">
            	<a  class="home buttons" href="http://www.iowarenegades.com/#homei">HOME</a>
                <a  class="tryouts buttons" href="http://www.iowarenegades.com/#tryoutsi">TRYOUTS</a>
                <a  class="teams buttons" href="http://www.iowarenegades.com/#teamsi">TEAMS</a>
                <a  class="contact buttons" href="http://www.iowarenegades.com/#contacti">CONTACT</a>
            	<a  class="about buttons" href="http://www.iowarenegades.com/#abouti">ABOUT</a>
		</div><!--menu-->
           
</header>

<!-- =============ParallaxPages============== -->

<div id="contentWrapper">


<div id="content">
		<div id="homei">
        	
        
        <div class="mainWrapper">
<div class="headerText">
                  
				<h3>
                    <span>T</span>
                    <span>H</span>
                    <span>A</span>
                    <span>N</span>
                    <span>K</span>
                    <span>S</span>
                </h3>
              </div><!--end  headerText	 -->
              
               <div class="hr" style="margin-top:8px;"></div>
                <h2 style="margin:0 auto; line-height:1.4em;">Your registration for the <br>
                2014 Iowa Renegades 
                <br>was successfully submitted. We look forward to seeing you there.
                <br>
                <br/><a href="http://www.iowarenegades.com/#tryoutsi" style="color:#003300">Back</a></h2>
        
      </div><!--mainWrapper-->

</div>

</div><!--content-->



</div><!-- contentWrapper-->
 
 


</body>
</html>