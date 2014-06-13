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
                
            </ul>  
        </li>  
        <li<?php if($section == 'results'): ?> class=""<?php endif; ?>>  
            <a href="?section=results" class="heading">RESULTS</a>  
            <ul id="results">  
                <li>FPOS Nationals - 5th</li>    
                <li>Fall State - 5th</li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=881291" target="_new">2012 Heartland Classic
                <br/>College Showcase - 5th</a></li> 
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=874699" target="_new">Fall Freeze Out - 9th</a></li> 
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=915923" target="_new">Spring Thaw Out - 2nd</a></li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=916281" target="_new">CIUA Kickoff Classic - 10th</a></li>
                <li><a href="http://www.usssa.com/sports/BracketPool.asp?Tournament=917690" target="_new">Midwest Showdown - 5th</a></li> 
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=963502" target="_new">SE Iowa Shootout - 4th</a></li> 
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=947951" target="_new">15u World Series - 9th</a></li> 
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
            <span style="font-size:33px;color:green;">21-23</span></td>
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
        
 <!--       <div id="usssaStatsiFrameWrapper">
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
    	<iframe src="https://www.google.com/calendar/embed?showCalendars=0&amp;showTz=0&amp;height=400&amp;wkst=2&amp;bgcolor=%23ff9900&amp;src=s01rcfnsq7pbafj95lil0m1pag%40group.calendar.google.com&amp;color=%238C500B&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%232952A3&amp;ctz=America%2FChicago" style=" border-width:0 " width="390" height="400" frameborder="0" scrolling="no"></iframe>
    </div><!--googleCalendarWrapper-->
    </div><!--googleCalendari-->
     
    
    </div><!-- contentDiv-->
    </div><!--mainWrapper--> 

</body>
</html>
