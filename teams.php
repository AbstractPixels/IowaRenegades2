 <style>
 
 @font-face {
			font-family: 'EnigmaticRegular';
			src: url('fonts/Enigma__2-webfont.eot');
			src: url('fonts/Enigma__2-webfont.eot?#iefix') format('embedded-opentype'),
				 url('fonts/Enigma__2-webfont.woff') format('woff'),
				 url('fonts/Enigma__2-webfont.ttf') format('truetype'),
				 url('fonts/Enigma__2-webfont.svg#EnigmaticRegular') format('svg');
			font-weight: normal;
			font-style: normal;
			}
			
			@font-face {
    font-family: 'BreeSerifRegular';
    src: url('fonts/BreeSerif-Regular-webfont.eot');
    src: url('fonts/BreeSerif-Regular-webfont.eot?#iefix') format('embedded-opentype'),
         url('fonts/BreeSerif-Regular-webfont.woff') format('woff'),
         url('fonts/BreeSerif-Regular-webfont.ttf') format('truetype'),
         url('fonts/BreeSerif-Regular-webfont.svg#BreeSerifRegular') format('svg');
    font-weight: normal;
    font-style: normal;

}
 
 
 
 
 	/* Accordian Stylesheet */



a { }
a:visited { }
a:hover { text-decoration: none; }
img { border: none; }
ul, ol, dl, table { margin-bottom: 0px; }



/*****Custom Classes*****/
.clearing { clear: both; }
.clearfix { overflow: hidden; }
.last { margin-bottom: 0; }
.screenReader { left: -9999px; position: absolute; top: -9999px; }



/*****Accordion Styles*****/
#customAccordion	{
	width:440px;
	height:750px;
	 padding:0;
	 margin-left:-55px;
	 overflow:hidden;
	 position:relative;
	/********** border: solid 1px yellow;****/
	 }
	 
	 #customAccordion	p {font-size:13px;font-family:'BreeSerifRegular', Arial, sans-serif;text-align:center;color:white;margin: -2px 0 0px 40px;}
	 #customAccordion	ul, #customAccordion	ol, #customAccordion	dl, #customAccordion	table { margin-bottom: 0px; }
	
ul#accordion, ul#accordion ul { list-style: none; margin: 0; }
ul#accordion {margin:0 0 0 -60px;overflow:hidden;}
ul#accordion li {list-style: none;width:430px;border: none;clear:both;margin:0 0 0 50px; }

ul#accordion ul li { border: none; color: orange; padding: 5px 0px;margin:0 0 0 15px; }

	ul#accordion ul li ul li { border-top: none;font-size:93%; }
ul#accordion ul li ul li:last-child { border-top: none; }
ul#accordion a.heading { 
	background: black;
	text-shadow: 0px 1px 2px white; 
	color:orange;
	display: block;
	 font-family:'BreeSerifRegular', Arial, sans-serif;
	font-size: 19px;
	line-height: 18px;
	padding: 8px 0px;
	text-decoration: none;
	text-align:center;
}

ul#accordion a.heading:hover { background: green; color: #fff; }
 ul#accordion li a.heading { 
 background: black; 
 color: #fff; 
 }
 
ul#accordion li ul a {  color: orange; text-decoration: none; }
ul#accordion li ul a:hover { border-bottom: none; }


/*****Additional Custom Accordion Styles*****/
#customAccordion ul#accordion li ul { display: none;font-weight:normal;font-family:'BreeSerifRegular', Arial, sans-serif; }
#customAccordion ul#accordion li.current ul { display: block; }

#customAccordion ul#accordion ul {
	clear:both;
	}
	
#customAccordion ul#accordion ul li {
	margin:0px 20px 0 0 0px;
	width:160px;
	display:inline;
	float:left;
	clear:none;
	padding:0;
	}
	
	#customAccordion ul#accordion ul li.current {background-color:orange;}
	
#16Orange, #16Green, #14Orange, #14Green, 10Orange, #10Green	{
	
	}
	
	#customAccordion ul#accordion ul ul#12Orange li, #customAccordion ul#accordion ul ul#12Green li, #customAccordion ul#accordion ul ul#12White li	{
		margin-left:-80px;
		
		}

#fadeshowBig {
	width:440px;
	height:320px;
	margin:0 0 0 0;
	display:block;
	border-style:solid;
	border-width:3px;
	border-radius: 5px;
						-webkit-border-radius: 6px;
						-moz-border-radius: 6px;
						-ms-border-radius: 6px;
					box-shadow: 2px 2px 6px black, -2px -2px 6px black;
						-moz-box-shadow: 2px 2px 6px black, -2px -2px 6px black;
						-webkit-box-shadow: 2px 2px 6px black, -2px -2px 6px black;
						-ms-box-shadow: 2px 2px 6px black, -2px -2px 6px black;
						animation:border-colorSwitch1 5s ease-out 0s infinite alternate;	/* W3 */
							-moz-animation:border-colorSwitch1 5s ease-out 0s infinite alternate;	/* Firefox: */
							-webkit-animation:border-colorSwitch1 5s ease-out 0s infinite alternate;
							-o-animation:border-colorSwitch1 5s ease-out 0s infinite alternate;
							-ms-animation:border-colorSwitch1 5s ease-out 0s infinite alternate;
						overflow:hidden;
	}


 </style>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="js/fadeslideshow.js">
        
        /***********************************************
        * Ultimate Fade In Slideshow v2.0- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
        * This notice MUST stay intact for legal use
        * Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
        ***********************************************/
        
        </script>
        
       
        <script type="text/javascript">
        
        var mygallery4=new fadeSlideShow({
            wrapperid: "fadeshowBig", //ID of blank DIV on page to house Slideshow
            dimensions: [440, 320], //width/height of gallery in pixels. Should reflect dimensions of largest image
            imagearray: [
                   	 ["images/slideshow/big/SlideshowBig1.jpg"],
                   	 ["images/slideshow/big/SlideshowBig2.jpg"],
                   	 ["images/slideshow/big/SlideshowBig3.jpg"],
                   	 ["images/slideshow/big/SlideshowBig4.jpg"],
                   	 ["images/slideshow/big/SlideshowBig5.jpg"],
                   	 ["images/slideshow/big/SlideshowBig6.jpg"],
                   	 ["images/slideshow/big/SlideshowBig7.jpg"],
                   	 ["images/slideshow/big/SlideshowBig8.jpg"]
					  //<--no trailing comma after very last image element!
            ],
            displaymode: {type:'auto', pause:14500, cycles:0, wraparound:false},
            persist: false, //remember last viewed slide and recall within same session?
            fadeduration: 1000, //transition duration (milliseconds)
            descreveal: "none",
            togglerid: ""
        })
		</script>
 
 
 <script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="jquery-scrollTo.js"></script>
<script type="text/javascript" src="js/accordion.js"></script>





 
 
 
<div id="customAccordion">
<p style="color:white;">Click a team to view the current roster.</p>         
	<?php $section = $_GET['section']; ?>  
<ul id="accordion">     
        <li<?php if($section == '18U'): ?> class="" <?php endif; ?>>  
        <a href="?section=18U" class="heading">18u Renegades Elite</a>  
            <ul id="18U">  
            <li style="width:440px;display:block;float:none;text-align:center;margin-left:-45px;font-size:92%;">Player 1</li>  
            <li style="width:440px;display:block;float:none;text-align:center;margin-left:-45px;font-size:92%;">Player 2</li>
            <li style="width:440px;display:block;float:none;text-align:center;margin-left:-45px;font-size:92%;">Player 3</li> 
            <li style="width:440px;display:block;float:none;text-align:center;margin-left:-45px;font-size:92%;">Player 4</li> 
            <li style="width:440px;display:block;float:none;text-align:center;margin-left:-45px;font-size:92%;">Player 5</li> 
            <li style="width:440px;display:block;float:none;text-align:center;margin-left:-45px;font-size:92%;">Player 6</li>
            <li style="width:440px;display:block;float:none;text-align:center;margin-left:-45px;font-size:92%;">Player 7</li>
            <li style="width:440px;display:block;float:none;text-align:center;margin-left:-45px;font-size:92%;">Player 8</li> 
            <li style="width:440px;display:block;float:none;text-align:center;margin-left:-45px;font-size:92%;">Player 9</li>
            <li style="width:440px;display:block;float:none;text-align:center;margin-left:-45px;font-size:92%;">Player 10</li>
            <li style="width:440px;display:block;float:none;text-align:center;margin-left:-45px;font-size:92%;">Player 11</li> 
            <li style="width:440px;display:block;float:none;text-align:center;margin-left:-45px;font-size:92%;"><a href="http://www.iowarenegades.com/indexTEAMS-TEST.html#abouti" target="_parent">Player 12</a></li><!-- inline style to remove top border of last child-->   
            </ul>  
        </li>  
        
        <li<?php if($section == '' || $section == '16U'): ?> class=""<?php endif; ?>>  
        <a href="?section=16U" class="heading">16u Renegades</a>  
            <ul id="16U">  
                <li<?php if($section == '16Orange'): ?> class=""<?php endif; ?>>  
                <a href="?section=16Orange" class="heading" style="color:orange;">ORANGE</a>  
                    <ul id="16Orange">  
                        <li>Player 1</li>  
                        <li>Player 2</li>
                        <li>Player 3</li> 
                        <li>Player 4</li> 
                        <li>Player 5</li> 
                        <li>Player 6</li>
                        <li>Player 7</li>
                        <li>Player 8</li> 
                        <li>Player 9</li>
                        <li>Player 10</li>
                        <li>Player 11</li> 
                        <li>Player 12</li>  
                    </ul> 
                </li><!--16U Orange--> 
                <li<?php if($section == '16Green'): ?> class=""<?php endif; ?>>  
                <a href="?section=16Green" class="heading" style="color:green;">GREEN</a>  
                    <ul id="16Green">  
                        <li>Player 1</li>  
                        <li>Player 2</li>
                        <li>Player 3</li> 
                        <li>Player 4</li> 
                        <li>Player 5</li> 
                        <li>Player 6</li>
                        <li>Player 7</li>
                        <li>Player 8</li> 
                        <li>Player 9</li>
                        <li>Player 10</li>
                        <li>Player 11</li> 
                        <li>Player 12</li>  
                    </ul>  
                </li><!--16U Green-->
            </ul><!--16U heading-->
        </li>
        
        <li<?php if($section == '' || $section == '14U'): ?> class=""<?php endif; ?>>  
        <a href="?section=14U" class="heading">14u Renegades</a>  
            <ul id="14U">  
                <li<?php if($section == '14Orange'): ?> class=""<?php endif; ?>>  
                <a href="?section=14Orange" class="heading" style="color:orange;">ORANGE</a>  
                    <ul id="14Orange">  
                        <li>Player 1</li>  
                        <li>Player 2</li>
                        <li>Player 3</li> 
                        <li>Player 4</li> 
                        <li>Player 5</li> 
                        <li>Player 6</li>
                        <li>Player 7</li>
                        <li>Player 8</li> 
                        <li>Player 9</li>
                        <li>Player 10</li>
                        <li>Player 11</li> 
                        <li>Player 12</li>  
                    </ul>  
                </li>
            
                <li<?php if($section == '14Green'): ?> class=""<?php endif; ?>>  
                <a href="?section=14Green" class="heading" style="color:green;">GREEN</a>  
                    <ul id="14Green">  
                        <li>Player 1</li>  
                        <li>Player 2</li>
                        <li>Player 3</li> 
                        <li>Player 4</li> 
                        <li>Player 5</li> 
                        <li>Player 6</li>
                        <li>Player 7</li>
                        <li>Player 8</li> 
                        <li>Player 9</li>
                        <li>Player 10</li>
                        <li>Player 11</li> 
                        <li>Player 12</li>  
                    </ul>  
                </li>
            </ul>
        </li> 
        
        <li<?php if($section == '' || $section == '12U'): ?> class=""<?php endif; ?>>  
        <a href="?section=12U" class="heading">12u Renegades</a>  
            <ul id="12U">  
                <li style="width:135px;margin-left:-15px;"<?php if($section == '12Orange'): ?> class="" <?php endif; ?>>  
                <a href="?section=12Orange" class="heading" style="color:orange;">ORANGE</a>  
                    <ul id="12Orange">  
                        <li style="margin-left:-30px;">Hannah Blackford</li>  
                        <li style="margin-left:-30px;">Megan Coleman</li>
                        <li style="margin-left:-30px;">Brianna Colwell</li> 
                        <li style="margin-left:-30px;">Macy Herselius</li> 
                        <li style="margin-left:-30px;">Lyric McKinney</li> 
                        <li style="margin-left:-30px;">Aspen Mulstay</li>
                        <li style="margin-left:-30px;">Rebecca Parker</li>
                        <li style="margin-left:-30px;">Hannah Poortinga</li> 
                        <li style="margin-left:-30px;">Jade Sharp</li>
                        <li style="margin-left:-30px;">Jayda Tolentino</li>
                        <li style="margin-left:-30px;">Lauren Wignall</li> 
                    </ul>  
                </li>

                <li style="width:135px;margin-left:-10px;"<?php if($section == '12Green'): ?> class=""<?php endif; ?>>  
                <a href="?section=12Green" class="heading" style="color:green;">GREEN</a>  
                    <ul id="12Green">  
                        <li style="margin-left:-20px;">Carissa Boley</li>  
                        <li style="margin-left:-20px;">Malayna Duff</li>
                        <li style="margin-left:-20px;">Jessica Gruber</li> 
                        <li style="margin-left:-20px;">Kayla Lorenz</li> 
                        <li style="margin-left:-20px;">Reanna Rist</li> 
                        <li style="margin-left:-20px;">Sarah Rosen</li>
                        <li style="margin-left:-20px;">Kayla Sunderland</li>
                        <li style="margin-left:-20px;">Leah Tigges</li> 
                        <li style="margin-left:-20px;">Macee Wilson</li>
                        <li style="margin-left:-20px;">Player 10</li>
                        <li style="margin-left:-20px;">Player 11</li> 
                        <li style="margin-left:-20px;">Player 12</li>  
                    </ul>  
                </li>
                
                








                
                
                <li style="width:135px;margin-left:-10px;"<?php if($section == '12White'): ?> class=""<?php endif; ?>>  
                <a href="?section=12White" class="heading">WHITE</a>  
                    <ul id="12White">  
                        <li style="margin-left:-20px;">Player 1</li>  
                        <li style="margin-left:-20px;">Player 2</li>
                        <li style="margin-left:-20px;">Player 3</li> 
                        <li style="margin-left:-20px;">Player 4</li> 
                        <li style="margin-left:-20px;">Player 5</li> 
                        <li style="margin-left:-20px;">Player 6</li>
                        <li style="margin-left:-20px;">Player 7</li>
                        <li style="margin-left:-20px;">Player 8</li> 
                        <li style="margin-left:-20px;">Player 9</li>
                        <li style="margin-left:-20px;">Player 10</li>
                        <li style="margin-left:-20px;">Player 11</li> 
                        <li style="margin-left:-20px;">Player 12</li>  
                    </ul>  
                </li>
            </ul>
        </li>    
            
            <li<?php if($section == '' || $section == '10U'): ?> class=""<?php endif; ?>>  
            <a href="?section=10U" class="heading">10u Renegades</a>  
            <ul id="10U">  
                <li<?php if($section == '10Orange'): ?> class=""<?php endif; ?>>  
                <a href="?section=10Orange" class="heading" style="color:orange;">ORANGE</a>  
                    <ul id="10Orange">  
                        <li>Player 1</li>  
                        <li>Player 2</li>
                        <li>Player 3</li> 
                        <li>Player 4</li> 
                        <li>Player 5</li> 
                        <li>Player 6</li>
                        <li>Player 7</li>
                        <li>Player 8</li> 
                        <li>Player 9</li>
                        <li>Player 10</li>
                        <li>Player 11</li> 
                        <li>Player 12</li>  
                    </ul>  
                </li>
                
                <li<?php if($section == '10Green'): ?> class=""<?php endif; ?>>  
                <a href="?section=10Green" class="heading" style="color:green;">GREEN</a>  
                    <ul id="10Green">  
                        <li>Player 1</li>  
                        <li>Player 2</li>
                        <li>Player 3</li> 
                        <li>Player 4</li> 
                        <li>Player 5</li> 
                        <li>Player 6</li>
                        <li>Player 7</li>
                        <li>Player 8</li> 
                        <li>Player 9</li>
                        <li>Player 10</li>
                        <li>Player 11</li> 
                        <li>Player 12</li>  
                    </ul>  
                </li>
            </ul>
        	    </li>
                
                
 <li<?php if($section == '8U'): ?> class="" <?php endif; ?>>  
        <a href="?section=8U" class="heading">8u Renegades</a>  
            <ul id="8U">  
            <li style="width:440px;display:block;float:none;text-align:center;margin-left:-45px;font-size:92%;">Player 1</li>  
            <li style="width:440px;display:block;float:none;text-align:center;margin-left:-45px;font-size:92%;">Player 2</li>
            <li style="width:440px;display:block;float:none;text-align:center;margin-left:-45px;font-size:92%;">Player 3</li> 
            <li style="width:440px;display:block;float:none;text-align:center;margin-left:-45px;font-size:92%;">Player 4</li> 
            <li style="width:440px;display:block;float:none;text-align:center;margin-left:-45px;font-size:92%;">Player 5</li> 
            <li style="width:440px;display:block;float:none;text-align:center;margin-left:-45px;font-size:92%;">Player 6</li>
            <li style="width:440px;display:block;float:none;text-align:center;margin-left:-45px;font-size:92%;">Player 7</li>
            <li style="width:440px;display:block;float:none;text-align:center;margin-left:-45px;font-size:92%;">Player 8</li> 
            <li style="width:440px;display:block;float:none;text-align:center;margin-left:-45px;font-size:92%;">Player 9</li>
            <li style="width:440px;display:block;float:none;text-align:center;margin-left:-45px;font-size:92%;">Player 10</li>
            <li style="width:440px;display:block;float:none;text-align:center;margin-left:-45px;font-size:92%;">Player 11</li> 
            
            </ul>  
        </li>  
                    <li>&nbsp;</li>
                
              
            <li><div id="fadeshowBig"></div></li>                
    
</ul><!--accordion-->  
</div><!--customAccordion-->

<script type="text/javascript">
	$(document).ready(function() {
		$('#accordion').accordion();
       
        
	});
</script>
