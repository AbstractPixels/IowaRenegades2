<!DOCTYPE html>
<html>
 <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  <link rel="stylesheet" href="../css/teams.css" type="text/css" />
        
        <style>
        
        	#accordion li ul	{
				display:none;
				}
        
        </style>

                

        <!--[if IE 8]><style>body{background-color:black;}</style><![endif]--> 



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
    
    	 <li<?php if($section == '' || $section == 'main'): ?> class=""<?php endif; ?>>  
            <a href="#team" class="heading team buttons">MAIN</a>  
        </li>  
    
        <li<?php if($section == '' || $section == 'roster'): ?> class=""<?php endif; ?>>  
            <a href="?section=roster" class="heading">ROSTER</a>  
            <ul id="roster">   
               <li></li>                          
            </ul>  
        </li> 
 
 
        
       <li<?php if($section == 'schedule'): ?> class=""<?php endif; ?>>  
            <a href="?section=schedule" class="heading googleCalendar buttons">SCHEDULE</a>  
            <ul id="schedule">    
                
            </ul>  
        </li>  
        <li<?php if($section == 'results'): ?> class=""<?php endif; ?>>  
            <a href="?section=results" class="heading">RESULTS</a>  
            <ul id="results">  
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=870416" target="_new">ISG Fall Showcase - 5th</a></li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1005650 " target="_new">Fall Classic Exposure - 12th</a></li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=991553 " target="_new">MSP Fall Showcase - 24th</a></li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1029218 " target="_new">Liddle's Swing Into Spring - <span style="font-size:130%;">1st</span></a></li>
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
            <span style="font-size:33px;color:green;">7-13</span></td>
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
        
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	ASST. COACH:
              </td>
                <td  class="info">
                	
              </td>
            </tr>
      </table>
        </p>

                 <p style="font-size:14px;">
        	<a href="http://www.usssa.com/sports/Team3.asp?TeamID=1991682" title="Iowa Renegades USSSA page" target="_blank"><img src="../images/USSSA_Logo.gif" width="181" height="45" alt="USSSA Logo">
                    <br/>Click to view the USSSA page for this team.
			</a>
        </p>  
     

      </div>
    
    
 <div id="player1i">
		<img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Karli Benson</h4>
        <div class="playerNumber">0</div>
        <p class="category">POSITIONS: <span class="info">OF | 2B</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info"></span>
        <br>GRADUATES: <span class="info">2017</span>
        </p>
    </div><!--/player1i-->
        
        
    <div id="googleCalendari">
    
    <div id="googleCalendarWrapper">
    	<iframe src="https://www.google.com/calendar/embed?showCalendars=0&amp;showTz=0&amp;height=400&amp;wkst=2&amp;bgcolor=%23ff9900&amp;src=s01rcfnsq7pbafj95lil0m1pag%40group.calendar.google.com&amp;color=%238C500B&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%232952A3&amp;ctz=America%2FChicago" style=" border-width:0 " width="390" height="400" frameborder="0" scrolling="no"></iframe>
    </div><!--googleCalendarWrapper-->
    </div><!--googleCalendari-->
     
    
    </div><!-- contentDiv-->
    </div><!--mainWrapper--> 

</body>
</html>
