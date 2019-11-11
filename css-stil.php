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
	color:#444;
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





body {
font-family: 'Special Elite', cursive;
background: black;
/*overflow-y: hidden;*/

}




.div-overlay {
    width: 100%; 
    height: 100%; 
    position: absolute; 
    z-index: -1; 
    background: rgba(0,0,0,.7);

    background: -moz-radial-gradient(center, ellipse cover,  rgba(0,0,0,0.65) 0%, rgba(0,0,0,0.65) 1%, rgba(0,0,0,0.95) 100%);
    background: -webkit-radial-gradient(center, ellipse cover,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0.65) 1%,rgba(0,0,0,0.95) 100%);
    background: radial-gradient(ellipse at center,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0.65) 1%,rgba(0,0,0,0.95) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d9000000', endColorstr='#f2000000',GradientType=1 );

    /*border-bottom: 1px solid green;*/
    /*border-left: 1px solid green;*/

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


h2 {
margin: 0;
font-size: 30px;
/*color: green;*/
/*font-family: 'Federant', cursive;*/
background: -webkit-linear-gradient(#96D101, #008000);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
}

p {
line-height: 16px;
font-size: 15px;
color: white;
}


button {
font-family: 'Special Elite', cursive;
}

button:focus {outline:0;}





.noSelect {
	-webkit-tap-highlight-color: transparent;

    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}





.loadingScreen {
flex-direction: column;
display: flex;
justify-content: center;
align-items: center;


background: black;

background-image: url(<?php echo get_template_directory_uri(); ?>/munchen-bavaria-bl.jpg);
background-repeat: no-repeat;
background-position: center;
background-size: cover;

/*
background: repeating-linear-gradient(
  -55deg,
  #000000,
  #000000 10px,
  #080808 10px,
  #080808 20px
);*/


/*background: repeating-radial-gradient(
  circle,
  #000000,
  #000000 10px,
  #050505 10px,
  #050505 20px
);*/

position: fixed;
top: 0;
bottom: 0;
left: 0;
right: 0;
z-index: 1001;
color: green;
/*font-size: 30px;*/
/*padding: 200px 0 0 0;*/
}



.overlej { 
position: fixed; 
top: 0; 
left: 0; 
bottom: 0; 
right: 0; 
z-index: -1;

background: black;

/*background: repeating-radial-gradient(
  circle,
  #000000,
  #000000 10px,
  #080808 10px,
  #080808 20px
);*/

}




.loading-tekst {
text-align: center; 
font-size: 30px; 
color: lightgray
}


.logo-loading {
width: 250px; 
margin: 0 15px;
}


.height-70 {
height: 70px;
}

.height-30 {
height: 30px;
}


.height-40 {
height: 40px;
}





.removeLoading {
display: none;
}









.loading-box {
width: 700px; 
border: 1px solid green; 
border-radius: 25px; 
height: 25px; 
display: flex; 
justify-content: flex-start; 
overflow: hidden;
margin: 0 15px;

}


.loading-green {
color: white;
text-align: center;
overflow: hidden;

background: #96dd2c;
background: -moz-linear-gradient(top, #96dd2c 37%, #ccff00 66%);
background: -webkit-linear-gradient(top, #96dd2c 37%,#ccff00 66%);
background: linear-gradient(to bottom, #96dd2c 37%,#ccff00 66%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#96dd2c', endColorstr='#ccff00',GradientType=0 );

/*border-radius: 25px;*/
-webkit-animation: mymove 150s; /* Safari 4.0 - 8.0 */
animation: mymove 150s;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
from {width: 0px;}
to {width: 700px;}
}

@keyframes mymove {
from {width: 0px;}
to {width: 700px;}
}








.lds-circle {
display: inline-block;
transform: translateZ(1px);
}
.lds-circle > div {
display: inline-block;
width: 51px;
height: 51px;
margin: 6px;
border-radius: 50%;
background: #dfc;
animation: lds-circle 2.4s cubic-bezier(0, 0.2, 0.8, 1) infinite;
}
@keyframes lds-circle {
0%, 100% {
animation-timing-function: cubic-bezier(0.5, 0, 1, 0.5);
}
0% {
transform: rotateY(0deg);
}
50% {
transform: rotateY(1800deg);
animation-timing-function: cubic-bezier(0, 0.5, 0.5, 1);
}
100% {
transform: rotateY(3600deg);
}
}







.a-enter-vr-button{
display: none;
}


.navigacija-box{
width: 100%;
height: 75px;
display: flex;
justify-content: space-around;
align-items: center;

position: fixed;
z-index: 999;
bottom: 0;

/*background: rgba(0,0,0,1);*/

background: repeating-linear-gradient(
  -55deg,
  #000000,
  #000000 10px,
  #080808 10px,
  #080808 20px
);

border-top: 2px solid green;
}




.nav-gumb{
font-weight: bold;
width: 200px;
border: 1px solid green;
color: green;
background: #000000;
background: -moz-linear-gradient(top, #000000 0%, #25470e 100%);
background: -webkit-linear-gradient(top, #000000 0%,#25470e 100%);
background: linear-gradient(to bottom, #000000 0%,#25470e 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#25470e',GradientType=0 );
font-size: 15px;
padding: 12px;
border-radius: 25px;
text-align: center;
/*transition: 0.35s;*/
-webkit-transition: all 0.35s ease-in-out;
-moz-transition: all 0.35s ease-in-out;
-o-transition: all 0.35s ease-in-out;
transition: all 0.35s ease-in-out;
}



.nav-gumb:hover {
background: #b3f900;
background: -moz-linear-gradient(top, #b3f900 16%, #00ee00 86%);
background: -webkit-linear-gradient(top, #b3f900 16%,#00ee00 86%);
background: linear-gradient(to bottom, #b3f900 16%,#00ee00 86%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3f900', endColorstr='#00ee00',GradientType=0 );
color: black;
}


.nav-gumb:active {
	filter: drop-shadow(0 0 0.75rem limegreen);
}


/*#grunanlageUlaz2{

border: 1px solid green;
color: black;
background: green;

}*/


.logo-navigacija {
	width: 150px;
	transition: all ease-in-out;
}


.logo-navigacija:hover {
	filter: drop-shadow(0 0 0.75rem limegreen);
}



.green-gumb{

border: 1px solid green;
color: black;
background: #b3f900;
background: -moz-linear-gradient(top, #b3f900 16%, #00ee00 86%);
background: -webkit-linear-gradient(top, #b3f900 16%,#00ee00 86%);
background: linear-gradient(to bottom, #b3f900 16%,#00ee00 86%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3f900', endColorstr='#00ee00',GradientType=0 );

}



#navGrun, #navGebaude, #navHaus, #navKontakt, #navWinter {
bottom: -102px;
border-top: 2px solid green;
}




/*#navGebaude {
bottom: -102px;
border-top: 2px solid green;
}*/


.modal, .modalGebaude, .modalWinter {
direction: rtl;
overflow: scroll;
position: fixed;
flex-direction: column;
padding: 35px 0;
border-right: 5px solid green;
left: -450px;
top: 0px;
width: 450px;
height: 100vh;
z-index: 999;       
/*background: rgba(0,0,0,.8);*/


background: repeating-linear-gradient(
  55deg,
  #000000,
  #000000 20px,
  #080808 20px,
  #080808 40px
);

opacity: 1;
display: flex;
justify-content: flex-start;
align-items: center;       
}


.modalHaus, .modalKontakt {
overflow: scroll;
right: -450px;
border-left: 5px solid green;

position: fixed;
flex-direction: column;
padding: 25px 0;
top: 0px;
width: 450px;
height: 100vh;
z-index: 999;       
/*background: rgba(0,0,0,.8);*/

background: repeating-linear-gradient(
  55deg,
  #000000,
  #000000 20px,
  #080808 20px,
  #080808 40px
);

opacity: 1;
display: flex;
justify-content: flex-start;
align-items: center;   
}



.modalKontakt {  
text-align: left;
/*font-weight: bold;*/
}

.modalKontakt p {
/*font-size: 14px;*/
}


.modal-bottom-height {
	height: 100px;
}




.modal-content-holder {
direction: ltr;
width: 90%;
margin-top: 10px;
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
}


.logo-modal {
	width: 150px;
}

.gumb-travnjak {
color: green;
width: 90%;
border: 1px solid green;
border-radius: 7px;
padding: 10px;
margin-top: 10px;
}





.slike2holder {
width: 100%;
display: flex;
justify-content: space-between;
align-items: center;
margin-bottom: 10px;
flex-wrap: wrap;
}

.slika-thumb {
margin-bottom: 15px;
border-radius: 10px;
width: 185px;
height: 120px;
-webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
filter: grayscale(100%);
border: 2px solid black;
transition: .3S;
}

.slika-thumb:hover {

-webkit-filter: grayscale(0%); /* Safari 6.0 - 9.0 */
filter: grayscale(0%);
border: 2px solid green;
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






.fancybox-image, .fancybox-spaceball {
    border: 3px solid green;
    border-radius: 7px;
}










input[type=text], select, textarea {
width: 100%;
padding: 12px;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
margin-top: 6px;
margin-bottom: 16px;
resize: vertical;
font-family: 'Special Elite', cursive;
}

input[type=email]{
width: 100%;
padding: 12px;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
margin-top: 6px;
margin-bottom: 16px;
resize: vertical;
font-family: 'Special Elite', cursive;
}



textarea {height: 100px}


input[type=submit] {
font-family: 'Special Elite', cursive;
background-color: #4CAF50;
color: white;
padding: 12px 20px;
border: none;
border-radius: 4px;
border-radius: 10px;
font-size: 25px;
width: 100%;
height: 100px;
}

input[type=submit]:hover {
background-color: #45a049;
}

.container {
border-radius: 5px;
/*background-color: #f2f2f2;*/
padding: 20px;
}













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



/*    background: repeating-linear-gradient(
      55deg,
      #000000,
      #000000 20px,
      #0f0f0f 20px,
      #0f0f0f 40px
    );*/

    background: #000000;
background-image: url(<?php echo get_template_directory_uri(); ?>/munchen-bavaria-bl.jpg);
background-repeat: no-repeat;
background-position: center;
background-size: cover;


}


.koja-stranica {
	border: 1px solid green;
	background: black;
	color: green;
	font-size: 18px;
	padding: 10px;
	border-radius: 20px;
	width: 200px;
background: -moz-linear-gradient(top, #000000 0%, #25470e 100%);
background: -webkit-linear-gradient(top, #000000 0%,#25470e 100%);
background: linear-gradient(to bottom, #000000 0%,#25470e 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#25470e',GradientType=0 );
-webkit-transition: all 0.35s ease-in-out;
-moz-transition: all 0.35s ease-in-out;
-o-transition: all 0.35s ease-in-out;
transition: all 0.35s ease-in-out;
}






.koja-stranica:hover {
background: #b3f900;
background: -moz-linear-gradient(top, #b3f900 16%, #00ee00 86%);
background: -webkit-linear-gradient(top, #b3f900 16%,#00ee00 86%);
background: linear-gradient(to bottom, #b3f900 16%,#00ee00 86%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3f900', endColorstr='#00ee00',GradientType=0 );
color: black;
}


.koja-stranica:active {
	filter: drop-shadow(0 0 0.75rem limegreen);
}







.hello-txt-holder {
	width: 95%;
}


.hello-txt {
	border-left: 5px solid green; 
	padding-left: 20px; 
	line-height: 15px; 
	font-size: 12px;
}


.hello-txt-naslov {
	font-size: 18px;
}



.gdpr-frame {
	display: none;
}


.gdpr-txt {
	font-size: 12px;
	line-height: 15px;
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




.logo-regular {
	width: 100px;
}




.gdprDiv-hide {
	display: none;
}


.btnHolder-koja-stranica {

	display: flex; 
	justify-content: space-around; 
	align-items: center; 
	flex-direction: column;

}


/*------------------------------------*\
    IMAGES
\*------------------------------------*/



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




@media only screen and (max-width: 1300px) {


	.loadingScreen {
		/*font-size: 30px;*/
		/*padding: 50px 0 0 0;*/
	}


	.loading-tekst {
		font-size: 25px; 
	}



	.logo-loading {
		width: 200px; 
		margin: 0 15px;
	}



	.loading-box {
		height: 20px; 
	}



	.height-70 {
		height: 50px;
	}

	.height-30 {
		height: 20px;
	}

	.height-40 {
		height: 30px;
	}





	.swiper-container {
		height: 300px;
	}

	.swiper-slide {
		width: 200px;
		height: 200px;
	}



	.modal, .modalGebaude, .modalHaus, .modalWinter, .modalKontakt {
		width: 350px;
	}

	.modal-content-holder p {
		line-height: 13px;
    	font-size: 11px;
	}


	.modal-content-holder h2 {
    	font-size: 22px;
	}


	.logo-modal {
		width: 100px;
	}


	.slika-thumb {
	    width: 145px;
	    height: 100px;
	}

	.nav-gumb {
	    font-weight: bold;
	    width: 160px;
	    font-size: 11px;
	    padding: 10px;
	}

	.navigacija-box {
	    height: 60px;
	}


	.logo-navigacija {
		width: 100px;
	}

	.modalKontakt p {
		font-size: 11px;
		line-height: 13px;
	}





}



    


@media only screen and (max-width: 1100px) {


	.loadingScreen {
		/*font-size: 25px;*/
		/*padding: 15px 0 0 0;*/
	}



	.loading-tekst {
		font-size: 20px; 
	}



	.logo-loading {
		width: 150px; 
		margin: 0 15px;
	}






	.loading-box {
		width: 500px; 
		height: 15px; 
	}




	/* Chrome, Safari, Opera */
	@-webkit-keyframes mymove {
		from {width: 0px;}
		to {width: 500px;}
	}

	@keyframes mymove {
		from {width: 0px;}
		to {width: 500px;}
	}










	.height-70 {
		height: 20px;
	}

	.height-30 {
		height: 10px;
	}

	.height-40 {
		height: 10px;
	}



	.swiper-container {
		height: 200px;
		padding-top: 5px;
	}

	.swiper-slide {
		width: 150px;
		height: 150px;
	}




	.modal, .modalGebaude, .modalHaus, .modalWinter, .modalKontakt {
		width: 270px;
	}

	.modal-content-holder p {
		line-height: 12px;
    	font-size: 10px;
	}


	.modal-content-holder h2 {
    	font-size: 20px;
	}


	.logo-modal {
		width: 85px;
	}


	.slika-thumb {
	    width: 100%;
	    height: 150px;
	}

	.nav-gumb {
	    font-weight: bold;
	    width: 120px;
	    font-size: 9px;
	    padding: 10px;
	}

	.navigacija-box {
	    height: 55px;
	}


	.logo-navigacija {
		width: 85px;
	}

	.modalKontakt p {
		font-size: 10px;
		line-height: 12px;
	}



}





/*ORIENTATION - SCREEN LOCK*/

/*
@media only screen and (orientation:portrait){
  body {
    height: 100vw;
    transform: rotate(90deg);
  }
}
*/



@media only screen and (min-width:320px) {

}
@media only screen and (min-width:480px) {



.btnHolder-koja-stranica {

	flex-direction: row;

}




}
@media only screen and (min-width:768px) {

}
@media only screen and (min-width:1024px) {

}
@media only screen and (min-width:1140px) {




.gdpr-div {

/*    background: repeating-linear-gradient(
      55deg,
      #000000,
      #000000 20px,
      #050505 20px,
      #050505 40px
    );
*/

}



.hello-txt-holder {
	width: 70%;
}



.hello-txt-naslov {
	font-size: 25px;
}





.hello-txt {

	line-height: 40px; 
	font-size: 17px;
}



.gdpr-txt {
	font-size: 18px;
	line-height: 21px;
}


.gdpr-frame {

	text-align: left; 
	width: 100%; 
	background: black; 
	display: flex; 
	flex-direction: column;
	justify-content: center; 
	align-items: center; 
	text-align: left;
	padding: 10px 0;
	padding-top: 15px;

	border-top: 1px solid green;
	border-bottom: 1px solid green;
	margin-top: auto;
}



.koja-stranica {
	border: 1px solid green;

	color: green;
	font-size: 25px;
	padding: 15px;
	border-radius: 50px;
	width: 400px;


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