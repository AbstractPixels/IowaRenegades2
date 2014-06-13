<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  <link rel="stylesheet" href="../css/teams.css" type="text/css" />
        
        <style>
        
        	#accordion li ul	{
				display:none;
				}
        
        </style>
       
        <link rel="stylesheet" href="../css/main.css" type="text/css" />
         <script type="text/javascript" src="../js/tinydropdown.js"></script>
                
        <!--[if IE 8]><style>body{background-color:black;}</style><![endif]--> 

            <script type="text/javascript" src="../js/jquery.min.js"></script>
            <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
            <script type="text/javascript" src="../js/scroll2.js"></script>
            <script type="text/javascript" src="../js/jquery-scrollTo.js"></script>  
            <script type="text/javascript" src="../js/accordion2.js"></script>

    </head>
    
    <body>



<div id="header">
        
        <p><img src="../images/RenegadesTransShadow565X150.png" alt="Iowa Renegades logo" width="495" height="130" style="display:inline-block;"/></p>
        
       <div class="nav">
    <ul id="menu" class="menu">
        <li><a  class="home buttons" href="#home">HOME</a></li>
        
        
        <li><a  class="teams buttons" href="#teams">TEAMS</a>
            <ul>   
                <li class="submenu">
                    <a href="#">18u</a>
                    <ul>
                        <li><a href="#eighteenElite" class="eighteenElite buttons">Elite</a></li>
                    </ul>
                </li> 
                <li class="submenu">
                    <a href="#">16u</a>
                    <ul>
                        <li><a href="#sixteenOrange" class="sixteenOrange buttons">Orange</a></li>
                        
                    </ul>
                </li>      
                <li class="submenu">
                    <a href="#">14u</a>
                    <ul>
                        <li><a href="#fourteenOrange" class="fourteenOrange buttons">Orange</a></li>
                        <li><a href="#fourteenGreen" class=" fourteenGreen buttons">Green</a></li>
                    </ul>
                </li>      
                <li class="submenu">
                    <a href="#">12u</a>
                    <ul>
                        <li><a href="#TwelveOrange" class="TwelveOrange buttons">Orange</a></li>
                        <li><a href="#twelveGreen" class="twelveGreen buttons">Green</a></li>
                        <li><a href="#twelveWhite" class="twelveWhite buttons">White</a></li>
                    </ul>
                </li>      
                <li class="submenu">
                    <a href="#">10u</a>
                    <ul>
                        <li><a href="#tenOrange" class="tenOrange buttons">Orange</a></li>
                        <li><a href="#tenGreen" class="tenGreen buttons">Green</a></li>
                    </ul>
                </li>      
                <li class="submenu">
                    <a href="#">8u</a>
                    <ul>
                        <li><a href="#eightOrange" class="eightOrange buttons">Orange</a></li>
                    </ul>
                </li>      
    
            </ul>
        </li>
        
        <li><a  class="contact buttons" href="#contact">CONTACT</a></li>
        <li><a  class="about buttons" href="#about">ABOUT</a></li>
        
    </ul>
</div><!--nav menu-->
<script type="text/javascript">
var dropdown=new TINY.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>
           
</div><!--header-->
<div id="contentWrapper">


<div id="content">
		<div id="homei">
<div id="mainWrapper">

     <div id="customAccordion" onLoad="setTimeout(function() { window.scrollTo(0, 1) }, 100);">
     
     <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script> 
     
    
     
     
         <div id="fb-box" class="fb-like-box" data-href="https://www.facebook.com/pages/Iowa-Renegades-12u-Orange/317210051676259" data-width="275" data-height="620" data-colorscheme="dark" data-show-faces="false" data-stream="true" data-header="true"></div> 
         
        <div id="container">
             <?php $section = $_GET['section']; ?>  
            <ul id="accordion">  
            
                 <li<?php if($section == '' || $section == 'main'): ?> class=""<?php endif; ?>>  
                    <a href="#team" class="heading team buttons">MAIN</a>                </li>  
            
                <li<?php if($section == '' || $section == 'roster'): ?> class=""<?php endif; ?>>  
                    <a href="?section=roster" class="heading">ROSTER</a>  
                    <ul id="roster">   
                                <li><a href="#player1" class="player1 buttons">Hannah Blackford</a></li>  
                                <li><a href="#player2" class="player2 buttons">Megan Coleman</a></li>
                                <li><a href="#player3" class="player3 buttons">Brianna Colwell</a></li> 
                                <li><a href="#player4" class="player4 buttons">Macy Herselius</a></li> 
                                <li><a href="#player5" class="player5 buttons">Lyric McKinney</a></li> 
                                <li><a href="#player6" class="player6 buttons">Aspen Mulstay</a></li>
                                <li><a href="#player7" class="player7 buttons">Rabecka Parker</a></li>
                                <li><a href="#player8" class="player8 buttons">Hannah Poortinga</a></li> 
                                <li><a href="#player9" class="player9 buttons">Jade Sharp</a></li>
                                <li><a href="#player10" class="player10 buttons">Jayda Tolentino</a></li>
                                <li><a href="#player11" class="player11 buttons">Lauren Wignall</a></li>            
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
                        <li>Fall Kickoff Classic - <span style="font-size:150%">1st</span></li>
                        <li>Fall State - 9th</li>
                        <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=874683" target="_new">SDM Fall Classic - 3rd</a></li> 
                        <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=874706" target="_new">Fall Freeze Out - 3rd</a></li>
                        <li><a href="http://www.usssa.com/sports/Tournament3.asp?TournamentID=884232" target="_new">Monster Stomp - 5th</a></li>   
                    </ul>  
                </li>  
            </ul> 
            </div><!-- container-->
            
            <div id="contentDiv">
            
                <div id="teami">
                <div id="teamPic"><img src="../images/teams/12Orange/12Orange-01.jpg" width="320" height="240" alt="12 orange team picture"></div>
                <p>
                 <table style="margin-top:-10px;">
                
                    
                    <tr>
                    <td rowspan="4"  width="" style="width:90px;text-align:center;font-size:18px;padding-left:10px;">OVERALL RECORD<br/>
                    <span style="font-size:33px;color:green;">11-8-1</span></td>
                </tr>
                    <tr>
                      <td width="100" class="category" style="width:90px;">
                            HEAD COACH:                      </td>
                        <td class="info">
                            Geoff Herselius                      </td>
                    </tr>
                    <tr>
                      <td  class="category">
                            ASST. COACH:                      </td>
                        <td  class="info">
                            Bill Sharp                      </td>
                    </tr>
                    <tr>
                      <td class="category">
                            ASST. COACH:                      </td>
                        <td class="info">
                            Chris Shelton                      </td>
                    </tr>
              </table>
                </p>
                
                
        <!--        <div id="usssaStatsiFrameWrapper">
                                <iframe name="usssaStats" id="usssaStats" src="http://www.usssa.com/sports/Team3.asp?TeamID=1837343"  frameborder="0" seamless="seamless" scrolling="no"></iframe>
                            </div><!-- end iframeWrapper-->
                
               
                <p style="font-size:14px;"><a href="http://www.usssa.com/sports/Team3.asp?TeamID=1837343" title="Iowa Renegades USSSA page" target="_blank">
                            <img src="../images/USSSA_Logo.gif" width="181" height="45" alt="USSSA Logo">
                            <br/>Click to view the USSSA page for this team.
                        </a></p>
              </div>
            
            
            <div id="player1i">
                
                <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
                <table style="">
                
                    <tr>
                      <td colspan="3" style="text-align:center; font-size:190%;">
                            Hannah Blackford                      </td>
                    </tr>
                    <tr>
                    <td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">02</div></td>
                </tr>
                    <tr>
                      <td width="50" class="category">
                            NICKNAME:                      </td>
                        <td class="info">
                            Boo                      </td>
                    </tr>
                    <tr>
                      <td  class="category">
                            POSITIONS:                      </td>
                        <td  class="info">
                            P | SS | OF                      </td>
                    </tr>
                    <tr>
                      <td class="category">
                            BATS:                      </td>
                        <td class="info">
                            Right | Left                      </td>
                    </tr>
                    <tr>
                      <td class="category">
                            THROWS:                      </td>
                        <td class="info">
                            Right                      </td>
                    </tr>
              </table>
                </div>
            <div id="player2i">
               <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
                <table style="">
                
                    <tr>
                      <td colspan="3" style="text-align:center; font-size:190%;">
                            Megan Coleman                      </td>
                    </tr>
                    <tr>
                    <td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">7</div></td>
                </tr>
                    <tr>
                      <td width="50" class="category">
                            NICKNAME:                      </td>
                        <td class="info">
                            M.C. Hammer                      </td>
                    </tr>
                    <tr>
                      <td  class="category">
                            POSITIONS:                      </td>
                        <td  class="info">
                            P | OF | SS                      </td>
                    </tr>
                    <tr>
                      <td class="category">
                            BATS:                      </td>
                        <td class="info">
                            Right                      </td>
                    </tr>
                    <tr>
                      <td class="category">
                            THROWS:                      </td>
                        <td class="info">
                            Right                      </td>
                    </tr>
              </table>
                </div>
            <div id="player3i">
                <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
                <table style="">
                
                    <tr>
                      <td colspan="3" style="text-align:center; font-size:190%;">
                            Brianna Colwell                      </td>
                    </tr>
                    <tr>
                    <td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">00</div></td>
                </tr>
                    <tr>
                      <td width="50" class="category">
                            NICKNAME:                      </td>
                        <td class="info">
                            Breezy                      </td>
                    </tr>
                    <tr>
                      <td  class="category">
                            POSITIONS:                      </td>
                        <td  class="info">
                            P | OF | SS                      </td>
                    </tr>
                    <tr>
                      <td class="category">
                            BATS:                      </td>
                        <td class="info">
                            Right                      </td>
                    </tr>
                    <tr>
                      <td class="category">
                            THROWS:                      </td>
                        <td class="info">
                            Right                      </td>
                    </tr>
              </table>
                </div>
            <div id="player4i">
                <p>
               <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
                <table style="">
                
                    <tr>
                      <td colspan="3" style="text-align:center; font-size:190%;">
                            Macy Herselius                      </td>
                    </tr>
                    <tr>
                    <td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">99</div></td>
                </tr>
                    <tr>
                      <td width="50" class="category">
                            NICKNAME:                      </td>
                        <td class="info">
                            Hershey                      </td>
                    </tr>
                    <tr>
                      <td  class="category">
                            POSITIONS:                      </td>
                        <td  class="info">
                            C | 1st | OF                      </td>
                    </tr>
                    <tr>
                      <td class="category">
                            BATS:                      </td>
                        <td class="info">
                            Right                      </td>
                    </tr>
                    <tr>
                      <td class="category">
                            THROWS:                      </td>
                        <td class="info">
                            Right                      </td>
                    </tr>
              </table>
                </div>
            <div id="player5i">
               <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
                <table style="">
                
                    <tr>
                      <td colspan="3" style="text-align:center; font-size:190%;">
                            Lyric McKinney                      </td>
                    </tr>
                    <tr>
                    <td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">20</div></td>
                </tr>
                    <tr>
                      <td width="50" class="category">
                            NICKNAME:                      </td>
                        <td class="info">
                            Speed                      </td>
                    </tr>
                    <tr>
                      <td  class="category">
                            POSITIONS:                      </td>
                        <td  class="info">
                            3rd | OF | SS                      </td>
                    </tr>
                    <tr>
                      <td class="category">
                            BATS:                      </td>
                        <td class="info">
                            Right                      </td>
                    </tr>
                    <tr>
                      <td class="category">
                            THROWS:                      </td>
                        <td class="info">
                            Right                      </td>
                    </tr>
              </table>
                </div>
            <div id="player6i">
                <p>
               <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
                <table style="">
                
                    <tr>
                      <td colspan="3" style="text-align:center; font-size:190%;">
                            Aspen Mulstay                      </td>
                    </tr>
                    <tr>
                    <td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">6</div></td>
                </tr>
                    <tr>
                      <td width="50" class="category">
                            NICKNAME:                      </td>
                        <td class="info">
                            "Smiling" Turtle                      </td>
                    </tr>
                    <tr>
                      <td  class="category">
                            POSITIONS:                      </td>
                        <td  class="info">
                            OF | SS                      </td>
                    </tr>
                    <tr>
                      <td class="category">
                            BATS:                      </td>
                        <td class="info">
                            Right                      </td>
                    </tr>
                    <tr>
                      <td class="category">
                            THROWS:                      </td>
                        <td class="info">
                            Right                      </td>
                    </tr>
              </table>
                </div>
            <div id="player7i">
                <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
                <table style="">
                
                    <tr>
                      <td colspan="3" style="text-align:center; font-size:190%;">
                            Rabecka Parker                      </td>
                    </tr>
                    <tr>
                    <td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">0</div></td>
                </tr>
                    <tr>
                      <td width="50" class="category">
                            NICKNAME:                      </td>
                        <td class="info">
                            Bunny                      </td>
                    </tr>
                    <tr>
                      <td  class="category">
                            POSITIONS:                      </td>
                        <td  class="info">
                             OF | 3rd                      </td>
                    </tr>
                    <tr>
                      <td class="category">
                            BATS:                      </td>
                        <td class="info">
                            Right                      </td>
                    </tr>
                    <tr>
                      <td class="category">
                            THROWS:                      </td>
                        <td class="info">
                            Right                      </td>
                    </tr>
              </table>
                </div>
            <div id="player8i">
                <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
                <table style="">
                
                    <tr>
                      <td colspan="3" style="text-align:center; font-size:190%;">
                            Hannah Poortinga                      </td>
                    </tr>
                    <tr>
                    <td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">24</div></td>
                </tr>
                    <tr>
                      <td width="50" class="category">
                            NICKNAME:                      </td>
                        <td class="info">
                            Rae Gun                      </td>
                    </tr>
                    <tr>
                      <td  class="category">
                            POSITIONS:                      </td>
                        <td  class="info">
                            1st | C | OF                      </td>
                    </tr>
                    <tr>
                      <td class="category">
                            BATS:                      </td>
                        <td class="info">
                            Right                      </td>
                    </tr>
                    <tr>
                      <td class="category">
                            THROWS:                      </td>
                        <td class="info">
                            Right                      </td>
                    </tr>
              </table>
                </div>
            <div id="player9i">
               <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
                 <table style="">
                
                    <tr>
                      <td colspan="3" style="text-align:center; font-size:190%;">
                            Jade Sharp                      </td>
                    </tr>
                    <tr>
                    <td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">18</div></td>
                </tr>
                    <tr>
                      <td width="50" class="category">
                            NICKNAME:                      </td>
                        <td class="info">
                            Sonic                      </td>
                    </tr>
                    <tr>
                      <td  class="category">
                            POSITIONS:                      </td>
                        <td  class="info">
                            2nd | OF | SS                      </td>
                    </tr>
                    <tr>
                      <td class="category">
                            BATS:                      </td>
                        <td class="info">
                            Right | Left                      </td>
                    </tr>
                    <tr>
                      <td class="category">
                            THROWS:                      </td>
                        <td class="info">
                            Right                      </td>
                    </tr>
              </table>
                </div>
            <div id="player10i">
               <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
                <table style="">
                
                    <tr>
                      <td colspan="3" style="text-align:center; font-size:190%;">
                            Jayda Tolentino                      </td>
                    </tr>
                    <tr>
                    <td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">0</div></td>
                </tr>
                    <tr>
                      <td width="50" class="category">
                            NICKNAME:                      </td>
                        <td class="info">
                            Dynamite                      </td>
                    </tr>
                    <tr>
                      <td  class="category">
                            POSITIONS:                      </td>
                        <td  class="info">
                            OF | 2nd                      </td>
                    </tr>
                    <tr>
                      <td class="category">
                            BATS:                      </td>
                        <td class="info">
                            Right                      </td>
                    </tr>
                    <tr>
                      <td class="category">
                            THROWS:                      </td>
                        <td class="info">
                            Right                      </td>
                    </tr>
              </table>
                </div>
            <div id="player11i">
                <img src="../images/photo-coming-soon.jpg" style="margin:0 auto;display:block;" width="280" height="280">
                <table style="">
                
                    <tr>
                      <td colspan="3" style="text-align:center; font-size:190%;">
                            Lauren Wignall                      </td>
                    </tr>
                    <tr>
                    <td rowspan="5"  width="50"style="width:50px;"><div id="playerNumber">21</div></td>
                </tr>
                    <tr>
                      <td width="50" class="category">
                            NICKNAME:                      </td>
                        <td class="info">
                            Wiggy                      </td>
                    </tr>
                    <tr>
                      <td  class="category">
                            POSITIONS:                      </td>
                        <td  class="info">
                            SS | 3rd | OF                      </td>
                    </tr>
                    <tr>
                      <td class="category">
                            BATS:                      </td>
                        <td class="info">
                            Right                      </td>
                    </tr>
                    <tr>
                      <td class="category">
                            THROWS:                      </td>
                        <td class="info">
                            Right                      </td>
                    </tr>
              </table>
                </div>
                
                
            <div id="googleCalendari">
            
            <div id="googleCalendarWrapper">
                <iframe src="https://www.google.com/calendar/embed?showCalendars=0&amp;showTz=0&amp;height=400&amp;wkst=2&amp;bgcolor=%23ff9900&amp;src=ah3sjdtjgqsdp0negfnth8458g%40group.calendar.google.com&amp;color=%238C500B&amp;ctz=America%2FChicago" style=" border-width:0 " width="390" height="400" frameborder="0" scrolling="no"></iframe>
            </div><!--googleCalendarWrapper-->
            </div><!--googleCalendari-->
            </div><!-- contentDiv-->
        </div>
     <!--customAccordion--> 
    
    </div><!--homei-->
    </div><!--mainWrapper-->
    </div><!--content-->
    </div><!--contentWrapper-->
    
   
    
    
    </body>
</html>
