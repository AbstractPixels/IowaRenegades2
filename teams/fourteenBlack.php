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
                        <!--<li><a href="#player2" class="player1 buttons">Karli Benson</a></li>
						<li><a href="#player3" class="player2 buttons">Brianna Colwell</a></li>
                        <li><a href="#player4" class="player3 buttons">Ashley Caswell</a></li> 
                        <li><a href="#player5" class="player4 buttons">Leah Davey</a></li> 
                        <li><a href="#player8" class="player5 buttons">Lucy Karlin</a></li> 
                        <li><a href="#player10" class="player6 buttons">Lyric McKinney</a></li>
                        <li><a href="#player11" class="player7 buttons">Ashley Nethers</a></li> 
                        <li><a href="#player12" class="player8 buttons">Hannah Poortinga</a></li> 
                        <li><a href="#player13" class="player9 buttons">Jade Sharp</a></li>
                        <li><a href="#player14" class="player10 buttons">Ava Torres</a></li> -->           
            </ul>  
        </li>     
  
  		<li<?php if($section == 'results'): ?> class=""<?php endif; ?>>  
            <a href="?section=results" class="heading">RESULTS</a>  
            <ul id="results">  
                <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=1027751" target="_new">ISG Spring Thaw Out - <span style="font-size:120%;">2nd</span>      
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
        <!--<img src="../images/teams/18Elite/18Elite-01.jpg" width="320" height="240" alt="18 Elite team picture">-->
        </div>
        <p>
         <table style="">
		<tr>
        	<td rowspan="5"  width="" style="width:90px;text-align:center;font-size:18px;padding-left:10px;">OVERALL RECORD<br/>
            <span style="font-size:33px;color:green;">8-10</span></td>
        </tr>
            <tr>
           	  <td width="100" class="category" style="width:90px;">HEAD COACH:</td>
                <td class="info">Kelly Blackford</td>
            </tr>
            <tr>
           	  <td  class="category">ASST. COACH:</td>
                <td  class="info">Andy Pickering</td>
            </tr>
            <tr>
           	  <td  class="category">ASST. COACH:</td>
                <td  class="info"></td>
            </tr>
      </table>
        </p>
        
    <p style="font-size:14px;">
        <a href="http://www.usssa.com/sports/Team3.asp?TeamID=1988138" title="Iowa Renegades USSSA page" target="_blank">
            <img src="../images/USSSA_Logo.gif" width="181" height="45" alt="USSSA Logo">
            <br/>Click to view the USSSA page for this team.
        </a>
    </p>  
     
      </div><!--/teami-->
 
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
    
    <div id="player2i">
		<img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Brianna Colwell</h4>
        <div class="playerNumber">00</div>
        <p class="category">POSITIONS: <span class="info">P | 1B</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">Roosevelt</span>
        <br>GRADUATES: <span class="info">2017</span>
        </p>
    </div><!--/player2i-->
    
    <div id="player3i">
		<img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Ashley Caswell</h4>
        <div class="playerNumber">0</div>
        <p class="category">POSITIONS: <span class="info">C | 1B</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info"></span>
        <br>GRADUATES: <span class="info"></span>
        </p>
    </div><!--/player3i-->
    
    <div id="player4i">
		<img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Leah Davey</h4>
        <div class="playerNumber">0</div>
        <p class="category">POSITIONS: <span class="info">3B | OF</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info"></span>
        <br>GRADUATES: <span class="info"></span>
        </p>
    </div><!--/player4i-->

    <div id="player5i">
		<img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Lucy Karlin</h4>
        <div class="playerNumber">0</div>
        <p class="category">POSITIONS: <span class="info">P | SS</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">Roosevelt</span>
        <br>GRADUATES: <span class="info">2017</span>
        </p>
    </div><!--/player5i-->

    <div id="player6i">
		<img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Lyric McKinney</h4>
        <div class="playerNumber">0</div>
        <p class="category">POSITIONS: <span class="info">SS | 3B</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info"></span>
        <br>GRADUATES: <span class="info"></span>
        </p>
    </div><!--/player6i-->
   
    <div id="player7i">
		<img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Ashley Nethers</h4>
        <div class="playerNumber">0</div>
        <p class="category">POSITIONS: <span class="info">C | OF</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info"></span>
        <br>GRADUATES: <span class="info"></span>
    	</p>
    </div><!--/player8i-->
    
    <div id="player8i">
		<img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
        <h4>Hannah Poortinga</h4>
        <div class="playerNumber">24</div>
        <p class="category">POSITIONS: <span class="info">C | 3B</span>
        <br>BATS: <span class="info">Right</span>
        <br>THROWS: <span class="info">Right</span>
        <br>HIGH SCHOOL: <span class="info">SE Polk</span>
        <br>GRADUATES: <span class="info">2018</span>
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
        <br>GRADUATES: <span class="info">2018</span>
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
        <br>GRADUATES: <span class="info">2017</span>
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
