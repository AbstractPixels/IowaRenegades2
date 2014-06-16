<!DOCTYPE html>
<html>
 <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  <link rel="stylesheet" href="../css/teams-NEW.css" type="text/css" />
        
        <style>	#accordion li ul	{display:none;}</style>

        <!--[if IE 8]><style>body{background-color:black;}</style><![endif]--> 

            <script type="text/javascript" src="../js/jquery.min.js"></script>
            <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
            <script type="text/javascript" src="../js/scroll2.js"></script>
            <script type="text/javascript" src="../js/jquery-scrollTo.js"></script>  
            <script type="text/javascript" src="../js/accordion2.js"></script>
            <script>
				$('#accordion').sibling(li).click(function() {
         		$(this).next("ul").slideToggle('slow')
            	});
            </script>

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
                        <li><a href="#player11" class="player11 buttons">Marissa Anderson</a></li>
                        <li><a href="#player1" class="player1 buttons">Karli Benson</a></li>
						<li><a href="#player2" class="player2 buttons">Brianna Colwell</a></li>
                        <li><a href="#player3" class="player3 buttons">Ashley Caswell</a></li> 
                        <li><a href="#player5" class="player5 buttons">Lucy Karlin</a></li> 
                        <li><a href="#player6" class="player6 buttons">Lyric McKinney</a></li>
                        <li><a href="#player7" class="player7 buttons">Ashley Nethers</a></li>
                        <li><a href="#player4" class="player4 buttons">Rabecka Parker</a></li>  
                        <li><a href="#player8" class="player8 buttons">Hannah Poortinga</a></li> 
                        <li><a href="#player9" class="player9 buttons">Jade Sharp</a></li>
                        <li><a href="#player10" class="player10 buttons">Ava Torres</a></li>            
            </ul>  
        </li>     
  
  		<li<?php if($section == 'results'): ?> class=""<?php endif; ?>>  
            <a href="?section=results" class="heading">RESULTS</a>  
            <ul id="results">  
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=990408" target="_new">SDM Fall Classic - 5th</a></li> 
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1005534" target="_new">Fall Freeze Out - <span style="font-size:110%;">3rd</span></a></li> 
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1007439" target="_new">Pumpkin Smash - 5th</a></li> 
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1007439" target="_new">SDM Octoberfest - <span style="font-size:110%;">3rd</span></a></li> 
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1027752" target="_new">ISG Spring Thaw Out - 5th</a></li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1027769" target="_new">CIUA Kick Off Classic - <span style="font-size:110%;">3rd</span></a></li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1034499" target="_new">C Gauntlet - 4th</a></li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1034623" target="_new">EDM Earlybird - 13th</a></li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1082979" target="_new">Queen of the Mountain - 5th</a></li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1051114" target="_new">WDM Invitational - 5th</a></li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1034530" target="_new">State Championships - <span style="font-size:120%;">1st</span></a></li>             
            </ul>  
        </li> 
        
        <li<?php if($section == 'schedule'): ?> class=""<?php endif; ?>>  
            <a href="?section=schedule" class="heading googleCalendar buttons">SCHEDULE</a>  
            <ul id="schedule">                
                
                
                
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1034628" target="_new">6.20.14 - Raccoon Valley Classic</a></li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1070120" target="_new">6.27.14 - UGRA 4th of July</a></li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1089564" target="_new">7.11.14 - MSC Scott Cahill Memorial</a></li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1060600" target="_new">7.16.14 - C World Series</a></li>
            </ul>  
        </li>
 
    </ul> 
    
    </div><!-- /container-->
    
    <div id="contentDiv">
    
    	<h2 style="margin-top:10px;">2014 C State Champions</h2>
    
    	<div id="teami">
        <div id="teamPic">
        <!--<img src="../images/teams/18Elite/18Elite-01.jpg" width="320" height="240" alt="18 Elite team picture">-->
        </div>
        <p>
         <table style="">
		<tr>
        	<td rowspan="5"  width="" style="width:90px;text-align:center;font-size:18px;padding-left:10px;">OVERALL RECORD<br/>
            <span style="font-size:33px;color:green;">23-24</span></td>
        </tr>
            <tr>
           	  <td width="100" class="category" style="width:90px;">HEAD COACH:</td>
                <td class="info">Chris Shelton</td>
            </tr>
            <tr>
           	  <td  class="category">ASST. COACH:</td>
                <td  class="info">Bill Sharp</td>
            </tr>
            <tr>
           	  <td  class="category">ASST. COACH:</td>
                <td  class="info">Brian Benson</td>
            </tr>
            <tr>
           	  <td  class="category">ASST. COACH:</td>
                <td  class="info">Dawn Anderson</td>
            </tr>            
      </table>
        </p>
        
        <p style="font-size:14px;">
        	<a href="http://www.usssa.com/sports/Team3.asp?TeamID=1988108" title="Iowa Renegades USSSA page" target="_blank"><img src="../images/USSSA_Logo.gif" width="181" height="45" alt="USSSA Logo">
                    <br/>Click to view the USSSA page for this team.
			</a>
        </p>  
     
      </div><!--/teami-->
 
    <div id="player1i">
		<img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Karli Benson</h4>
        <div class="playerNumber">16</div>
        <p class="category">POSITIONS: <span class="info">OF | 2B</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">Valley</span>
        <br>GRADUATES: <span class="info">2018</span>
        </p>
    </div><!--/player1i-->
    
    <div id="player2i">
		<img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Brianna Colwell</h4>
        <div class="playerNumber">00</div>
        <p class="category">POSITIONS: <span class="info">P | 1B</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">Roosevelt</span>
        <br>GRADUATES: <span class="info">2018</span>
        </p>
    </div><!--/player2i-->
    
    <div id="player3i">
		<img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Ashley Caswell</h4>
        <div class="playerNumber">5</div>
        <p class="category">POSITIONS: <span class="info">C | 1B</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">SEP</span>
        <br>GRADUATES: <span class="info">2018</span>
        </p>
    </div><!--/player3i-->
    
    <div id="player4i">
		<img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Rabecka Parker</h4>
        <div class="playerNumber">08</div>
        <p class="category">POSITIONS: <span class="info">P | OF</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">East</span>
        <br>GRADUATES: <span class="info">2018</span>
        </p>
    </div><!--/player4i-->

    <div id="player5i">
		<img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Lucy Karlin</h4>
        <div class="playerNumber">4</div>
        <p class="category">POSITIONS: <span class="info">P | OF</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">Roosevelt</span>
        <br>GRADUATES: <span class="info">2018</span>
        </p>
    </div><!--/player5i-->

    <div id="player6i">
		<img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Lyric McKinney</h4>
        <div class="playerNumber">20</div>
        <p class="category">POSITIONS: <span class="info">SS | OF</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">Hoover</span>
        <br>GRADUATES: <span class="info">2018</span>
        </p>
    </div><!--/player6i-->
   
    <div id="player7i">
		<img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Ashley Nethers</h4>
        <div class="playerNumber">25</div>
        <p class="category">POSITIONS: <span class="info">C | 3B</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">Ballard</span>
        <br>GRADUATES: <span class="info">2018</span>
    	</p>
    </div><!--/player8i-->
    
    <div id="player8i">
		<img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Hannah Poortinga</h4>
        <div class="playerNumber">24</div>
        <p class="category">POSITIONS: <span class="info">SS | C</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">SE Polk</span>
        <br>GRADUATES: <span class="info">2019</span>
        </p>
    </div><!--/player8i-->
    
    <div id="player9i">
		<img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Jade Sharp</h4>
        <div class="playerNumber">18</div>
        <p class="category">POSITIONS: <span class="info">2B | SS</span>
        <br>BATS: <span class="info">Right | Left (Slap)</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">Dowling</span>
        <br>GRADUATES: <span class="info">2019</span>
        </p>
    </div><!--/player9i-->
    
    <div id="player10i">
		<img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Ava Torres</h4>
        <div class="playerNumber">48</div>
        <p class="category">POSITIONS: <span class="info">OF | 2B</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">Hoover</span>
        <br>GRADUATES: <span class="info">2018</span>
        </p>
    </div><!--/player10i-->
    
    <div id="player11i">
		<img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Marissa Anderson</h4>
        <div class="playerNumber">23</div>
        <p class="category">POSITIONS: <span class="info">1B | C</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">East</span>
        <br>GRADUATES: <span class="info">2018</span>
        </p>
    </div><!--/player11i-->
        
   <div id="googleCalendari">
    <div id="googleCalendarWrapper">
    	<iframe src="https://www.google.com/calendar/embed?showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=600&amp;wkst=2&amp;bgcolor=%23ff6600&amp;src=jr70m2eeudhpmvvglcob5d4e6s%40group.calendar.google.com&amp;color=%238C500B&amp;ctz=America%2FChicago" style=" border-width:0 " width="390" height="600" frameborder="0" scrolling="no"></iframe>
    </div><!--googleCalendarWrapper-->
    </div><!--googleCalendari--> 

    </div><!-- /contentDiv -->
    </div><!--/mainWrapper--> 

</body>
</html>
