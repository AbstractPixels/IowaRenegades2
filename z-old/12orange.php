<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


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

 /* Accordian Stylesheet */

/*****Reset*****/
html, body, div, h1, h2, h3, h4, h5, h6, ul, ol, dl, li, dt, dd, p, blockquote, pre, form, fieldset, table, th, td { margin: 0; padding: 0; }

/*****Basic Definitions*****/
body { background: black; color: orange; font: 16px/20px "BreeSerifRegular", Georgia, "Times New Roman", Times, serif; }
h1 { font-size: 24px; line-height: 30px; margin-bottom: 18px; }

a { }
a:visited { }
a:hover { text-decoration: none; }
img { border: none; }
p, ul, ol, dl, table { margin-bottom: 18px; }
ul, ol, dd { margin-left: 0px; }

/*****Custom Classes*****/
.clearing { clear: both; }
.clearfix { overflow: hidden; }
.last { margin-bottom: 0; }
.screenReader { left: -9999px; position: absolute; top: -9999px; }

/*****Basic Layout*****/

#mainWrapper	{
	width:690px;
	height:100%;
	display:block;
	border: solid 1px blue;
	position:relative;
	background-color:black;
	}

div#container { margin: 0; overflow: hidden; padding: 0px 0; width: 260px;border: solid 1px limegreen;display:inline-block;top:0;position:absolute; }

/*****Accordion Styles*****/
ul#accordion, ul#accordion ul { list-style: none; margin: 0;text-shadow: none;  }
ul#accordion { border-bottom: 1px solid #000E2E; }
                  
ul#accordion li { width:240px;display:block;border: 1px solid #000E2E; border-bottom: none;overflow:hidden;text-shadow: 0px 1px 2px white;  }
ul#accordion li:first-child { }

ul#accordion ul li { width:212px;display:block;border: none; border-bottom: 1px solid green; color: orange; padding: 5px 10px;font-family: 'EnigmaticRegular', Arial, sans-serif;text-shadow: none;  }
ul#accordion ul li:last-child { border-bottom: 1p solid green; }
ul#accordion a.heading { 
	background: rgb(255,149,83);
background: -moz-linear-gradient(top,  rgb(255,149,83) 0%, rgb(254,102,0) 50%, rgb(190,76,0) 51%, rgb(255,133,51) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(255,149,83)), color-stop(50%,rgb(254,102,0)), color-stop(51%,rgb(190,76,0)), color-stop(100%,rgb(255,133,51)));
background: -webkit-linear-gradient(top,  rgb(255,149,83) 0%,rgb(254,102,0) 50%,rgb(190,76,0) 51%,rgb(255,133,51) 100%);
background: -o-linear-gradient(top,  rgb(255,149,83) 0%,rgb(254,102,0) 50%,rgb(190,76,0) 51%,rgb(255,133,51) 100%);
background: -ms-linear-gradient(top,  rgb(255,149,83) 0%,rgb(254,102,0) 50%,rgb(190,76,0) 51%,rgb(255,133,51) 100%);
background: linear-gradient(to bottom,  rgb(255,149,83) 0%,rgb(254,102,0) 50%,rgb(190,76,0) 51%,rgb(255,133,51) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff9553', endColorstr='#ff8533',GradientType=0 );

	color: white;
	display: block;
	font-size: 21px;
	line-height: 20px;
	padding: 10px 5px;
	text-decoration: none;
}
ul#accordion a.heading:hover { 
background: rgb(0,168,11);
background: -moz-linear-gradient(top,  rgb(0,168,11) 0%, rgb(0,126,11) 50%, rgb(0,94,8) 51%, rgb(0,152,13) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(0,168,11)), color-stop(50%,rgb(0,126,11)), color-stop(51%,rgb(0,94,8)), color-stop(100%,rgb(0,152,13)));
background: -webkit-linear-gradient(top,  rgb(0,168,11) 0%,rgb(0,126,11) 50%,rgb(0,94,8) 51%,rgb(0,152,13) 100%);
background: -o-linear-gradient(top,  rgb(0,168,11) 0%,rgb(0,126,11) 50%,rgb(0,94,8) 51%,rgb(0,152,13) 100%);
background: -ms-linear-gradient(top,  rgb(0,168,11) 0%,rgb(0,126,11) 50%,rgb(0,94,8) 51%,rgb(0,152,13) 100%);
background: linear-gradient(to bottom,  rgb(0,168,11) 0%,rgb(0,126,11) 50%,rgb(0,94,8) 51%,rgb(0,152,13) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00a80b', endColorstr='#00980d',GradientType=0 );

color: #fff; }
ul#accordion li.ui-accordion-selected a.heading, ul#accordion li.current a.heading { 
background: rgb(0,168,11);
background: -moz-linear-gradient(top,  rgb(0,168,11) 0%, rgb(0,126,11) 50%, rgb(0,94,8) 51%, rgb(0,152,13) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(0,168,11)), color-stop(50%,rgb(0,126,11)), color-stop(51%,rgb(0,94,8)), color-stop(100%,rgb(0,152,13)));
background: -webkit-linear-gradient(top,  rgb(0,168,11) 0%,rgb(0,126,11) 50%,rgb(0,94,8) 51%,rgb(0,152,13) 100%);
background: -o-linear-gradient(top,  rgb(0,168,11) 0%,rgb(0,126,11) 50%,rgb(0,94,8) 51%,rgb(0,152,13) 100%);
background: -ms-linear-gradient(top,  rgb(0,168,11) 0%,rgb(0,126,11) 50%,rgb(0,94,8) 51%,rgb(0,152,13) 100%);
background: linear-gradient(to bottom,  rgb(0,168,11) 0%,rgb(0,126,11) 50%,rgb(0,94,8) 51%,rgb(0,152,13) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00a80b', endColorstr='#00980d',GradientType=0 );
color: #fff; }
ul#accordion li ul a { color: orange; text-decoration: none; }
ul#accordion li ul a:hover { border-bottom: none; }
ul#accordion li ul .date { padding-right: 10px; color:white; }
ul#accordion li ul .count { padding-left: 10px; }

/*****Additional Custom Accordion Styles*****/
body#customAccordion ul#accordion li ul { display: none; }
body#customAccordion ul#accordion li.current ul { display: block; }


/*****Content div*****/
#contentDiv	{
	width:420px;
	height:650px;
	left:265px;
	display:block;
	border:solid 1px cyan;
	position:absolute;
	overflow:hidden;
	background-color:black;
	}
	
	#teami, #player1i, #player2i, #player3i, #player4i, #player5i, #player6i, #player7i, #player8i, #player9i, #player10i, #player11i, #player12i, #player13i, #player14i, #player15i	{
		margin:0 auto;
	visibility: visible;
	position: absolute;
	height:650px;
	background-image:url(images/softball-green-stitches1000.png);
	width: 100%;
	top: 0px;
	padding:0px;
	background-size:contain;
	background-position:center top;
	background-repeat:no-repeat;
	display:block;
}




#player1i, #player2i {}
	
#teami		{	
	left:0px; 
	
	font-size:16px;
	
	}
	
#player1i 	{
	left:6000px;	
	}
	
#player2i 	{	left:12000px;}
#player3i 		{	left:18000px;}
#player4i 		{	left:24000px;}
#player5i 	{	left:30000px;}
#player6i 	{	left:36000px;}
#player7i 	{	left:42000px;}
#player8i 	{	left:48000px;}
#player9i 	{	left:54000px;}
#player10i 	{	left:60000px;}
#player11i 	{	left:66000px;}
#player12i 	{	left:72000px;}
#player13i 	{	left:78000px;}
#player14i 	{	left:84000px;}


	#registeri .headerText		{
		margin:60px auto 0 auto;
		}
		
		#teamsi .headerText		{
		font-size:17px;
		}
       
        </style>
        
        <script type="text/javascript" src="../js/jquery.min.js"></script>
		<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="../js/scroll2.js"></script>
        
        
<script type="text/javascript" src="../js/jquery-scrollTo.js"></script>  
        <script type="text/javascript" src="../js/accordion2.js"></script>


</head>



 
 
        
     
 
 
 <body id="customAccordion" onLoad="setTimeout(function() { window.scrollTo(0, 1) }, 100);"> 
 <div id="mainWrapper">
<div id="container">
     <?php $section = $_GET['section']; ?>  
    <ul id="accordion">  
        <li<?php if($section == '' || $section == 'roster'): ?> class=""<?php endif; ?>>  
            <a href="?section=roster" class="heading">ROSTER</a>  
            <ul id="roster">   
                        <li><a href="#player1" class="player1 buttons">Hannah Blackford</a></li>  
                        <li><a href="#player2" class="player2 buttons">Megan Coleman</a></li>
                        <li><a href="#player3" class="player3 buttons">Brianna Colwell</a></li> 
                        <li><a href="#player4" class="player4 buttons">Macy Herselius</a></li> 
                        <li><a href="#player5" class="player5 buttons">Lyric McKinney</a></li> 
                        <li><a href="#player6" class="player6 buttons">Aspen Mulstay</a></li>
                        <li><a href="#player7" class="player7 buttons">Rabecka Parker</a></li>
                        <li><a href="#player8" class="player8 buttons">Hannah Poortinga</a></li> 
                        <li><a href="#player9" class="player9 buttons">Jade Sharp</a></li>
                        <li><a href="#player10" class="player10 buttons">Jayda Tolentino</a></li>
                        <li><a href="#player11" class="player11 buttons">Lauren Wignall</a></li>            
            </ul>  
        </li>  
        
        <li<?php if($section == 'schedule'): ?> class=""<?php endif; ?>>  
            <a href="?section=schedule" class="heading">SCHEDULE</a>  
            <ul id="schedule">              
            
                <li><span class="date">09.14.2012</span>
                	<br/> <a href="#">Fall State
                    <br/>Altoona Fields</a>
                </li>  
                <li><span class="date">09.22.2012</span>
                	<br/> <a href="#">SDM Fall Classic
                    <br/>SDM Fields</a>
                </li>  
                <li><span class="date">10.12.2012</span>
                	<br/> <a href="#">Fall Freeze Out
                    <br/>Raccoon River in WDM.</a>
                </li>  
         
            </ul>  
        </li>  
        <li<?php if($section == 'results'): ?> class=""<?php endif; ?>>  
            <a href="?section=results" class="heading">RESULTS</a>  
            <ul id="results">  
                <li>Fall Kickoff Classic - 1st place</li>    
            </ul>  
        </li>  
       
    </ul> 
    </div><!-- container-->
    <div id="contentDiv">
    
    	<div id="teami">
        <p>
        TEAMS
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." 
        </p>
        
        </div>
    
    
    <div id="player1i">
        <p>
        PLAYER1
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." 
        </p>
        
        </div>
    <div id="player2i">
        <p>
        PLAYER2
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." 
        </p>
       
        </div>
    <div id="player3i">
        <p>
        PLAYER3
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." 
        </p>
       
        </div>
    <div id="player4i">
        <p>
        PLAYER4
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." 
        </p>
       
        </div>
    <div id="player5i">
        <p>
        PLAYER5
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." 
        </p>
        
        </div>
    <div id="player6i">
        <p>
        PLAYER6
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." 
        </p>
        
        </div>
    <div id="player7i">
        <p>
        PLAYER7
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." 
        </p>
        
        </div>
    <div id="player8i">
        <p>
        PLAYER8
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." 
        </p>
        
        </div>
    <div id="player9i">
        <p>
        PLAYER9
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." 
        </p>
        
        </div>
    <div id="player10i">
        <p>
        PLAYER10
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." 
        </p>
        
        </div>
    <div id="player11i">
        <p>
        PLAYER11
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." 
        </p>
        
        </div>
    <div id="player12i">
        <p>
        PLAYER12
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." 
        </p>
        
        </div>
    <div id="player13i">
        <p>
        PLAYER13
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." 
        </p>
        
        </div>
    
    </div>
    </div><!--mainWrapper--> 

</body>
</html>
