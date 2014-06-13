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
                        <li><a href="#player1" class="player1 buttons">Roster</a></li>  
                        <li><a href="#player2" class="player2 buttons">Coming</a></li>
                        <li><a href="#player3" class="player3 buttons">Soon</a></li> 
<!--                        <li><a href="#player4" class="player4 buttons">Macy Herselius</a></li> 
                        <li><a href="#player5" class="player5 buttons">Lyric McKinney</a></li> 
                        <li><a href="#player6" class="player6 buttons">Aspen Mulstay</a></li>
                        <li><a href="#player7" class="player7 buttons">Rabecka Parker</a></li>
                        <li><a href="#player8" class="player8 buttons">Hannah Poortinga</a></li> 
                        <li><a href="#player9" class="player9 buttons">Jade Sharp</a></li>
                        <li><a href="#player10" class="player10 buttons">Jayda Tolentino</a></li>
                        <li><a href="#player11" class="player11 buttons">Lauren Wignall</a></li>   
                        -->         
            </ul>  
        </li>  
        
        <li<?php if($section == 'schedule'): ?> class=""<?php endif; ?>>  
            <a href="?section=schedule" class="heading googleCalendar buttons">SCHEDULE</a>  
            <ul id="schedule">              
            <li>Schedule Coming Soon</li>
     <!--           <li><span class="date">09.14.2012</span>
                	<br/> <a href="#">Fall State
                    <br/>Altoona Fields</a>
                </li>  
                <li><span class="date">09.22.2012</span>
                	<br/> <a href="#">SDM Fall Classic
                    <br/>SDM Fields</a>
                </li>  
                <li><span class="date">10.12.2012</span>
                	<br/> <a href="#">Fall Freeze Out
                    <br/>Raccoon River in WDM.</a>
                </li>  
         -->
            </ul>  
        </li>  
        <li<?php if($section == 'results'): ?> class=""<?php endif; ?>>  
            <a href="?section=results" class="heading">RESULTS</a>  
            <ul id="results">  
                <li>Results Coming Soon</li>  
            </ul>  
        </li>  
       
    </ul> 
    </div><!-- container-->
    <div id="contentDiv">
    
    	<div id="teami">
        <p>
        Team Information Coming Soon
        </p>
        
        </div>
    
    
    <div id="player1i">
        <p>
        PLAYER 1
       Information Coming Soon
       <br/>
       <br/>
       <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;">
        </p>
        
        </div>
    <div id="player2i">
        <p>
        PLAYER 2
       Information Coming Soon
       <br/>
       <br/>
       <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;">
        </p>
       
        </div>
    <div id="player3i">
        <p>
        PLAYER 3
       Information Coming Soon
       <br/>
       <br/>
       <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;">
        </p>
       
        </div>
    <div id="player4i">
        <p>
        PLAYER 4
       Information Coming Soon
       <br/>
       <br/>
       <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;">
        </p>
       
        </div>
    <div id="player5i">
        <p>
        PLAYER 5
     Information Coming Soon
       <br/>
       <br/>
       <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;">
        </p>
        
        </div>
    <div id="player6i">
        <p>
        PLAYER 6
     Information Coming Soon
       <br/>
       <br/>
       <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;">
        </p>
        
        </div>
    <div id="player7i">
        <p>
        PLAYER 7
       Information Coming Soon
       <br/>
       <br/>
       <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;">
        </p>
        
        </div>
    <div id="player8i">
        <p>
        PLAYER 8
   Information Coming Soon
       <br/>
       <br/>
       <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;">
        </p>
        
        </div>
    <div id="player9i">
        <p>
        PLAYER 9
      Information Coming Soon
       <br/>
       <br/>
       <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;">
        </p>
        
        </div>
    <div id="player10i">
        <p>
        PLAYER 10
       Information Coming Soon
       <br/>
       <br/>
       <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;">
        </p>
        
        </div>
    <div id="player11i">
        <p>
        PLAYER 11
       Information Coming Soon
       <br/>
       <br/>
       <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;">
        </p>
        
        </div>
    <div id="player12i">
        <p>
        PLAYER 12
    Information Coming Soon
       <br/>
       <br/>
       <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;">
        </p>
        
        </div>
    <div id="player13i">
        <p>
        PLAYER 13
      Information Coming Soon
       <br/>
       <br/>
       <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;">
        </p>
        
    </div>
        
        
    <div id="googleCalendari">
    
    <div id="googleCalendarWrapper">
    	<iframe src="https://www.google.com/calendar/embed?showCalendars=0&amp;showTz=0&amp;height=400&amp;wkst=2&amp;bgcolor=%23ff9900&amp;src=ah3sjdtjgqsdp0negfnth8458g%40group.calendar.google.com&amp;color=%238C500B&amp;ctz=America%2FChicago" style=" border-width:0 " width="390" height="400" frameborder="0" scrolling="no"></iframe>
    </div><!--googleCalendarWrapper-->
    </div><!--googleCalendari-->
     
    
    </div><!-- contentDiv-->
    </div><!--mainWrapper--> 

</body>
</html>
