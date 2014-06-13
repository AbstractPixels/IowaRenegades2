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
        
         <li<?php if($section == 'schedule'): ?> class=""<?php endif; ?>>  
            <a href="?section=schedule" class="heading googleCalendar buttons">SCHEDULE</a>  
            <ul id="schedule">                

            </ul>  
        </li>  
        
        <li<?php if($section == 'results'): ?> class=""<?php endif; ?>>  
            <a href="?section=results" class="heading">RESULTS</a>  
            <ul id="results">  
               <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=870416" target="_new">ISG Fall Showcase - 7th</a></li>
            </ul>  
        </li>  
        
         <li<?php if($section == '' || $section == 'roster'): ?> class=""<?php endif; ?>>  
            <a href="?section=roster" class="heading">ROSTER</a>  
            <ul id="roster">   
                        <li></li>          
            </ul>  
        </li> 
    </ul> 
    </div><!-- container-->
    <div id="contentDiv">
   
    	<div id="teami">
      	<div id="teamPic"><img src="../images/teams/2014/16Green/2014-16Green-01.jpg" width="320" height="240" alt="16 Green team picture"></div>
        <p>
         <table style="">
        
        	


            <tr>
        	<td rowspan="5"  width="" style="width:90px;text-align:center;font-size:18px;padding-left:10px;">OVERALL RECORD<br/>
            <span style="font-size:33px;color:green;">4-22</span></td>
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
            <tr>
           	  <td  class="category">
                	ASST. COACH:
              </td>
                <td  class="info">
                	Chris Shelton
              </td>
            </tr>
            
      </table>
        </p>

        <p style="font-size:14px;"><a href="http://www.usssa.com/sports/Team3.asp?TeamID=1988137" title="Iowa Renegades USSSA page" target="_blank">
        			<img src="../images/USSSA_Logo.gif" width="181" height="45" alt="USSSA Logo">
                    <br/>Click to view the USSSA page for this team.
        		</a></p>  
     
      </div><!--teami-->
 
    <div id="player1i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Abby Folkerts</h4>
        <div class="playerNumber">14</div>
        <p class="category">NICKNAME: <span class="info">Abbs</span>
        <br>POSITIONS: <span class="info">1 | OF</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     <!--   <br>HIGH SCHOOL: <span class="info"></span>-->
        <br>GRADUATES: <span class="info">2018</span> 
        </p>
    </div><!--player1i-->
    
    <div id="player2i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Jessica Gruber</h4>
        <div class="playerNumber">9</div>
        <p class="category">NICKNAME: <span class="info">All-Star</span>
        <br>POSITIONS: <span class="info">OF | 2</span>
       <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     <!--   <br>HIGH SCHOOL: <span class="info"></span>-->
        <br>GRADUATES: <span class="info">2018</span> 
        </p>
    </div><!--player2i-->

    <div id="player3i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Lucy Karlin</h4>
        <div class="playerNumber">4</div>
        <p class="category">NICKNAME: <span class="info"></span>
        <br>POSITIONS: <span class="info">P | SS</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     <!--   <br>HIGH SCHOOL: <span class="info"></span>-->
        <br>GRADUATES: <span class="info">2018</span> </p>
    </div><!--player3i-->
    
    <div id="player4i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Breianna Klein</h4>
        <div class="playerNumber">42</div>
        <p class="category">NICKNAME: <span class="info">Breeze</span>
        <br>POSITIONS: <span class="info">P | SS</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     <!--   <br>HIGH SCHOOL: <span class="info"></span>-->
        <br>GRADUATES: <span class="info">2019</span> </p>
    </div><!--player4i-->
    
    <div id="player5i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Caroline McAlexander</h4>
        <div class="playerNumber">31</div>
        <p class="category">NICKNAME: <span class="info">Line-Drive</span>
        <br>POSITIONS: <span class="info">P | 3rd</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     <!--   <br>HIGH SCHOOL: <span class="info"></span>-->
        <br>GRADUATES: <span class="info">2019</span> </p>
    </div><!--player5i-->
    
    <div id="player6i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Hailey Revell</h4>
        <div class="playerNumber">28</div>
        <p class="category">NICKNAME: <span class="info">Hay-Hay</span>
        <br>POSITIONS: <span class="info">>OF | 1</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     <!--   <br>HIGH SCHOOL: <span class="info"></span>-->
        <br>GRADUATES: <span class="info">2017</span> </p>
    </div><!--player6i-->
    
    <div id="player7i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Kaylee Sly</h4>
        <div class="playerNumber">69</div>
        <p class="category">NICKNAME: <span class="info">Slyder</span>
        <br>POSITIONS: <span class="info">C | SS</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     <!--   <br>HIGH SCHOOL: <span class="info"></span>-->
        <br>GRADUATES: <span class="info">2018</span> </p>
    </div><!--player7i-->

    <div id="player8i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Kayla Sunderland</h4>
        <div class="playerNumber">11</div>
        <p class="category">NICKNAME: <span class="info">Kay-Kay</span>
        <br>POSITIONS: <span class="info">OF | 2</span>
        <br>BATS: <span class="info">Both</span>
        <br>THROWS: <span class="info">Right</span>
     <!--   <br>HIGH SCHOOL: <span class="info"></span>-->
        <br>GRADUATES: <span class="info">2018</span> </p>
    </div><!--player8i-->

    <div id="player9i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Leah Tigges</h4>
        <div class="playerNumber">17</div>
        <p class="category">NICKNAME: <span class="info">L.T.</span>
        <br>POSITIONS: <span class="info">C | 1</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     <!--   <br>HIGH SCHOOL: <span class="info"></span>-->
        <br>GRADUATES: <span class="info">2018</span> </p>
    </div><!--player9i-->
    
    <div id="player10i">
        <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Alexis Warrender</h4>
        <div class="playerNumber">0</div>
        <p class="category">NICKNAME: <span class="info">Alex</span>
        <br>POSITIONS: <span class="info">OF | C</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
     <!--   <br>HIGH SCHOOL: <span class="info"></span>-->
        <br>GRADUATES: <span class="info">2018</span> </p>
    </div><!--player10i-->
        
  <div id="googleCalendari">
    
    <div id="googleCalendarWrapper">
    	<iframe src="https://www.google.com/calendar/embed?showCalendars=0&amp;showTz=0&amp;height=460&amp;wkst=2&amp;bgcolor=%23009900&amp;src=iomoie4ncsdi0amgsjq8qrrdo8%40group.calendar.google.com&amp;color=%23125A12&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%23BE6D00&amp;ctz=America%2FChicago" style=" border-width:0 " width="390" height="460" frameborder="0" scrolling="no"></iframe>
    </div><!--googleCalendarWrapper-->
    </div><!--googleCalendari-->     
        
        
        
        
        
        
    
    </div>
    </div><!--mainWrapper--> 

</body>
</html>
