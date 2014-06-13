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
body { background-color:transparent; color: orange; font: 16px/20px "BreeSerifRegular", Georgia, "Times New Roman", Times, serif; }
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
	width:960px;
	height:100%;
	display:block;
/******	border: solid 1px blue; *****/
	position:relative;
	}

div#container { margin: 0; overflow: hidden; padding: 0px 0; width: 260px;display:inline-block;top:0;position:absolute; }

/*****Accordion Styles*****/
ul#accordion, ul#accordion ul { list-style: none; margin: 0;  }
ul#accordion {}
                  
ul#accordion li { width:250px;display:block;color:green;background-color:black;margin:5px;border-bottom: none;overflow:hidden;text-shadow:1px 1px 1px #000;border-radius: 8px;
						-webkit-border-radius: 8px;
						-moz-border-radius: 8px;
						-ms-border-radius: 8px;
					box-shadow: 2px 2px 6px black, -2px -2px 6px black;
						-moz-box-shadow: 2px 2px 6px black, -2px -2px 6px black;
						-webkit-box-shadow: 2px 2px 6px black, -2px -2px 6px black;
						-ms-box-shadow: 2px 2px 6px black, -2px -2px 6px black;  }
ul#accordion li:first-child { }

ul#accordion ul li { width:252px;display:block;border: none;border-bottom: 1px solid green; color: orange;padding: 5px 10px;font-family: 'EnigmaticRegular', Arial, sans-serif;text-shadow: none;
border-radius: 0;
						-webkit-border-radius: 0;
						-moz-border-radius: 0;
						-ms-border-radius: 0;
box-shadow: none;
						-moz-box-shadow: none;
						-webkit-box-shadow: none;
						-ms-box-shadow: none;  }
ul#accordion ul li:last-child { border-bottom: 1p solid green; }
ul#accordion a.heading { 
/*	background: rgb(255,149,83);
background: -moz-linear-gradient(top,  rgb(255,149,83) 0%, rgb(254,102,0) 50%, rgb(190,76,0) 51%, rgb(255,133,51) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(255,149,83)), color-stop(50%,rgb(254,102,0)), color-stop(51%,rgb(190,76,0)), color-stop(100%,rgb(255,133,51)));
background: -webkit-linear-gradient(top,  rgb(255,149,83) 0%,rgb(254,102,0) 50%,rgb(190,76,0) 51%,rgb(255,133,51) 100%);
background: -o-linear-gradient(top,  rgb(255,149,83) 0%,rgb(254,102,0) 50%,rgb(190,76,0) 51%,rgb(255,133,51) 100%);
background: -ms-linear-gradient(top,  rgb(255,149,83) 0%,rgb(254,102,0) 50%,rgb(190,76,0) 51%,rgb(255,133,51) 100%);
background: linear-gradient(to bottom,  rgb(255,149,83) 0%,rgb(254,102,0) 50%,rgb(190,76,0) 51%,rgb(255,133,51) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff9553', endColorstr='#ff8533',GradientType=0 );
*******************/
	background-image:url(../images/orangeGlossFadeButton2.png);
	background-repeat:no-repeat;
	background-size:100% 100%;
	color:#006600;
	display: block;
	font-size: 21px;
	line-height: 29px;
	padding: 10px 5px 10px 10px;
	text-decoration: none;
	height:28px;
	text-shadow:1px 1px #888;
}
ul#accordion a.heading:hover { 
/************************
background: rgb(0,168,11);
background: -moz-linear-gradient(top,  rgb(0,168,11) 0%, rgb(0,126,11) 50%, rgb(0,94,8) 51%, rgb(0,152,13) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(0,168,11)), color-stop(50%,rgb(0,126,11)), color-stop(51%,rgb(0,94,8)), color-stop(100%,rgb(0,152,13)));
background: -webkit-linear-gradient(top,  rgb(0,168,11) 0%,rgb(0,126,11) 50%,rgb(0,94,8) 51%,rgb(0,152,13) 100%);
background: -o-linear-gradient(top,  rgb(0,168,11) 0%,rgb(0,126,11) 50%,rgb(0,94,8) 51%,rgb(0,152,13) 100%);
background: -ms-linear-gradient(top,  rgb(0,168,11) 0%,rgb(0,126,11) 50%,rgb(0,94,8) 51%,rgb(0,152,13) 100%);
background: linear-gradient(to bottom,  rgb(0,168,11) 0%,rgb(0,126,11) 50%,rgb(0,94,8) 51%,rgb(0,152,13) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00a80b', endColorstr='#00980d',GradientType=0 );
*************************************/
background-image:url(../images/greenGlossFadeButton2.png);
background-repeat:no-repeat;
color: #fff;
text-shadow:1px 1px #888;
 }
ul#accordion li.ui-accordion-selected a.heading, ul#accordion li.current a.heading { 
/****************************
background: rgb(0,168,11);
background: -moz-linear-gradient(top,  rgb(0,168,11) 0%, rgb(0,126,11) 50%, rgb(0,94,8) 51%, rgb(0,152,13) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(0,168,11)), color-stop(50%,rgb(0,126,11)), color-stop(51%,rgb(0,94,8)), color-stop(100%,rgb(0,152,13)));
background: -webkit-linear-gradient(top,  rgb(0,168,11) 0%,rgb(0,126,11) 50%,rgb(0,94,8) 51%,rgb(0,152,13) 100%);
background: -o-linear-gradient(top,  rgb(0,168,11) 0%,rgb(0,126,11) 50%,rgb(0,94,8) 51%,rgb(0,152,13) 100%);
background: -ms-linear-gradient(top,  rgb(0,168,11) 0%,rgb(0,126,11) 50%,rgb(0,94,8) 51%,rgb(0,152,13) 100%);
background: linear-gradient(to bottom,  rgb(0,168,11) 0%,rgb(0,126,11) 50%,rgb(0,94,8) 51%,rgb(0,152,13) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00a80b', endColorstr='#00980d',GradientType=0 );
******************************/
background-image:url(../images/greenGlossFadeButton2.png);
background-repeat:no-repeat;
color: #fff; 
text-shadow:1px 1px #888;
}
ul#accordion li ul a { color: orange; text-decoration: none; }
ul#accordion li ul a:hover { border-bottom: none; }
ul#accordion li ul .date { padding-right: 10px; color:white; }
ul#accordion li ul .count { padding-left: 10px; }

/*****Additional Custom Accordion Styles*****/
body#customAccordion ul#accordion li ul { display: none; }
body#customAccordion ul#accordion li.current ul { display: block; }


/*****Content div*****/
#contentDiv	{
	width:400px;
	height:650px;
	left:275px;
	display:block;
/**************	border:solid 1px cyan; ******/
	position:absolute;
	overflow:hidden;
	text-align:center;
	background-color:transparent;
	}
	
	#contentDiv	 a {
	color: orange;
	text-decoration:none;
	}
	
	#teami, #player1i, #player2i, #player3i, #player4i, #player5i, #player6i, #player7i, #player8i, #player9i, #player10i, #player11i, #player12i, #player13i, #player14i, #player15i	{
		margin:0 auto;
	visibility: visible;
	position: absolute;
	height:650px;
	
	width: 100%;
	top: 0px;
	padding:15px 0 0 0px;
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
		
		
		
		#playerNumber	{
			width:80px;
			color:green;
			font-family:Impact, sans-serif;
			font-size:72px;
			padding:0 20px 0 25px;
			}
		
		.category	{
		width:50px;
			font:italic normal 100% 'EnigmaticRegular', sans-serif;
			text-align:right;
			padding:6px 5px 0 0;
			}
					#teami .category	{
						font-size:80%;
						}
			
			.info	{
			padding:0 0 0 0px;
				text-align:left;
				font-weight:lighter;
				font-size:130%;
				color:white;
				}
				
				table	{
				width:410px;
				margin-top:20px;
				}
				
				td	{
					
					padding:5px;
					}
					
					#fb-box	{
						background-color:black;
						float:right;
						width:275px;
						height:620px;
						margin: 5px 5px 0 0;
						display:block;
						position:relative;
						z-index:1005;
						border:solid 2px green;
						border-radius: 5px;
						-webkit-border-radius: 5px;
						-moz-border-radius: 5px;
						-ms-border-radius: 5px;
					box-shadow: 2px 2px 6px black, -2px -2px 6px black;
						-moz-box-shadow: 2px 2px 6px black, -2px -2px 6px black;
						-webkit-box-shadow: 2px 2px 6px black, -2px -2px 6px black;
						-ms-box-shadow: 2px 2px 6px black, -2px -2px 6px black;  }
						
       
        </style>
        <!--[if IE 8]>
<style>
       
        body 	{
	background-color:black;}
    </style>
    
    <![endif]--> 

        
        <script type="text/javascript" src="../js/jquery.min.js"></script>
		<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="../js/scroll2.js"></script>
        
        
<script type="text/javascript" src="../js/jquery-scrollTo.js"></script>  
        <script type="text/javascript" src="../js/accordion2.js"></script>


</head>



 
 
        
     
 
 
 <body id="customAccordion" onLoad="setTimeout(function() { window.scrollTo(0, 1) }, 100);"> 
 
 
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

 <div id="mainWrapper">
 
 <div id="fb-box" class="fb-like-box" data-href="https://www.facebook.com/pages/Iowa-Renegades-12u-Orange-Green/317210051676259" data-width="275" data-height="620" data-colorscheme="dark" data-show-faces="false" data-stream="true" data-header="true"></div> 
 
<div id="container">
     <?php $section = $_GET['section']; ?>  
    <ul id="accordion">  
    
    	 <li<?php if($section == '' || $section == 'main'): ?> class=""<?php endif; ?>>  
            <a href="#team" class="heading team buttons">MAIN</a>  
        </li>  
    
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
                	<br/> <a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=870524" target="_new">Fall State
                    <br/>Altoona Fields</a>
                </li>  
                <li><span class="date">09.22.2012</span>
                	<br/> <a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=874683" target="_new">SDM Fall Classic
                    <br/>SDM Fields</a>
                </li>  
                <li><span class="date">10.12.2012</span>
                	<br/> <a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=874707" target="_new">Fall Freeze Out
                    <br/>Raccoon River in WDM.</a>
                </li> 
                <li><span class="date">10.26.2012</span>
                	<br/> <a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=884233" target="_new">Monster Stomp
                    <br/>Bellevue, NE</a>
                </li>   
         
            </ul>  
        </li>  
        <li<?php if($section == 'results'): ?> class=""<?php endif; ?>>  
            <a href="?section=results" class="heading">RESULTS</a>  
            <ul id="results">  
                <li>Fall Kickoff Classic - <span style="font-size:150%">1st</span></li>    
            </ul>  
        </li>  
       
    </ul> 
    </div><!-- container-->
    
    <div id="contentDiv">
    
    	<div id="teami">
        <p>
         <table style="">
        
        	
            <tr>
        	<td rowspan="4"  width="" style="width:90px;text-align:center;font-size:18px;padding-left:10px;">OVERALL RECORD<br/>
            <span style="font-size:33px;color:green;">4-1</span></td>
        </tr>
            <tr>
           	  <td width="100" class="category" style="width:90px;">
                	HEAD COACH:
              </td>
                <td class="info">
                	Geoff Herselius
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	ASST. COACH:
              </td>
                <td  class="info">
                	Bill Sharp
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	ASST. COACH:
              </td>
                <td class="info">
                	Chris Shelton
              </td>
            </tr>
      </table>
        </p>
        
        <p style="font-size:14px;"><a href="http://www.usssa.com/sports/Team3.asp?TeamID=1837343" title="Iowa Renegades USSSA page" target="_blank">
        			<img src="../images/USSSA_Logo.gif" width="181" height="45" alt="USSSA Logo">
                    <br/>Click to view the USSSA page for this team.
        		</a></p>
                       
      </div>
    
    
    <div id="player1i">
    	
    	<img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <table style="">
        
        	<tr>
           	  <td colspan="3" style="text-align:center; font-size:190%;">
                	Hannah Blackford
              </td>
            </tr>
            <tr>
        	<td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">02</div></td>
        </tr>
            <tr>
           	  <td width="50" class="category">
                	NICKNAME:
              </td>
                <td class="info">
                	Boo
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	POSITIONS:
              </td>
                <td  class="info">
                	P | SS | OF 
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	BATS:
              </td>
                <td class="info">
                	Right | Left
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	THROWS:
              </td>
                <td class="info">
                	Right
              </td>
            </tr>
      </table>
        
        </div>
    <div id="player2i">
       <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <table style="">
        
        	<tr>
           	  <td colspan="3" style="text-align:center; font-size:190%;">
                	Megan Coleman
              </td>
            </tr>
            <tr>
        	<td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">7</div></td>
        </tr>
            <tr>
           	  <td width="50" class="category">
                	NICKNAME:
              </td>
                <td class="info">
                	M.C. Hammer
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	POSITIONS:
              </td>
                <td  class="info">
                	P | OF | SS 
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	BATS:
              </td>
                <td class="info">
                	Right
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	THROWS:
              </td>
                <td class="info">
                	Right
              </td>
            </tr>
      </table>
        </div>
    <div id="player3i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <table style="">
        
        	<tr>
           	  <td colspan="3" style="text-align:center; font-size:190%;">
                	Brianna Colwell
              </td>
            </tr>
            <tr>
        	<td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">00</div></td>
        </tr>
            <tr>
           	  <td width="50" class="category">
                	NICKNAME:
              </td>
                <td class="info">
                	Breezy
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	POSITIONS:
              </td>
                <td  class="info">
                	P | OF | SS 
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	BATS:
              </td>
                <td class="info">
                	Right
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	THROWS:
              </td>
                <td class="info">
                	Right
              </td>
            </tr>
      </table>
        </div>
    <div id="player4i">
        <p>
       <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <table style="">
        
        	<tr>
           	  <td colspan="3" style="text-align:center; font-size:190%;">
                	Macy Herselius
              </td>
            </tr>
            <tr>
        	<td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">99</div></td>
        </tr>
            <tr>
           	  <td width="50" class="category">
                	NICKNAME:
              </td>
                <td class="info">
                	Hershey
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	POSITIONS:
              </td>
                <td  class="info">
                	C | 1st | OF 
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	BATS:
              </td>
                <td class="info">
                	Right
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	THROWS:
              </td>
                <td class="info">
                	Right
              </td>
            </tr>
      </table>
        </div>
    <div id="player5i">
       <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <table style="">
        
        	<tr>
           	  <td colspan="3" style="text-align:center; font-size:190%;">
                	Lyric McKinney
              </td>
            </tr>
            <tr>
        	<td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">20</div></td>
        </tr>
            <tr>
           	  <td width="50" class="category">
                	NICKNAME:
              </td>
                <td class="info">
                	Speed
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	POSITIONS:
              </td>
                <td  class="info">
                	3rd | OF | SS 
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	BATS:
              </td>
                <td class="info">
                	Right
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	THROWS:
              </td>
                <td class="info">
                	Right
              </td>
            </tr>
      </table>
        </div>
    <div id="player6i">
        <p>
       <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <table style="">
        
        	<tr>
           	  <td colspan="3" style="text-align:center; font-size:190%;">
                	Aspen Mulstay
              </td>
            </tr>
            <tr>
        	<td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">6</div></td>
        </tr>
            <tr>
           	  <td width="50" class="category">
                	NICKNAME:
              </td>
                <td class="info">
                	"Smiling" Turtle
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	POSITIONS:
              </td>
                <td  class="info">
                	OF | SS 
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	BATS:
              </td>
                <td class="info">
                	Right
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	THROWS:
              </td>
                <td class="info">
                	Right
              </td>
            </tr>
      </table>
        </div>
    <div id="player7i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <table style="">
        
        	<tr>
           	  <td colspan="3" style="text-align:center; font-size:190%;">
                	Rabecka Parker
              </td>
            </tr>
            <tr>
        	<td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">0</div></td>
        </tr>
            <tr>
           	  <td width="50" class="category">
                	NICKNAME:
              </td>
                <td class="info">
                	Bunny
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	POSITIONS:
              </td>
                <td  class="info">
                	 OF | 3rd 
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	BATS:
              </td>
                <td class="info">
                	Right
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	THROWS:
              </td>
                <td class="info">
                	Right
              </td>
            </tr>
      </table>
        </div>
    <div id="player8i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <table style="">
        
        	<tr>
           	  <td colspan="3" style="text-align:center; font-size:190%;">
                	Hannah Poortinga
              </td>
            </tr>
            <tr>
        	<td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">24</div></td>
        </tr>
            <tr>
           	  <td width="50" class="category">
                	NICKNAME:
              </td>
                <td class="info">
                	Rae Gun
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	POSITIONS:
              </td>
                <td  class="info">
                	1st | C | OF
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	BATS:
              </td>
                <td class="info">
                	Right
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	THROWS:
              </td>
                <td class="info">
                	Right
              </td>
            </tr>
      </table>
        </div>
    <div id="player9i">
       <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
         <table style="">
        
        	<tr>
           	  <td colspan="3" style="text-align:center; font-size:190%;">
                	Jade Sharp
              </td>
            </tr>
            <tr>
        	<td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">18</div></td>
        </tr>
            <tr>
           	  <td width="50" class="category">
                	NICKNAME:
              </td>
                <td class="info">
                	Sonic
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	POSITIONS:
              </td>
                <td  class="info">
                	2nd | OF | SS 
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	BATS:
              </td>
                <td class="info">
                	Right | Left
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	THROWS:
              </td>
                <td class="info">
                	Right
              </td>
            </tr>
      </table>
        </div>
    <div id="player10i">
       <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <table style="">
        
        	<tr>
           	  <td colspan="3" style="text-align:center; font-size:190%;">
                	Jayda Tolentino
              </td>
            </tr>
            <tr>
        	<td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">0</div></td>
        </tr>
            <tr>
           	  <td width="50" class="category">
                	NICKNAME:
              </td>
                <td class="info">
                	Dynamite
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	POSITIONS:
              </td>
                <td  class="info">
                	OF | 2nd 
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	BATS:
              </td>
                <td class="info">
                	Right
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	THROWS:
              </td>
                <td class="info">
                	Right
              </td>
            </tr>
      </table>
        </div>
    <div id="player11i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <table style="">
        
        	<tr>
           	  <td colspan="3" style="text-align:center; font-size:190%;">
                	Lauren Wignall
              </td>
            </tr>
            <tr>
        	<td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">21</div></td>
        </tr>
            <tr>
           	  <td width="50" class="category">
                	NICKNAME:
              </td>
                <td class="info">
                	Smiley
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	POSITIONS:
              </td>
                <td  class="info">
                	SS | 3rd | OF
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	BATS:
              </td>
                <td class="info">
                	Right
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	THROWS:
              </td>
                <td class="info">
                	Right
              </td>
            </tr>
      </table>
        </div>
    <div id="player12i">
     <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <table style="">
        
        	<tr>
           	  <td colspan="3" style="text-align:center; font-size:190%;">
                	Megan Coleman
              </td>
            </tr>
            <tr>
        	<td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">7</div></td>
        </tr>
            <tr>
           	  <td width="50" class="category">
                	NICKNAME:
              </td>
                <td class="info">
                	M.C. Hammer
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	POSITIONS:
              </td>
                <td  class="info">
                	Pitcher | OF | SS 
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	BATS:
              </td>
                <td class="info">
                	Right
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	THROWS:
              </td>
                <td class="info">
                	Right
              </td>
            </tr>
      </table>
        </div>
    <div id="player13i">
        <p>
       <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <table style="">
        
        	<tr>
           	  <td colspan="3" style="text-align:center; font-size:190%;">
                	Megan Coleman
              </td>
            </tr>
            <tr>
        	<td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">7</div></td>
        </tr>
            <tr>
           	  <td width="50" class="category">
                	NICKNAME:
              </td>
                <td class="info">
                	M.C. Hammer
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	POSITIONS:
              </td>
                <td  class="info">
                	Pitcher | OF | SS 
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	BATS:
              </td>
                <td class="info">
                	Right
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	THROWS:
              </td>
                <td class="info">
                	Right
              </td>
            </tr>
      </table>
        </div>
    
    </div><!-- contentDiv-->
    
    </div><!--mainWrapper--> 

</body>
</html>
