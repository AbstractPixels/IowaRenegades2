<!DOCTYPE html>
<html>
 <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  <link rel="stylesheet" href="../css/teams-NEW.css" type="text/css" />
        
        <style>
        
        	#accordion li ul	{
				display:none;
				}
        
        </style>
        
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
                        <li><a href="#player1" class="player1 buttons">Anneliese Barton</a></li>
                        <li><a href="#player2" class="player2 buttons">Ashley Caswell</a></li>  
                        <li><a href="#player3" class="player3 buttons">Leah Davey</a></li> 
                        <li><a href="#player4" class="player4 buttons">Nicole DuToit</a></li> 
                        <li><a href="#player5" class="player5 buttons">Aliya Hesseltine</a></li> 
                        <li><a href="#player6" class="player6 buttons">Kelsey Porter</a></li>
                        <li><a href="#player13" class="player13 buttons">Shelby Freestone</a></li>
                        <li><a href="#player7" class="player7 buttons">Stephanie Seymour</a></li> 
                        <li><a href="#player8" class="player8 buttons">Payton Shaw</a></li>
                        <li><a href="#player9" class="player9 buttons">Hannah St. John</a></li>
                        <li><a href="#player10" class="player10 buttons">Shelbi Stogdill</a></li> 
                        <li><a href="#player11" class="player11 buttons">Ava Torres</a></li> 
                        <li><a href="#player14" class="player11 buttons">Mallory Vroegh</a></li> 
                        <li><a href="#player12" class="player12 buttons">Kaitlyn Walker</a></li>            
            </ul>  
        </li> 
 
 		<li<?php if($section == 'results'): ?> class=""<?php endif; ?>>  
            <a href="?section=results" class="heading">RESULTS</a>  
            <ul id="results">  
                <li>FPOS Nationals - 7th</li>
                <li>Fall State - 2nd</li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=874681" target="_new">SDM Fall Classic - 8th</a></li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=874691" target="_new">SDM Octoberfest - 5th</a></li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=915926" target="_new">Spring Thaw Out - 12th</a></li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=916286" target="_new">CIUA Kickoff Classic - 3rd</a></li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=952618" target="_new">Spring Fever Frenzy - 3rd</a></li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=926392" target="_new">Charlie Brown Special - <span style="font-size:150%">1st</span></a></li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=971114" target="_new">AGSA Memorial Day Tourney - 3rd</span></a></li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=957542" target="_new">Ankeny Summer Smash - 3rd</a></a></li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=943133" target="_new">Iowa State Championships - 7th</a></li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=917682" target="_new">EDM Classic - 5th</a></li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=918699" target="_new">SDM Summerfest - 11th</a></li>
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=947966" target="_new">USSSA "C" World Series - 13th</a></li>
            </ul>  
        </li>  
        
        <li<?php if($section == 'schedule'): ?> class=""<?php endif; ?>>  
            <a href="?section=schedule" class="heading googleCalendar buttons">SCHEDULE</a>  
            <ul id="schedule">                

            </ul>  
        </li>  
        
       
    </ul> 
    </div><!-- container-->
    <div id="contentDiv">
    
    	<div id="teami">
        <div id="teamPic"><img src="../images/teams/14Green/14Green-01.jpg" width="320" height="240" alt="14 Green team picture"></div>
        <p>
         <table style="">
        
        	


            <tr>
        	<td rowspan="5"  width="" style="width:90px;text-align:center;font-size:18px;padding-left:10px;">OVERALL RECORD<br/>
            <span style="font-size:33px;color:green;">23-42</span></td>
        </tr>
            <tr>
           	  <td width="100" class="category" style="width:90px;">
                	HEAD COACH:
              </td>
                <td class="info">
                		Scott Torres
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	ASST. COACH:
              </td>
                <td  class="info">
                	Ryan Hesseltine
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	ASST. COACH:
              </td>
                <td  class="info">
                	Greg Barton
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	ASST. COACH:
              </td>
                <td  class="info">
                	Kirk Caswell
              </td>
            </tr>
            
      </table>
        </p>
 
        
<!--        <div id="usssaStatsiFrameWrapper">
                    	<iframe name="usssaStats" id="usssaStats" src="http://www.usssa.com/sports/Team3.asp?TeamID=1843886"  frameborder="0" seamless="seamless" scrolling="no"></iframe>
               		</div><!-- end iframeWrapper-->

        <p style="font-size:14px;"><a href="http://www.usssa.com/sports/Team3.asp?TeamID=1843886" title="Iowa Renegades USSSA page" target="_blank">
        			<img src="../images/USSSA_Logo.gif" width="181" height="45" alt="USSSA Logo">
                    <br/>Click to view the USSSA page for this team.
        		</a></p>  
     
      </div><!--teami-->
 
    <div id="player1i">
        <img src="../images/teams/14Green/players/14g-AnnelieseBarton.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Anneliese Barton</h4>
        <div class="playerNumber">97</div>
        <p class="category">NICKNAME: <span class="info">Bob</span>
        <br>POSITIONS: <span class="info">P | SS</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     <!--   <br>HIGH SCHOOL: <span class="info"></span>-->
        <br>GRADUATES: <span class="info">2017</span> 
        </p>
    </div><!--player1i-->
    
    <div id="player2i">
        <img src="../images/teams/14Green/players/14g-AshleyCaswell.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Ashley Caswell</h4>
        <div class="playerNumber">5</div>
        <p class="category">NICKNAME: <span class="info">&nbsp;</span>
        <br>POSITIONS: <span class="info">OF | C</span>
       <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     <!--   <br>HIGH SCHOOL: <span class="info"></span>-->
        <br>GRADUATES: <span class="info">2018</span> 
        </p>
    </div><!--player2i-->

    <div id="player3i">
       <img src="../images/teams/14Green/players/14g-LeahDavey.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Leah Davey</h4>
        <div class="playerNumber">11</div>
        <p class="category">NICKNAME: <span class="info"></span>
        <br>POSITIONS: <span class="info">3B | OF</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     <!--   <br>HIGH SCHOOL: <span class="info"></span>-->
        <br>GRADUATES: <span class="info">2018</span> </p>
    </div><!--player3i-->
    
    <div id="player4i">
       <img src="../images/teams/14Green/players/14g-NicoleDuToit.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Nicole DuToit</h4>
        <div class="playerNumber">13</div>
        <p class="category">NICKNAME: <span class="info"></span>
        <br>POSITIONS: <span class="info">2B | SS</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     <!--   <br>HIGH SCHOOL: <span class="info"></span>-->
        <br>GRADUATES: <span class="info">2017</span> </p>
    </div><!--player4i-->
    
    <div id="player5i">
       <img src="../images/teams/14Green/players/14g-AliyaHesseltine.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Aliya Hesseltine</h4>
        <div class="playerNumber">22</div>
        <p class="category">NICKNAME: <span class="info"></span>
        <br>POSITIONS: <span class="info">P | SS</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     <!--   <br>HIGH SCHOOL: <span class="info"></span>-->
        <br>GRADUATES: <span class="info">2018</span> </p>
    </div><!--player5i-->
    
    <div id="player6i">
       <img src="../images/teams/14Green/players/14g-KelseyPorter.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Kelsey Porter</h4>
        <div class="playerNumber">14</div>
        <p class="category">NICKNAME: <span class="info"</span>
        <br>POSITIONS: <span class="info">>P | 1</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     <!--   <br>HIGH SCHOOL: <span class="info"></span>-->
        <br>GRADUATES: <span class="info">2017</span> </p>
    </div><!--player6i-->
    
    <div id="player7i">
      <img src="../images/teams/14Green/players/14g-StephanieSeymour.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Stephanie Seymour</h4>
        <div class="playerNumber">20</div>
        <p class="category">NICKNAME: <span class="info"></span>
        <br>POSITIONS: <span class="info">1B | OF</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     <!--   <br>HIGH SCHOOL: <span class="info"></span>-->
        <br>GRADUATES: <span class="info">2017</span> </p>
    </div><!--player7i-->

    <div id="player8i">
       <img src="../images/teams/14Green/players/14g-PaytonShaw.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Payton Shaw</h4>
        <div class="playerNumber">15</div>
        <p class="category">NICKNAME: <span class="info"></span>
        <br>POSITIONS: <span class="info">P | OF</span>
        <br>BATS: <span class="info">Both</span>
        <br>THROWS: <span class="info">Right</span>
     <!--   <br>HIGH SCHOOL: <span class="info"></span>-->
        <br>GRADUATES: <span class="info">2018</span> </p>
    </div><!--player8i-->

    <div id="player9i">
       <img src="../images/teams/14Green/players/14g-HannahStJohn.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Hannah St. John</h4>
        <div class="playerNumber">98</div>
        <p class="category">NICKNAME: <span class="info"></span>
        <br>POSITIONS: <span class="info">OF | C</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     <!--   <br>HIGH SCHOOL: <span class="info"></span>-->
        <br>GRADUATES: <span class="info">2017</span> </p>
    </div><!--player9i-->
    
    <div id="player10i">
       <img src="../images/teams/14Green/players/14g-ShelbiStogdill.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Shelbi Stogdill</h4>
        <div class="playerNumber">88</div>
        <p class="category">NICKNAME: <span class="info"></span>
        <br>POSITIONS: <span class="info">OF | 2B</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     <!--   <br>HIGH SCHOOL: <span class="info"></span>-->
        <br>GRADUATES: <span class="info">2018</span> </p>
    </div><!--player10i-->
    
    <div id="player11i">
       <img src="../images/teams/14Green/players/14g-AvaTorres.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Ava Torres</h4>
        <div class="playerNumber">18</div>
        <p class="category">NICKNAME: <span class="info"></span>
        <br>POSITIONS: <span class="info">OF | 3rd</span>
        <br>BATS: <span class="info">Both</span>
        <br>THROWS: <span class="info">Right</span>
     <!--   <br>HIGH SCHOOL: <span class="info"></span>-->
        <br>GRADUATES: <span class="info">2018</span> </p>
    </div><!--player11i-->
    
    <div id="player12i">
       <img src="../images/teams/14Green/players/14g-KaitlynWalker.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Kaitlyn Walker</h4>
        <div class="playerNumber">21</div>
        <p class="category">NICKNAME: <span class="info"></span>
        <br>POSITIONS: <span class="info">C | 2B</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     <!--   <br>HIGH SCHOOL: <span class="info"></span>-->
        <br>GRADUATES: <span class="info">2017</span> </p>
    </div><!--player12i-->
    
    <div id="player13i">
       <img src="../images/teams/14Green/players/14g-ShelbiFreestone.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Shelby Freestone</h4>
        <div class="playerNumber">25</div>
        <p class="category">NICKNAME: <span class="info"></span>
        <br>POSITIONS: <span class="info">C | OF</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     <!--   <br>HIGH SCHOOL: <span class="info"></span>-->
        <br>GRADUATES: <span class="info">2018</span> </p>
    </div><!--player13i-->
    
     <div id="player14i">
       <img src="" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Mallory Vroegh</h4>
        <div class="playerNumber">2</div>
        <p class="category">NICKNAME: <span class="info"></span>
        <br>POSITIONS: <span class="info">P | 1B</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     <!--   <br>HIGH SCHOOL: <span class="info"></span>-->
        <br>GRADUATES: <span class="info"></span> </p>
    </div><!--player14i-->

 
        
  <div id="googleCalendari">
    
    <div id="googleCalendarWrapper">
    	<iframe src="https://www.google.com/calendar/embed?showCalendars=0&amp;showTz=0&amp;height=460&amp;wkst=2&amp;bgcolor=%23009900&amp;src=iomoie4ncsdi0amgsjq8qrrdo8%40group.calendar.google.com&amp;color=%23125A12&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%23BE6D00&amp;ctz=America%2FChicago" style=" border-width:0 " width="390" height="460" frameborder="0" scrolling="no"></iframe>
    </div><!--googleCalendarWrapper-->
    </div><!--googleCalendari-->     
        
        
        
        
        
        
    
    </div>
    </div><!--mainWrapper--> 

</body>
</html>
