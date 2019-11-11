<style type="text/css">

/*
	Theme Name: HTML5 Blank
	Theme URI: http://html5blank.com
	Description: HTML5 Blank WordPress Theme
	Version: 1.4.3
	Author: Todd Motto (@toddmotto)
	Author URI: http://toddmotto.com
	Tags: Blank, HTML5, CSS3

	License: MIT
	License URI: http://opensource.org/licenses/mit-license.php
*/

/*------------------------------------*\
    MAIN
\*------------------------------------*/

/* global box-sizing */
*,
*:after,
*:before {
	-moz-box-sizing:border-box;
	box-sizing:border-box;
	-webkit-font-smoothing:antialiased;
	font-smoothing:antialiased;
	text-rendering:optimizeLegibility;
}
/* html element 62.5% font-size for REM use */
html {
	font-size:62.5%;
}
body {
	color:#444;
	font-family: 'Special Elite', cursive;
	background: black;

}
/* clear */
.clear:before,
.clear:after {
    content:' ';
    display:table;
}

.clear:after {
    clear:both;
}
.clear {
    *zoom:1;
}
img {
	max-width:100%;
	vertical-align:bottom;
}
a {
	color:#444;
	text-decoration:none;
}
a:hover {
	/*color:#444;*/
}
a:focus {
	outline:0;
}
a:hover,
a:active {
	outline:0;
}
input:focus {
	outline:0;
	border:1px solid #04A4CC;
}

/*------------------------------------*\
    STRUCTURE
\*------------------------------------*/

/* wrapper */
.wrapper {
	max-width:1280px;
	width:95%;
	margin:0 auto;
	position:relative;
}
/* header */
.header {

}
/* logo */
.logo {

}
.logo-img {

}
/* nav */
.nav {

}
/* sidebar */
.sidebar {

}
/* footer */
.footer {

}

/*------------------------------------*\
    PAGES
\*------------------------------------*/


h1 {
	background: -webkit-linear-gradient(#96D101, #008000);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
}


h2 {
margin: 0;
font-size: 20px;
/*color: green;*/
/*font-family: 'Federant', cursive;*/
background: -webkit-linear-gradient(#96D101, #008000);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
}

p {
line-height: 15px;
font-size: 14px;
color: #a3a3a3;
}




.div-overlay {
	width: 100%; 
	height: 100%; 
	position: absolute; 
	z-index: 1; 
	background: rgba(0,0,0,.7);

	background: -moz-radial-gradient(center, ellipse cover,  rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.85) 1%, rgba(0,0,0,0.95) 100%);
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(0,0,0,0.85) 0%,rgba(0,0,0,0.85) 1%,rgba(0,0,0,0.95) 100%);
	background: radial-gradient(ellipse at center,  rgba(0,0,0,0.85) 0%,rgba(0,0,0,0.85) 1%,rgba(0,0,0,0.95) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d9000000', endColorstr='#f2000000',GradientType=1 );

	border-bottom: 1px solid green;
	/*border-left: 1px solid green;*/

}





.navigacija-reg {
	background: black;


    background: repeating-linear-gradient(
      -55deg,
      #000000,
      #000000 10px,
      #0f0f0f 10px,
      #0f0f0f 20px
    );

	width: 100%;
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 15px 5%;
	border-bottom: 1px solid green;
	position: fixed;
	top: 0;
	z-index: 999;
}


.naslov-grupa {
	background: black;


    background: repeating-linear-gradient(
      55deg,
      #000000,
      #000000 10px,
      #0f0f0f 10px,
      #0f0f0f 20px
    );

	width: 100%;
	display: flex;
	justify-content: space-around;
	align-items: center;
	padding: 15px 5px;
	border-bottom: 1px solid green;
	border-top: 1px solid green;

}


.naslov-grupa h2 {
	font-size: 30px;
}



.holder-sadrzaja p {
	font-size: 13px;
	line-height: 16px;
}



.intro-holder {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;

    background: repeating-linear-gradient(
      55deg,
      #000000,
      #000000 40px,
      #090909 40px,
      #090909 80px
    );

    overflow: hidden;
}




.holder-sadrzaja {
	width: 90%;
    /* min-height: 100vh; */
	display: flex;
	/*justify-content: center;*/
	align-items: center;
	flex-direction: column;
}





.regular-header {
	width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.left-strana {
	width: 100%;
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;

}

.div-nav-reg {
	width: 100%;
}


.right-strana {

}




.tri-ikone-holder {
	display: flex;
	justify-content: center;
	align-items: center;
}

.ikona {
	width: 108px;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
}


.ikona-empty {
	width: 25px;
}

.ikona-slika {
	width: 100px;
	height: 100px;
	background-position: center;
	background-size: cover;
	background-repeat: no-repeat;
	border: 1px solid green;
	border-radius: 18px;

	overflow: hidden;
}


.bg-slika-grune {

	background-image: url(https://teamgreen-pavlovic.de/wp-content/uploads/grunanlagenservice-teamgreen-pavlovic-munchen11.jpg);
}



.bg-slika-gebaude {

	background-image: url(https://teamgreen-pavlovic.de/wp-content/uploads/Gebaudereinigung-teamgreen-pavlovic-munchen21.jpg);
}



.bg-slika-haus {

	background-image: url(https://teamgreen-pavlovic.de/wp-content/uploads/Hausmeisterservice-teamgreen-pavlovic-munchen23.jpg);
}




.bg-slika-winter {

	background-image: url(https://teamgreen-pavlovic.de/wp-content/uploads/Winterdienst-teamgreen-pavlovic-munchen38.jpg);
}






.bg-slika-tief {

	background-image: url(https://teamgreen-pavlovic.de/wp-content/uploads/WhatsApp-Image-2019-10-09-at-23.27.503.jpeg);
}






.bg-slika-kontakt {

	background-image: url(https://cdn.pixabay.com/photo/2015/01/25/21/02/phone-612061_960_720.jpg);
}








.slike2holder {
width: 100%;
display: flex;
justify-content: space-between;
align-items: center;
margin-bottom: 10px;
flex-wrap: wrap;
}



.slike2holder a {
	width: 49%;
}


.slika-thumb {
margin-bottom: 15px;
border-radius: 10px;
/*width: 180px;
height: 135px;*/
/*-webkit-filter: grayscale(100%);
filter: grayscale(100%);*/
border: 2px solid black;
transition: .3S;
}

.slika-thumb:hover {

/*-webkit-filter: grayscale(0%); 
filter: grayscale(0%);*/
border: 2px solid green;
}



.slika-thumb-div {
	margin-bottom: 15px;
	border-radius: 10px;
	border: 2px solid black;
	transition: .3S;	
	width: 100%;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
	height: 130px;
}





.ikona-overlaj {
	width: 100%;
	height: 100%;

background: -moz-radial-gradient(center, ellipse cover, rgba(255,255,255,0) 30%, rgba(0,0,0,0.9) 100%);
background: -webkit-radial-gradient(center, ellipse cover, rgba(255,255,255,0) 30%,rgba(0,0,0,0.9) 100%);
background: radial-gradient(ellipse at center, rgba(255,255,255,0) 30%,rgba(0,0,0,0.9) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#e6000000',GradientType=1 );

}


.ikona-txt {
	color: #a3a3a3;
}




.ikon-space {
	height: 15px;
}




.gumb-reg {
    margin: 15px;
    width: 200px;
    font-size: 15px;

}


.logo-regular {
	width: 100px;
}


.logo-regular-menu {
	background-image: url('<?php echo get_template_directory_uri(); ?>/munchen-bavaria.jpg');
	width: 100%;
	height: 100%;

	background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}


.nav-gumb-reg{
font-weight: bold;
width: 300px;
border: 1px solid green;
color: green;
background: #000000;
background: -moz-linear-gradient(top, #000000 0%, #25470e 100%);
background: -webkit-linear-gradient(top, #000000 0%,#25470e 100%);
background: linear-gradient(to bottom, #000000 0%,#25470e 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#25470e',GradientType=0 );
font-size: 15px;
padding: 10px;
border-radius: 25px;
text-align: center;
/*transition: 0.35s;*/
-webkit-transition: all 0.35s ease-in-out;
-moz-transition: all 0.35s ease-in-out;
-o-transition: all 0.35s ease-in-out;
transition: all 0.35s ease-in-out;
margin: 15px 0;
}



.nav-gumb-reg:hover {
background: #b3f900;
background: -moz-linear-gradient(top, #b3f900 16%, #00ee00 86%);
background: -webkit-linear-gradient(top, #b3f900 16%,#00ee00 86%);
background: linear-gradient(to bottom, #b3f900 16%,#00ee00 86%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3f900', endColorstr='#00ee00',GradientType=0 );
color: black;
}


.nav-gumb-reg:active {
	filter: drop-shadow(0 0 0.75rem limegreen);
}








.fancybox-thumbs__list a:before {
border: 6px solid green;
border-radius: 

}

.fancybox-is-open .fancybox-bg {
    opacity: 1;
}

.fancybox-bg {
background: #000000;
/*background-image: url(<?php echo get_template_directory_uri(); ?>/munchen-bavaria-bl.jpg);*/
background-repeat: no-repeat;
background-position: center;
background-size: cover;



  background: 
    /* top, transparent red, faked with gradient */ 
    linear-gradient(
      rgba(0, 0, 0, 0.80), 
      rgba(0, 0, 0, 0.80)
    ),
    /* bottom, image */
    url(<?php echo get_template_directory_uri(); ?>/munchen-bavaria-bl.jpg);
}



.fancybox-thumbs {
background: #000;
}

.fancybox-button svg path {
fill: green;
background: black;
}

.fancybox-progress {
background: green;
}



.fancybox-button {
    background: rgba(0,0,0,1);
}


.fancybox-image, .fancybox-spaceball {
    border: 3px solid green;
    border-radius: 7px;
}





.no-desktopen {
	display: flex;
	justify-content: center;
	align-items: center;
	position: fixed;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	background: black;
	z-index: 1000;
}



.yes-desktopen {
	display: none;
}



.menu-screen {
	display: none;
	position: fixed;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	background: black;

    background: repeating-linear-gradient(
      55deg,
      #000000,
      #000000 40px,
      #090909 40px,
      #090909 80px
    );

	z-index: -1;
}



.menu-screen-show {
	display: flex;
	z-index: 998;

}




.menu-ikona {
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	height: 30px;
}



.menu-ikona-close {
	display: none;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	height: 30px;
}



.menu-crta {
	width: 35px;
	height: 3px;
	background: green;
}

.hambyHide {
	display: none;
}


.hambyBtnCloseFlex {
	display: flex;
}















#pozivMob {
	width: 50px;
	height: 50px;

	position: fixed;
	bottom: 10px;
	right: 10px;
	z-index: 999;

	background: black;
	border-radius: 100%;
	border: 1px solid green;

	display: flex;
	justify-content: center;
	align-items: center;
	padding: 10px;
	opacity: .8;

}



	#pozivMob:hover {
		background: #162607;
	}


	#goUp {
		display: none;
	}



















.noSelect {
	-webkit-tap-highlight-color: transparent;

    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
















/*------------------------------------*\
    D E S K T O P
\*------------------------------------*/


	.page-hodl {
		display: flex;
		width: 100%;
		min-height: 100vh;
	}

	.left-sadrzaj {
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		width: 75%;
	}


	.right-menu {
		border-left: 1px solid green;
		display: flex;
		flex-direction: column;
		position: fixed;
		top: 0;
		right: 0;
		bottom: 0;
		justify-content: flex-end;
		align-items: center;
		width: 25%;

		background: black;

/*	    background: repeating-linear-gradient(
	      55deg,
	      #000000,
	      #000000 40px,
	      #090909 40px,
	      #090909 80px
	    );*/
	}


.tri-ikone-holder {
	justify-content: space-around;
}




.shadow {
   -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow:         inset 0 0 10px #000000;
}



.naslov-iznad {
	height: 100%;
    width: 100%;
	margin: auto 0;
	display: flex;
	justify-content: center;
	align-items: center;
	position: relative;
	flex-direction: column;
	position: relative;
	padding-top: 50px;

/*background: -moz-linear-gradient(top, rgba(207,252,60,0.15) 0%, rgba(206,206,206,0) 75%);
background: -webkit-linear-gradient(top, rgba(207,252,60,0.15) 0%,rgba(206,206,206,0) 75%);
background: linear-gradient(to bottom, rgba(207,252,60,0.15) 0%,rgba(206,206,206,0) 75%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#26cffc3c', endColorstr='#00cecece',GradientType=0 );*/


}


.pos-absolute {
	position: absolute;
}


.naslov-iznad h2 {
	font-size: 30px;

	text-shadow: 0px 0px 20px #A0CE00, 0px 0px 50px #A0CE00;

}




	
	.gumbi-holder {
		width: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.jedan-gumb {
		width: 50%;
		height: 70px;
		background-position: center;
		background-size: cover;
		background-repeat: no-repeat;
		position: relative;
		/*border: 2px solid black;*/
	}

	.gumb-overlaj {
/*
	   -moz-box-shadow:    inset 0 0 20px #000000;
	   -webkit-box-shadow: inset 0 0 20px #000000;
	   box-shadow:         inset 0 0 20px #000000;*/

		position: absolute;
		z-index: 5;
		width: 100%;
		height: 100%;
background: -moz-linear-gradient(-45deg, rgba(0,0,0,0) 0%, rgba(172,252,0,1) 100%);
background: -webkit-linear-gradient(-45deg, rgba(0,0,0,0) 0%,rgba(172,252,0,1) 100%);
background: linear-gradient(135deg, rgba(0,0,0,0) 0%,rgba(172,252,0,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#acfc00',GradientType=1 );
	}


	.anchor-class {
		
	}



	.anchor-class:hover {

	   -moz-box-shadow:    inset 0 0 20px #000000;
	   -webkit-box-shadow: inset 0 0 20px #000000;
	   box-shadow:         inset 0 0 20px #000000;
	}



	.gumb-txt {
		position: absolute;
		width: 100%;
		padding: 10px 0;
		background: rgb(0,0,0,.8);
		color: white;
		bottom: 15px;
		text-align: center;
		font-size: 12px;
		z-index: 6;

		font-weight: bold;

background: -moz-linear-gradient(45deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.9) 40%, rgba(0,0,0,0.9) 60%, rgba(0,0,0,0) 100%);
background: -webkit-linear-gradient(45deg, rgba(0,0,0,0) 0%,rgba(0,0,0,0.9) 40%,rgba(0,0,0,0.9) 60%,rgba(0,0,0,0) 100%);
background: linear-gradient(45deg, rgba(0,0,0,0) 0%,rgba(0,0,0,0.9) 40%,rgba(0,0,0,0.9) 60%,rgba(0,0,0,0) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#00000000',GradientType=1 );
	}


	.a-enter-vr {
		display: none;
	}



	.forma-desktop {
	    width: 30%;
	    min-height: 100vh;
	    padding: 45px;
	    padding-top: 90px;
	    position: absolute;
	    left: 0;
/*	    bottom: 0;
	    top: 0;*/
	    background: black;
	    border-right: 1px solid green;
	    display: flex;
	    justify-content: flex-start;
	    align-items: center;
	    flex-direction: column;
	    
	}



	.jumbo-desktop {
	    width: 100%;;
	    /*position: absolute;*/
/*	    right: 0;
	    bottom: 0;
	    top: 0;*/

	    display: flex;
	    justify-content: center;
	    align-items: center;

	}

	.jumbo-img {
		margin-bottom: auto;
	}


.tel-email{
	width: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
}


.kont-podaci{
	font-size: 12px;
background: -webkit-linear-gradient(#96D101, #008000);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent; 
}


::-webkit-scrollbar {
  width: 10px;
  background: black;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
  background: black;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: green; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}





.swiper-container {
width: 70%;
height: 400px;
padding-top: 50px;
padding-bottom: 50px;
}

.swiper-slide {
background-position: center;
background-size: cover;
width: 300px;
height: 300px;
}

.swiper-pagination-bullet {

background: gray;

}
.swiper-pagination-bullet-active {
opacity: 1;
background: green;
}




#landscapeGalerija {
	display: none;
}




/*

.gdpr-div {
	width: 100%;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;

	position: fixed;
	z-index: 999999;

	top: 0;
	bottom: 0;
	left: 0;
	right: 0;

	background: black;



    background: repeating-linear-gradient(
      55deg,
      #000000,
      #000000 20px,
      #0f0f0f 20px,
      #0f0f0f 40px
    );


}


.koja-stranica {
	border: 1px solid green;
	background: black;
	color: green;
	font-size: 25px;
	padding: 15px;
	border-radius: 20px;
	width: 400px;


}
*/

/*------------------------------------*\
	TYPOGRAPHY
\*------------------------------------*/

@font-face {
	font-family:'Font-Name';
	src:url('fonts/font-name.eot');
	src:url('fonts/font-name.eot?#iefix') format('embedded-opentype'),
		url('fonts/font-name.woff') format('woff'),
		url('fonts/font-name.ttf') format('truetype'),
		url('fonts/font-name.svg#font-name') format('svg');
    font-weight:normal;
    font-style:normal;
}

/*------------------------------------*\
    RESPONSIVE
\*------------------------------------*/

@media only screen and (min-width:320px) {

}
@media only screen and (min-width:480px) {
/*
.no-desktopen {
	display: flex;
	position: fixed;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	background: black;
	z-index: 1000;
}
*/


#landscapeGalerija {
	display: flex;
	justify-content: center;
	align-items: center;

	position: fixed;
	top: 0;
	bottom: 0;
	left:  0;
	right: 0;

	z-index: 9999;
	background: black;

	background-image: url(<?php echo get_template_directory_uri(); ?>/munchen-bavaria-bl.jpg);
background-repeat: no-repeat;
background-position: center;
background-size: cover;
}


.lands1Gall {
	background: rgba(0,0,0,.5);
}



.swiper-container {
width: 70%;
height: 100%;
padding-top: 50px;
padding-bottom: 50px;
}

.swiper-slide {
background-position: center;
background-size: cover;
width: 250px;
height: 250px;
border-radius: 7px;
}

.swiper-pagination-bullet {

background: gray;

}
.swiper-pagination-bullet-active {
opacity: 1;
background: green;
}




.gdpr-div {

/*    background: repeating-linear-gradient(
      55deg,
      #000000,
      #000000 20px,
      #050505 20px,
      #050505 40px
    );
*/

background: #000000;
background-image: url(<?php echo get_template_directory_uri(); ?>/munchen-bavaria-bl.jpg);
background-repeat: no-repeat;
background-position: center;
background-size: cover;

}



}
@media only screen and (min-width:768px) {

	#pozivMob {
		display: none;
	}

	#goUp {
		width: 35px;
		height: 35px;

		position: fixed;
		bottom: 50px;
		left: 10px;
		z-index: 999;

		background: black;
		border-radius: 100%;
		border: 1px solid green;

		display: flex;
		justify-content: center;
		align-items: center;
		padding: 5px;


		/*transition: background .1s;*/


	}

	#goUp:hover {
		background: #162607;
	}

}
@media only screen and (min-width:1024px) {

}
@media only screen and (min-width:1140px) {

	body {

	    background: repeating-linear-gradient(
	      -55deg,
	      #000000,
	      #000000 40px,
	      #050505 40px,
	      #050505 80px
	    );
	}

	.jedan-gumb {
		height: 200px;
	}


	.gumb-txt {
		font-size: 15px;
	}


	.naslov-grupa h2 {
		font-size: 50px;
	}

	
	.holder-sadrzaja p {
		font-size: 17px;
		line-height: 20px;
	}


	.holder-sadrzaja {
    	width: 60%;
	}



	.jumbo-desktop {
	    width: 70%;
	    padding: 50px;
	    position: absolute;
	    right: 0;
	    bottom: 0;
	    top: 0;

	    display: flex;
	    justify-content: center;
	    align-items: center;
	    padding-top: 150px;
	}


	.logo-regular {
		width: 150px;
	}


}
@media only screen and (min-width:1280px) {

}
@media only screen and (-webkit-min-device-pixel-ratio:1.5),
	   only screen and (min-resolution:144dpi) {

}

/*------------------------------------*\
    MISC
\*------------------------------------*/

::selection {
	background:#04A4CC;
	color:#FFF;
	text-shadow:none;
}
::-webkit-selection {
	background:#04A4CC;
	color:#FFF;
	text-shadow:none;
}
::-moz-selection {
	background:#04A4CC;
	color:#FFF;
	text-shadow:none;
}

/*------------------------------------*\
    WORDPRESS CORE
\*------------------------------------*/

.alignnone {
	margin:5px 20px 20px 0;
}
.aligncenter,
div.aligncenter {
	display:block;
	margin:5px auto 5px auto;
}
.alignright {
	float:right;
	margin:5px 0 20px 20px;
}
.alignleft {
	float:left;
	margin:5px 20px 20px 0;
}
a img.alignright {
	float:right;
	margin:5px 0 20px 20px;
}
a img.alignnone {
	margin:5px 20px 20px 0;
}
a img.alignleft {
	float:left;
	margin:5px 20px 20px 0;
}
a img.aligncenter {
	display:block;
	margin-left:auto;
	margin-right:auto;
}
.wp-caption {
	background:#FFF;
	border:1px solid #F0F0F0;
	max-width:96%;
	padding:5px 3px 10px;
	text-align:center;
}
.wp-caption.alignnone {
	margin:5px 20px 20px 0;
}
.wp-caption.alignleft {
	margin:5px 20px 20px 0;
}
.wp-caption.alignright {
	margin:5px 0 20px 20px;
}
.wp-caption img {
	border:0 none;
	height:auto;
	margin:0;
	max-width:98.5%;
	padding:0;
	width:auto;
}
.wp-caption .wp-caption-text,
.gallery-caption {
	font-size:11px;
	line-height:17px;
	margin:0;
	padding:0 4px 5px;
}
.sticky {

}
.bypostauthor {

}

/*------------------------------------*\
    PRINT
\*------------------------------------*/

@media print {
	* {
		background:transparent !important;
		color:#000 !important;
		box-shadow:none !important;
		text-shadow:none !important;
	}
	a,
	a:visited {
		text-decoration:underline;
	}
	a[href]:after {
		content:" (" attr(href) ")";
	}
	abbr[title]:after {
		content:" (" attr(title) ")";
	}
	.ir a:after,
	a[href^="javascript:"]:after,
	a[href^="#"]:after {
		content:"";
	}
	pre,blockquote {
		border:1px solid #999;
		page-break-inside:avoid;
	}
	thead {
		display:table-header-group;
	}
	tr,img {
		page-break-inside:avoid;
	}
	img {
		max-width:100% !important;
	}
	@page {
		margin:0.5cm;
	}
	p,
	h2,
	h3 {
		orphans:3;
		widows:3;
	}
	h2,
	h3 {
		page-break-after:avoid;
	}
}

</style>