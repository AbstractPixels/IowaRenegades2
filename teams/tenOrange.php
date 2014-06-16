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
                <li><a href="#player1" class="player1 buttons">Jenna Achenbach</a></li>
                <li><a href="#player2" class="player2 buttons">Hailey Hill</a></li>
                <li><a href="#player3" class="player3 buttons">Danika Lagodzinski</a></li> 
                <li><a href="#player4" class="player4 buttons">Lauren Shediwy</a></li> 
                <li><a href="#player5" class="player5 buttons">Olivia Stout</a></li> 
                <li><a href="#player6" class="player6 buttons">Ori Trimble</a></li>
                <li><a href="#player7" class="player7 buttons">Tara Vandewater</a></li> 
                <li><a href="#player8" class="player8 buttons">Jaya West</a></li> 
                <li><a href="#player9" class="player9 buttons">Olivia Wyant</a></li>
                <li><a href="#player10" class="player10 buttons">Jena Young</a></li>             
            </ul>  
        </li>     
  
  		<li<?php if($section == 'results'): ?> class=""<?php endif; ?>>  
            <a href="?section=results" class="heading">RESULTS</a>  
            <ul id="results">  
                <li></li>      
            </ul>  
        </li> 
        
        <li<?php if($section == 'schedule'): ?> class=""<?php endif; ?>>  
            <a href="?section=schedule" class="heading googleCalendar buttons">SCHEDULE</a>  
            <ul id="schedule">                
				<li></li>
            </ul>  
        </li>
 
    </ul> 
    
    </div><!-- /container-->
 
    <div id="contentDiv">
    
    	<div id="teami">
        <div id="teamPic">
        <img src="../images/teams/2014/10Orange/2014-10Orange-02.jpg" width="320" height="240" alt="10 Orange team picture">
        </div>
        <p>
         <table style="">
		<tr>
        	<td rowspan="5"  width="" style="width:90px;text-align:center;font-size:18px;padding-left:10px;">OVERALL RECORD<br/>
            <span style="font-size:33px;color:green;">14-22</span></td>
        </tr>
            <tr>
           	  <td width="100" class="category" style="width:90px;">HEAD COACH:</td>
                <td class="info">George Callsen</td>
            </tr>
            <tr>
           	  <td  class="category">ASST. COACH:</td>
                <td  class="info">Valerie Stout</td>
            </tr>
            <tr>
           	  <td  class="category">ASST. COACH:</td>
                <td  class="info">Alex Lagodzinski</td>
            </tr>
            <tr>
           	  <td  class="category">ASST. COACH:</td>
                <td  class="info">Tim Young</td>
            </tr>
      </table>
        </p>
        
        <p style="font-size:14px;">
        	<a href="http://www.usssa.com/sports/Team3.asp?TeamID=1991681" title="Iowa Renegades USSSA page" target="_blank"><img src="../images/USSSA_Logo.gif" width="181" height="45" alt="USSSA Logo">
                    <br/>Click to view the USSSA page for this team.
			</a>
        </p>  
     
      </div><!--/teami-->
 
    <div id="player1i">
		<img src="../images/teams/10Orange/players/JennaAchenbach-7.jpg" alt="10u Orange player picture" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Jenna Achenbach</h4>
        <div class="playerNumber">7</div>
        <p class="category">POSITIONS: <span class="info">OF | 2B</span>
        <br>BATS: <span class="info">Left</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">Woodward Granger</span>
        <br>GRADUATES: <span class="info">2022</span>
        </p>
    </div><!--/player1i-->
    
    <div id="player2i">
		<img src="../images/teams/10Orange/players/HaileyHill-25.jpg" alt="10u Orange player picture" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Hailey Hill</h4>
        <div class="playerNumber">25</div>
        <p class="category">POSITIONS: <span class="info">OF | 1B</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">Waukee</span>
        <br>GRADUATES: <span class="info">2021</span>
        </p>
    </div><!--/player2i-->
    
    <div id="player3i">
		<img src="../images/teams/10Orange/players/DanikaLagodzinski-8.jpg" alt="10u Orange player picture" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Danika Lagodzinski</h4>
        <div class="playerNumber">8</div>
        <p class="category">POSITIONS: <span class="info">OF | INF</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">Ankeny Christian Academy</span>
        <br>GRADUATES: <span class="info">2022</span>
        </p>
    </div><!--/player3i-->
    
    <div id="player4i">
		<img src="../images/teams/10Orange/players/LaurenShediwy-4.jpg" alt="10u Orange player picture" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Lauren Shediwy</h4>
        <div class="playerNumber">4</div>
        <p class="category">POSITIONS: <span class="info">P | UTL</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">SE Polk</span>
        <br>GRADUATES: <span class="info">2021</span>
        </p>
    </div><!--/player4i-->

    <div id="player5i">
		<img src="../images/teams/10Orange/players/OliviaStout-11.jpg" alt="10u Orange player picture" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Olivia Stout</h4>
        <div class="playerNumber">11</div>
        <p class="category">POSITIONS: <span class="info">P | UTL</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">Valley</span>
        <br>GRADUATES: <span class="info">2022</span>
        </p>
    </div><!--/player5i-->

    <div id="player6i">
		<img src="../images/teams/10Orange/players/OriTrimble-15.jpg" alt="10u Orange player picture" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Ori Trimble</h4>
        <div class="playerNumber">15</div>
        <p class="category">POSITIONS: <span class="info">1B | P | OF</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">Seymour</span>
        <br>GRADUATES: <span class="info">2022</span>
        </p>
    </div><!--/player6i-->
    
    <div id="player7i">
		<img src="../images/teams/10Orange/players/TaraVandewater-42.jpg" alt="10u Orange player picture" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Tara Vandewater</h4>
        <div class="playerNumber">42</div>
        <p class="category">POSITIONS: <span class="info">2B | P | OF</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">Winterset</span>
        <br>GRADUATES: <span class="info">2024</span>
        </p>
    </div><!--/player7i-->
   
    <div id="player8i">
		<img src="../images/teams/10Orange/players/JayaWest-6.jpg" alt="10u Orange player picture" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Jaya West</h4>
        <div class="playerNumber">6</div>
        <p class="category">POSITIONS: <span class="info">3B | C | UTL</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">Winterset</span>
        <br>GRADUATES: <span class="info">2023</span>
    	</p>
    </div><!--/player8i-->

    <div id="player9i">
		<img src="../images/teams/10Orange/players/OliviaWyant-1.jpg" alt="10u Orange player picture" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Olivia Wyant</h4>
        <div class="playerNumber">1</div>
        <p class="category">POSITIONS: <span class="info">INF | UTL | P</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">Adel</span>
        <br>GRADUATES: <span class="info">2024</span>
        </p>
    </div><!--/player9i-->
    
    <div id="player10i">
		<img src="../images/teams/10Orange/players/JenaYoung-2.jpg" alt="10u Orange player picture" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Jena Young</h4>
        <div class="playerNumber">2</div>
        <p class="category">POSITIONS: <span class="info">C | SS | UTL</span>
        <br>BATS: <span class="info">Left</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">Winterset</span>
        <br>GRADUATES: <span class="info">2023</span>
        </p>
    </div><!--/player10i-->
        
   <div id="googleCalendari">
    <div id="googleCalendarWrapper">
    	<!--<iframe src="https://www.google.com/calendar/embed?showCalendars=0&amp;showTz=0&amp;height=400&amp;wkst=2&amp;bgcolor=%23ff9900&amp;src=jr70m2eeudhpmvvglcob5d4e6s%40group.calendar.google.com&amp;color=%238C500B&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%232952A3&amp;ctz=America%2FChicago" style=" border-width:0 " width="390" height="400" frameborder="0" scrolling="no"></iframe>-->
    </div><!--googleCalendarWrapper-->
    </div><!--googleCalendari--> 

    </div><!-- /contentDiv -->
    </div><!--/mainWrapper--> 

</body>
</html>
