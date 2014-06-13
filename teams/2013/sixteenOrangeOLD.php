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
body { background: none; color: orange; font: 16px/20px "BreeSerifRegular", Georgia, "Times New Roman", Times, serif; }
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
/******	border: solid 1px blue; *****/
	position:relative;
	}

div#container { margin: 0; overflow: hidden; padding: 0px 0; width: 260px;display:inline-block;top:0;position:absolute; }

/*****Accordion Styles*****/
ul#accordion, ul#accordion ul { list-style: none; margin: 0;  }
ul#accordion {}
                  
ul#accordion li { width:215px;display:block;color:green;background-color:black;margin:5px;border-bottom: none;overflow:hidden;text-shadow:1px 1px 1px #000;border-radius: 5px;
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
	width:410px;
	height:650px;
	left:275px;
	display:block;
/**************	border:solid 1px cyan; ******/
	position:absolute;
	overflow:hidden;
	text-align:center;background-color:black;
	}
	
	#contentDiv	 a {
	color: orange;
	text-decoration:none;
	}
	
	#teami, #player1i, #player2i, #player3i, #player4i, #player5i, #player6i, #player7i, #player8i, #player9i, #player10i, #player11i, #player12i, #player13i, #player14i, #player15i, #googleCalendari	{
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
#googleCalendari	{left:90000px;}


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
                        
                        
                        #teamPic
		{
		width:318px;
		height:240px;
		overflow:hidden;
		position:relative;
		margin:0 auto 0px auto;
		display:block;
		border:solid 2px green;
						border-radius: 5px;
						-webkit-border-radius: 5px;
						-moz-border-radius: 5px;
						-ms-border-radius: 5px;
		}
						
						
						
						#usssaStatsiFrameWrapper
		{
		width:310px;
		height:180px;
		overflow:hidden;
		position:relative;
		margin:0 auto 10px auto;
		display:block;
		border:solid 2px green;
						border-radius: 5px;
						-webkit-border-radius: 5px;
						-moz-border-radius: 5px;
						-ms-border-radius: 5px;
					box-shadow: 2px 2px 6px black, -2px -2px 6px black;
						-moz-box-shadow: 2px 2px 6px black, -2px -2px 6px black;
						-webkit-box-shadow: 2px 2px 6px black, -2px -2px 6px black;
						-ms-box-shadow: 2px 2px 6px black, -2px -2px 6px black; 
		}
	
	#usssaStats	{
	border-radius:  7px;
	-moz-border-radius:  7px;
	-webkit-border-radius:  7px;
	-o-border-radius:  7px;
	-ms-border-radius:  7px;
	position:absolute;
	top:-328px;
	left:-195px;
	width:1280px;
	height:1200px;
	margin:0 auto;
	display:block;
		}
		
		#googleCalendarWrapper	{
			width:390px;
			height:400px;
			display:block;
			border:solid 2px green;
						border-radius: 5px;
						-webkit-border-radius: 5px;
						-moz-border-radius: 5px;
						-ms-border-radius: 5px;
						}
                        
                        
                        </style>
        <!--[if IE 8]>
<style>
       
        body 	{
	background-color:black;}
    </style>
    
    <![endif]--> <script type="text/javascript" src="../js/jquery.min.js"></script>
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
    
    	 <li<?php if($section == '' || $section == 'main'): ?> class=""<?php endif; ?>>  
            <a href="#team" class="heading team buttons">MAIN</a>  
        </li>  
    
        <li<?php if($section == '' || $section == 'roster'): ?> class=""<?php endif; ?>>  
            <a href="?section=roster" class="heading">ROSTER</a>  
            <ul id="roster">   
                        <li><a href="#player1" class="player1 buttons">Jordyn Achenbach</a></li>  
                        <li><a href="#player2" class="player2 buttons">Madisen Blackford</a></li>
                        <li><a href="#player3" class="player3 buttons">Taylor Inman</a></li> 
                        <li><a href="#player4" class="player4 buttons">Molly Jacobsen</a></li> 
                        <li><a href="#player5" class="player5 buttons">Sidney Larsen</a></li> 
                        <li><a href="#player6" class="player6 buttons">Delaney May	</a></li>
                        <li><a href="#player7" class="player7 buttons">Morgan Nealey</a></li>
                        <li><a href="#player8" class="player8 buttons">Natalie Norris</a></li>
                        <li><a href="#player9" class="player9 buttons">Lauren Provost</a></li>
                        <li><a href="#player10" class="player10 buttons">Hailey Scully</a></li> 
                        <li><a href="#player11" class="player11 buttons">Alexis Wyant</a></li>                               
            </ul>  
        </li> 

        <li<?php if($section == 'schedule'): ?> class=""<?php endif; ?>>  
            <a href="?section=schedule" class="heading googleCalendar buttons">SCHEDULE</a>  
            <ul id="schedule">    
             
            
   
               
            <li><span class="date">09.14.2012</span>
                	<br/> <a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=870519" target="_blank">Fall State
                    <br/>Altoona Fields</a>
                </li>  
                <li><span class="date">10.05.2012</span>
                	<br/> <a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=863566" target="_blank">Heartland Classic
                    <br/>Altoona Fields</a>
                </li>  
                <li><span class="date">10.12.2012</span>
                	<br/> <a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=874702" target="_blank">Fall Freeze Out
                    <br/>WDM Fields</a>
                </li>  
            </ul>  
        </li>  
        <li<?php if($section == 'results'): ?> class=""<?php endif; ?>>  
            <a href="?section=results" class="heading">RESULTS</a>  
            <ul id="results">  
                <li>FPOS Nationals - 5th</li>    
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
            <span style="font-size:33px;color:green;">4-3</span></td>
        </tr>
            <tr>
           	  <td width="100" class="category" style="width:90px;">
                	HEAD COACH:
              </td>
                <td class="info">
                		Kelly Blackford
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	ASST. COACH:
              </td>
                <td  class="info">
                	Larry Provost
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	ASST. COACH:
              </td>
                <td  class="info">
                	Todd Wyant
              </td>
            </tr>
      </table>
        </p>
        
        <div id="usssaStatsiFrameWrapper">
                    	<iframe name="usssaStats" id="usssaStats" src="http://www.usssa.com/sports/Team3.asp?TeamID=1843891"  frameborder="0" seamless="seamless" scrolling="no"></iframe>
               		</div><!-- end iframeWrapper-->

        <p style="font-size:14px;"><a href="http://www.usssa.com/sports/Team3.asp?TeamID=1843891" title="Iowa Renegades USSSA page" target="_blank">
        			<img src="../images/USSSA_Logo.gif" width="181" height="45" alt="USSSA Logo">
                    <br/>Click to view the USSSA page for this team.
        		</a></p>  
     

      </div>
    
    
    <div id="player1i">
    	
    	<img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <table style="">
        
        	<tr>
           	  <td colspan="3" style="text-align:center; font-size:190%;">
                	Jordyn Achenbach
              </td>
            </tr>
            <tr>
        	<td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">7</div></td>
        </tr>
            <tr>
           	  <td width="50" class="category">
                	NICKNAME:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	POSITIONS:
              </td>
                <td  class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	BATS:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	THROWS:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
      </table>
        
        </div>
        
    <div id="player2i">
       <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <table style="">
        
        	<tr>
           	  <td colspan="3" style="text-align:center; font-size:190%;">
                	Madisen Blackford
              </td>
            </tr>
            <tr>
        	<td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">5</div></td>
        </tr>
            <tr>
           	  <td width="50" class="category">
                	NICKNAME:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	POSITIONS:
              </td>
                <td  class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	BATS:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	THROWS:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
      </table>
        </div>
        
    <div id="player3i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <table style="">
        
        	<tr>
           	  <td colspan="3" style="text-align:center; font-size:190%;">
                	Taylor Inman
              </td>
            </tr>
            <tr>
        	<td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">0</div></td>
        </tr>
            <tr>
           	  <td width="50" class="category">
                	NICKNAME:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	POSITIONS:
              </td>
                <td  class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	BATS:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	THROWS:
              </td>
                <td class="info">&nbsp;
                	
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
                	Molly Jacobsen
              </td>
            </tr>
            <tr>
        	<td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">0</div></td>
        </tr>
            <tr>
           	  <td width="50" class="category">
                	NICKNAME:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	POSITIONS:
              </td>
                <td  class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	BATS:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	THROWS:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
      </table>
        </div>
        
    <div id="player5i">
       <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <table style="">
        
        	<tr>
           	  <td colspan="3" style="text-align:center; font-size:190%;">
                	Sidney Larsen
              </td>
            </tr>
            <tr>
        	<td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">24</div></td>
        </tr>
            <tr>
           	  <td width="50" class="category">
                	NICKNAME:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	POSITIONS:
              </td>
                <td  class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	BATS:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	THROWS:
              </td>
                <td class="info">&nbsp;
                	
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
                	Delaney May
              </td>
            </tr>
            <tr>
        	<td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">13</div></td>
        </tr>
            <tr>
           	  <td width="50" class="category">
                	NICKNAME:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	POSITIONS:
              </td>
                <td  class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	BATS:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	THROWS:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
      </table>
        </div>
        
    <div id="player7i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <table style="">
        
        	<tr>
           	  <td colspan="3" style="text-align:center; font-size:190%;">
                	Morgan Nealey
              </td>
            </tr>
            <tr>
        	<td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">31</div></td>
        </tr>
            <tr>
           	  <td width="50" class="category">
                	NICKNAME:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	POSITIONS:
              </td>
                <td  class="info">&nbsp;
                	 
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	BATS:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	THROWS:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
      </table>
        </div>
        
    <div id="player8i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <table style="">
        
        	<tr>
           	  <td colspan="3" style="text-align:center; font-size:190%;">
                	Natalie Norris
              </td>
            </tr>
            <tr>
        	<td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">15</div></td>
        </tr>
            <tr>
           	  <td width="50" class="category">
                	NICKNAME:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	POSITIONS:
              </td>
                <td  class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	BATS:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	THROWS:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
      </table>
        </div>
        
    <div id="player9i">
       <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
         <table style="">
        
        	<tr>
           	  <td colspan="3" style="text-align:center; font-size:190%;">
                	Lauren Provost
              </td>
            </tr>
            <tr>
        	<td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">25</div></td>
        </tr>
            <tr>
           	  <td width="50" class="category">
                	NICKNAME:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	POSITIONS:
              </td>
                <td  class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	BATS:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	THROWS:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
      </table>
        </div>
        
    <div id="player10i">
       <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <table style="">
        
        	<tr>
           	  <td colspan="3" style="text-align:center; font-size:190%;">
                	Hailey Scully
              </td>
            </tr>
            <tr>
        	<td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">33</div></td>
        </tr>
            <tr>
           	  <td width="50" class="category">
                	NICKNAME:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	POSITIONS:
              </td>
                <td  class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	BATS:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	THROWS:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
      </table>
        </div>
        
    <div id="player11i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <table style="">
        
        	<tr>
           	  <td colspan="3" style="text-align:center; font-size:190%;">
                	Alexis Wyant
              </td>
            </tr>
            <tr>
        	<td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">1</div></td>
        </tr>
            <tr>
           	  <td width="50" class="category">
                	NICKNAME:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	POSITIONS:
              </td>
                <td  class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	BATS:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	THROWS:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
      </table>
        </div>
        
    <div id="player12i">
     <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <table style="">
        
        	<tr>
           	  <td colspan="3" style="text-align:center; font-size:190%;">
                	Kerrigan Torres
              </td>
            </tr>
            <tr>
        	<td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">7</div></td>
        </tr>
            <tr>
           	  <td width="50" class="category">
                	NICKNAME:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	POSITIONS:
              </td>
                <td  class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	BATS:
              </td>
                <td class="info">&nbsp;
                	
              </td>
            </tr>
            <tr>
           	  <td class="category">
                	THROWS:
              </td>
                <td class="info">&nbsp;
                	
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
        
        
    <div id="googleCalendari">
    
    <div id="googleCalendarWrapper">
    	<iframe src="https://www.google.com/calendar/embed?showCalendars=0&amp;showTz=0&amp;height=400&amp;wkst=2&amp;bgcolor=%23ff9900&amp;src=s01rcfnsq7pbafj95lil0m1pag%40group.calendar.google.com&amp;color=%238C500B&amp;ctz=America%2FChicago" style=" border-width:0 " width="390" height="400" frameborder="0" scrolling="no"></iframe>
    </div><!--googleCalendarWrapper-->
    </div><!--googleCalendari-->
     
    
    </div><!-- contentDiv-->
    </div><!--mainWrapper--> 

</body>
</html>
