<!DOCTYPE html>
<html>
 <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  <link rel="stylesheet" href="../css/teams-NEW.css" type="text/css" />
        
        <style>#accordion li ul	{display:none;}</style>

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
                        <li><a href="#player1" class="player1 buttons">Saylor Abbas</a></li>
                        <li><a href="#player1" class="player2 buttons">Abby Folkerts</a></li>
                        <li><a href="#player2" class="player3 buttons">Jessica Gruber</a></li>
                        <li><a href="#player4" class="player4 buttons">Breianna Klein</a></li> 
                        <li><a href="#player5" class="player5 buttons">Caroline McAlexander</a></li> 
                        <li><a href="#player5" class="player6 buttons">Kaitlyn Kottlowski</a></li> 
                        <li><a href="#player6" class="player7 buttons">Haley Revell</a></li>
                        <li><a href="#player7" class="player8 buttons">Kaylee Sly</a></li>
                        <li><a href="#player8" class="player9 buttons">Kayla Sunderland</a></li> 
                        <li><a href="#player9" class="player10 buttons">Leah Tigges</a></li>
                        <li><a href="#player10" class="player11 buttons">Alexis Warrender</a></li>          
            </ul>  
        </li> 
        
         
        
        <li<?php if($section == 'results'): ?> class=""<?php endif; ?>>  
            <a href="?section=results" class="heading">RESULTS</a>  
            <ul id="results" style="line-height:4px;">  
               <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=990376" target="_new">WDM Tigers Fall Shootout - 13th</a></li>
               <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=990730" target="_new">Fall State - 13th</a></li>
               <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1005538" target="_new">Fall Freeze Out - <span style="font-size:110%;">3rd</span></a></li>
               <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1007445" target="_new">Pumpkin Smash - <span style="font-size:110%;">3rd</span></a></li>
               <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1027734" target="_new">ISG Iceberg - 5th</a></li>
               <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1027752" target="_new">ISG Spring Thaw Out - 5th</a></li>
               <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1027769" target="_new">CIUA Kickoff - <span style="font-size:130%;">1st</span></a></li>
               <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1027789" target="_new">ISG Spring Blast - 7th</a></li>
               <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1054623" target="_new">Jays C Joust - <span style="font-size:130%;">1st</span></a></li>
               <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1034499" target="_new">C Gauntlet - <span style="font-size:130%;">1st</span></a></li>
               <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1082978" target="_new">Queen of the Mountain - 7th</a></li>
            </ul>  
        </li>  
        
        <li<?php if($section == 'schedule'): ?> class=""<?php endif; ?>>  
            <a href="?section=schedule" class="heading googleCalendar buttons">SCHEDULE</a>  
            <ul id="schedule">
                
                
                
                
                
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1040932" target="_new">6.6.14 - Altoona Classic</a></li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1034530" target="_new">6.13.14 - Iowa USSSA State Championships</a></li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1034545" target="_new">7.5.14 - Freedom Fest</a></li>                
            </ul>  
        </li>         
        
    </ul> 
    </div><!-- container-->
    
    
    <div id="contentDiv">
    
    	<div id="teami">
       <div id="teamPic"><img src="../images/teams/2014/14Green/14Green-01.jpg" width="320" height="240" alt="14 Green team picture"></div>
        <p>
         <table style="">
        
            <tr>
        	<td rowspan="5"  width="" style="width:90px;text-align:center;font-size:18px;padding-left:10px;">OVERALL RECORD<br/>
            <span style="font-size:33px;color:green;">26-20</span></td>
        </tr>
            <tr>
           	  <td width="100" class="category" style="width:90px;">
                	HEAD COACH:
              </td>
                <td class="info">
                		Randy Folkerts
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	ASST. COACH:
              </td>
                <td  class="info">
                	Ron Tigges
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	STATISTICIAN:
              </td>
                <td  class="info">
                	Sonya Warrender
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	STATISTICIAN:
              </td>
                <td  class="info">
             		David DeYoung
              </td>
            </tr>
            
      </table>
        </p>

        <p style="font-size:14px;"><a href="http://www.usssa.com/sports/Team3.asp?TeamID=1988106" title="Iowa Renegades USSSA page" target="_blank">
        			<img src="../images/USSSA_Logo.gif" width="181" height="45" alt="USSSA Logo">
                    <br/>Click to view the USSSA page for this team.
        		</a></p>  
     
      </div><!--teami-->
 
 
 	<div id="player1i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Saylor Abbas</h4>
        <div class="playerNumber">27</div>
        <br>POSITIONS: <span class="info">P | SS</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     	<br>HIGH SCHOOL: <span class="info">SEP</span>
        <br>GRADUATES: <span class="info">2018</span> 
        </p>
    </div><!--player1i-->
 
    <div id="player2i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Abby Folkerts</h4>
        <div class="playerNumber">14</div>
        <br>POSITIONS: <span class="info">1B | OF</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     	<br>HIGH SCHOOL: <span class="info">DSM</span>
        <br>GRADUATES: <span class="info">2018</span> 
        </p>
    </div><!--player2i-->
    
    <div id="player3i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Jessica Gruber</h4>
        <div class="playerNumber">9</div>
        <br>POSITIONS: <span class="info">OF | 2</span>
       <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
		<br>HIGH SCHOOL: <span class="info">SEP</span>
        <br>GRADUATES: <span class="info">2018</span> 
        </p>
    </div><!--player3i-->

    
    
    
    <div id="player4i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Breianna Klein</h4>
        <div class="playerNumber">42</div>
        <br>POSITIONS: <span class="info">P | SS</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     	<br>HIGH SCHOOL: <span class="info">Murray</span>
        <br>GRADUATES: <span class="info">2019</span> </p>
    </div><!--player4i-->
    
    <div id="player5i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Caroline McAlexander</h4>
        <div class="playerNumber">31</div>
        <br>POSITIONS: <span class="info">OF | P</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     	<br>HIGH SCHOOL: <span class="info">Mt. Ayr</span>
        <br>GRADUATES: <span class="info">2019</span> </p>
    </div><!--player5i-->
    
    <div id="player6i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Kaitlyn Kottlowski</h4>
        <div class="playerNumber">65</div>
        <br>POSITIONS: <span class="info">>2B | P</span>
        <br>BATS: <span class="info"></span>
        <br>THROWS: <span class="info"></span>
     	<br>HIGH SCHOOL: <span class="info">SEP</span>
        <br>GRADUATES: <span class="info"></span> </p>
    </div><!--player6i-->
    
    <div id="player7i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Haley Revell</h4>
        <div class="playerNumber">28</div>
        <br>POSITIONS: <span class="info">OF | 1</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     	<br>HIGH SCHOOL: <span class="info">Newton</span>
        <br>GRADUATES: <span class="info">2018</span> </p>
    </div><!--player7i-->
    
    <div id="player8i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Kaylee Sly</h4>
        <div class="playerNumber">69</div>
        <br>POSITIONS: <span class="info">C | SS</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     	<br>HIGH SCHOOL: <span class="info">Johnston</span>
        <br>GRADUATES: <span class="info">2018</span> </p>
    </div><!--player8i-->

    <div id="player9i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Kayla Sunderland</h4>
        <div class="playerNumber">11</div>
        <br>POSITIONS: <span class="info">2B | OF</span>
        <br>BATS: <span class="info">Both</span>
        <br>THROWS: <span class="info">Right</span>
     	<br>HIGH SCHOOL: <span class="info">SEP</span>
        <br>GRADUATES: <span class="info">2018</span> </p>
    </div><!--player9i-->

    <div id="player10i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Leah Tigges</h4>
        <div class="playerNumber">17</div>
        <br>POSITIONS: <span class="info">3B | OF</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
         <br>HIGH SCHOOL: <span class="info">DSM</span>
        <br>GRADUATES: <span class="info">2018</span> </p>
    </div><!--player10i-->
    
    <div id="player11i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Alexis Warrender</h4>
        <div class="playerNumber">0</div>
        <br>POSITIONS: <span class="info">C | 1B</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     	<br>HIGH SCHOOL: <span class="info">DSM</span>
        <br>GRADUATES: <span class="info">2018</span> </p>
    </div><!--player11i-->
        
  <div id="googleCalendari">
    
    <div id="googleCalendarWrapper">
    	<iframe src="https://www.google.com/calendar/embed?showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=600&amp;wkst=2&amp;bgcolor=%23009900&amp;src=iomoie4ncsdi0amgsjq8qrrdo8%40group.calendar.google.com&amp;color=%23125A12&amp;ctz=America%2FChicago" style=" border-width:0 " width="390" height="600" frameborder="0" scrolling="no"></iframe>
    </div><!--googleCalendarWrapper-->
    </div><!--googleCalendari-->     
        
        
        
        
        
        
    
    </div>
    </div><!--mainWrapper--> 

</body>
</html>
