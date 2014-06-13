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
                <li></li>      
            </ul>  
        </li>  
       
    </ul> 
    </div><!-- container-->
    <div id="contentDiv">
    
    	<div id="teami">
        <div id="teamPic">
        <!--<img src="../images/teams/18Elite/18Elite-01.jpg" width="320" height="240" alt="18 Elite team picture">-->
        </div>
        <p>
         <table style="">
		<tr>
        	<td rowspan="4"  width="" style="width:90px;text-align:center;font-size:18px;padding-left:10px;">OVERALL RECORD<br/>
            <span style="font-size:33px;color:green;">3-4</span></td>
        </tr>
            <tr>
           	  <td width="100" class="category" style="width:90px;">
                	HEAD COACH:
              </td>
                <td class="info">
                		Rob Tennant
              </td>
            </tr>
            <tr>
           	  <td  class="category">
                	ASST. COACH:
              </td>
                <td  class="info">
                	Kelly Blackford
              </td>
            </tr>
            
      </table>
        </p>
        
        <p style="font-size:14px;"><a href="http://www.usssa.com/sports/Team3.asp?TeamID=1984715" title="Iowa Renegades USSSA page" target="_blank">
        			<img src="../images/USSSA_Logo.gif" width="181" height="45" alt="USSSA Logo">
                    <br/>Click to view the USSSA page for this team.
        		</a></p>  
     
      </div><!--teami-->
 
    <div id="player1i">
        <img src="../images/teams/18Elite/players/18U-TaylorBlackford.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Taylor Blackford</h4>
        <div class="playerNumber">11</div>
        <p class="category">POSITIONS: <span class="info">P | 1B</span>
        <br>BATS: <span class="info">Left</span>
        <br>THROWS: <span class="info">Left</span>
        <br>HIGH SCHOOL: <span class="info">Hoover</span>
        <br>GRADUATES: <span class="info">2013</span>
        </p>
    </div><!--player1i-->
    
    <div id="player2i">
        <img src="../images/teams/18Elite/players/18u-RachelCarstens.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Rachel Carstens</h4>
        <div class="playerNumber">7</div>
        <p class="category">POSITIONS: <span class="info">C | 3B</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">East</span>
        <br>GRADUATES: <span class="info">2013</span>
        </p>
    </div><!--player2i-->

    <div id="player3i">
        <img src="../images/teams/18Elite/players/18u-NatalieClark.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Natalie Clark</h4>
        <div class="playerNumber">10</div>
        <p class="category">POSITIONS: <span class="info">SS | 2B</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">Hoover</span>
        <br>GRADUATES: <span class="info">2013</span>
        </p>
    </div><!--player3i-->
    
    <div id="player4i">
        <img src="../images/teams/18Elite/players/18u-RachelMcPherson.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Rachel McPherson</h4>
        <div class="playerNumber">8</div>
        <p class="category">POSITIONS: <span class="info">CF | RF</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">Hoover</span>
        <br>GRADUATES: <span class="info">2013</span>
        </p>
    </div><!--player4i-->
    
    <div id="player5i">
        <img src="../images/teams/18Elite/players/18u-CassieShadlow.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Cassie Shadlow</h4>
        <div class="playerNumber">2</div>
        <p class="category">POSITIONS: <span class="info">RF | CF</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">Roland-Story</span>
        <br>GRADUATES: <span class="info">2014</span>
        </p>
    </div><!--player5i-->
    
    <div id="player6i">
        <img src="../images/teams/18Elite/players/18U-MadisonStogdill.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Madison Stogdill</h4>
        <div class="playerNumber">13</div>
        <p class="category">POSITIONS: <span class="info">2B | OF</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">Norwalk</span>
        <br>GRADUATES: <span class="info">2015</span>
        </p>
    </div><!--player6i-->
    
    <div id="player7i">
        <img src="../images/teams/18Elite/players/18u-AshleyTennant.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Ashley Tennant</h4>
        <div class="playerNumber">15</div>
        <p class="category">POSITIONS: <span class="info">1B | P | 3B</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">Waukee</span>
        <br>GRADUATES: <span class="info">2018</span>
        </p>
    </div><!--player7i-->

    <div id="player8i">
        <img src="../images/teams/18Elite/players/18u-NikkiTennant.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Nikki Tennant</h4>
        <div class="playerNumber">17</div>
        <p class="category">POSITIONS: <span class="info">3B | SS | 1B</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">Waukee</span>
        <br>GRADUATES: <span class="info">2014</span>
    	</p>
    </div><!--player8i-->

    <div id="player9i">
        <img src="../images/teams/18Elite/players/18U-KeriganTorres.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Kerigan Torres</h4>
        <div class="playerNumber">12</div>
        <p class="category">POSITIONS: <span class="info">CF | LF</span>
        <br>BATS: <span class="info">Left/Slapper</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">Hoover</span>
        <br>GRADUATES: <span class="info">2015</span>
        </p>
    </div><!--player9i-->

 
        
  <div id="googleCalendari">
    
    <div id="googleCalendarWrapper">
    	<iframe src="https://www.google.com/calendar/embed?showCalendars=0&amp;showTz=0&amp;height=400&amp;wkst=2&amp;bgcolor=%23ff9900&amp;src=3mcdojcsb0v3gkhkqq0j814mcc%40group.calendar.google.com&amp;color=%238C500B&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%230D7813&amp;ctz=America%2FChicago" style=" border-width:0 " width="390" height="400" frameborder="0" scrolling="no"></iframe>
    </div><!--googleCalendarWrapper-->
    </div><!--googleCalendari-->      
        
        
        
        
        
        
    
    </div>
    </div><!--mainWrapper--> 

</body>
</html>
