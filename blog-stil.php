

<style type="text/css">

body {
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}


p {
    line-height: 22px;
    font-size: 16px;
    color: #e8e8e8;
   margin: 0;
   padding: 0;
   font-weight: lighter;
}
	
	.blog-holder {
		width: 75%;
		min-height: 100vh;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: flex-end;

		margin-top: 150px;
	}

	.blog-holder-2 {
		width: 70%;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;

	}



.blog-holder-lijevo {
	width: 30%;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: flex-start;

	position: fixed;
	top: 0;
	bottom: 0;
	left: 0;

}




	.blog-holder-2 h2 {
		font-size: 35px;

	}


	.blog-holder-2 p {
		font-size: 20px;
		line-height: 40px;
	}




	.left-sadrzaj {
		width: calc(75% + 10px);
		position: relative;
		overflow: hidden;
	}




	.right-menu {
		border-left: 1px solid green;
		display: flex;
		flex-direction: column;
		position: fixed;
		top: 0;
		right: -10px;
		bottom: 0;
		justify-content: flex-start;
		align-items: center;
		width: 25%;

		background: black;
		overflow-y: scroll;

/*	    background: repeating-linear-gradient(
	      55deg,
	      #000000,
	      #000000 40px,
	      #090909 40px,
	      #090909 80px
	    );*/
	}


.date {
	font-size: 12px;
	color: gray;
}




	#goDown {
		width: 75px;
		height: 75px;


		background: black;
		border-radius: 100%;
		border: 1px solid green;

		display: flex;
		justify-content: center;
		align-items: center;
		padding: 15px;
		margin-top: auto;
		/*transform: rotateZ(180deg);*/


		/*transition: background .1s;*/


	}

	#goDown:hover {
		background: #162607;
	}


	.slike2holder a {
		width: 33%;
	}

@media only screen and (min-width:1140px) {


	.blog-holder-2 {
		
	}


}

</style>











<style type="text/css">



.text-xl-post {

	position: absolute; 
	z-index: 5; 
	display: flex; 
	flex-direction: column; 
	align-items: flex-start; 
	justify-content: center;
	padding: 10px;
    width: 100%;
    background: #000000d9;	
    padding-top: 20px;
}


.posts-xl {
        width: 33%; 
        min-height: 30vh; 
        display: flex; 
        flex-direction: column; 
        justify-content: flex-end;
        align-items: flex-start; 

        margin-bottom: 15px;

        border-bottom: 5px solid green;
		transition: all .25s ease-in-out;
		overflow: hidden;
		border-radius: 5px;
		transform: scale(1,1);
}



.posts-xl:hover {
	border-bottom: 5px solid red;
}



.posts-xl:active {
	border-bottom: 5px solid green; 
	transform: scale(.9,.9);
}




.share-gumbi {
	background: green;
	border-radius: 3px;

	width: 50px;
	height: 50px;
}



.share-gumbi:hover {
	background: #001900;
	border: 1px solid green;	
}


.dsgvo-link {
	color: green; 
	text-decoration: underline; 
	position: absolute; 
	bottom: 100px;

	font-size: 14px;
}



.dsgvo-link:hover {
	color: limegreen; 
	text-decoration: underline; 
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



.div-overlay-body {
	width: 100%; 
	height: 100%; 
	position: absolute; 
	z-index: -1; 
	background: rgba(0,0,0,.7);

	background: -moz-radial-gradient(center, ellipse cover,  rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.85) 1%, rgba(0,0,0,0.95) 100%);
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(0,0,0,0.85) 0%,rgba(0,0,0,0.85) 1%,rgba(0,0,0,0.95) 100%);
	background: radial-gradient(ellipse at center,  rgba(0,0,0,0.85) 0%,rgba(0,0,0,0.85) 1%,rgba(0,0,0,0.95) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d9000000', endColorstr='#f2000000',GradientType=1 );

	/*border-left: 1px solid green;*/

}





.div-overlay-posts {
	width: 100%; 
	height: 100%; 
	position: absolute; 
	z-index: 1; 
	background: rgba(0,0,0,0);
}



.div-overlay-posts-hover {

	background: rgba(0,0,0,.7);

	background: -moz-radial-gradient(center, ellipse cover,  rgba(0,0,0,0.20) 0%, rgba(0,0,0,0.20) 1%, rgba(0,0,0,0.80) 100%);
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(0,0,0,0.20) 0%,rgba(0,0,0,0.20) 1%,rgba(0,0,0,0.80) 100%);
	background: radial-gradient(ellipse at center,  rgba(0,0,0,0.20) 0%,rgba(0,0,0,0.20) 1%,rgba(0,0,0,0.80) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d9000000', endColorstr='#f2000000',GradientType=1 );
}




.div-overlay-posts-click {

background: -moz-radial-gradient(center, ellipse cover,  rgba(0,0,0,0) 0%, rgba(3,58,0,1) 100%);
background: -webkit-radial-gradient(center, ellipse cover,  rgba(0,0,0,0) 0%,rgba(3,58,0,1) 100%);
background: radial-gradient(ellipse at center,  rgba(0,0,0,0) 0%,rgba(3,58,0,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#033a00',GradientType=1 );

}







.link-xl-post {
	width: 100%; 
	height: 100%; 
	position: absolute; 
	z-index: 10; 

}




	.blog-header {
		position: relative;
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
		/*background-attachment: fixed;*/
	}
	
	.jedan-blog-holder {
		padding: 15px; 
		margin: 15px 0;
		 width: 100%;
		 display: flex;
		 justify-content: flex-start;
		 align-items: center;
	}



	.jedan-link-holder {
		 width: 100%;
		 display: flex;
		 justify-content: flex-start;
		 align-items: flex-start;
		 background: black;

		 color: green;
		 font-weight: bold;

		 font-size: 16px;

		 /*transition: all .35s;*/
		 border-bottom: 1px solid rgba(0,256,0,.25);
	}



	.jedan-link-holder:hover {

background: rgba(85,175,0,.1);

/*
background: -moz-linear-gradient(-45deg,  rgba(85,175,0,1) 0%, rgba(178,255,0,1) 75%);
background: -webkit-linear-gradient(-45deg,  rgba(85,175,0,1) 0%,rgba(178,255,0,1) 75%);
background: linear-gradient(135deg,  rgba(85,175,0,1) 0%,rgba(178,255,0,1) 75%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#55af00', endColorstr='#b2ff00',GradientType=1 );

*/



/*background: rgb(0,0,0);
background: -moz-linear-gradient(top,  rgba(0,0,0,1) 0%, rgba(178,255,0,1) 30%, rgba(178,255,0,1) 70%, rgba(0,0,0,1) 100%);
background: -webkit-linear-gradient(top,  rgba(0,0,0,1) 0%,rgba(178,255,0,1) 30%,rgba(178,255,0,1) 70%,rgba(0,0,0,1) 100%);
background: linear-gradient(to bottom,  rgba(0,0,0,1) 0%,rgba(178,255,0,1) 30%,rgba(178,255,0,1) 70%,rgba(0,0,0,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#000000',GradientType=0 );*/


/*color: black;*/

		 

	}



/*
	.blog-slika-holder {
		
		border: 5px solid black;
		border-radius: 15px;
	
	}*/


/*	.blog-slika-holder:hover {

		border-right: 5px solid red;
	}
	*/



	.jedan-blog-holder h2 {
		background: -webkit-linear-gradient(#0f0, #0f0);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
	}



/*	.jedan-blog-holder h2:hover {
		background: -webkit-linear-gradient(#f00, #f00);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
	}
*/




.bg-none {
	background: none;
}



.naslov-kategorije-posta {
	width: 100%;
}

</style>

















<style type="text/css">
	

	.kategorija-postova {
		width: 100%;
		padding: 10px;
		background: #68B800;
		color: white;
		font-size: 30px;
		text-shadow: 1px 1px #000000;
		border-radius: 5px;
	}



</style>




































<style type="text/css">


 h3 {
 	color: #555;
 }

	span.comments {
		display: none;
	}

	span.says {
		display: none;
	}



.logged-in-as a {
	color: white;
}

.comment-body a {
	color: green;
	/*text-decoration: underline;*/
}


.comment-body a:hover {
	color: limegreen;
	text-decoration: underline;
}



	.comments {
		display: flex;
		flex-direction: column;
		background: #111;
		align-items: center;
		padding: 50px 10px;
		padding-bottom: 150px;
	
/*	    background: repeating-linear-gradient(
	      55deg,
	      #000000,
	      #000000 400px,
	      #0f0f0f 400px,
	      #0f0f0f 800px
	    );*/



background-image: url(<?php echo get_template_directory_uri(); ?>/munchen-bavaria-comment.jpeg);
background-repeat: no-repeat;
background-position: center;
background-size: cover;
background-attachment: fixed;

	}

	.comment-body {
		display: flex;
		flex-direction: column;
	}
	

	.comment-form-author, .comment-form-email {

	}



	.comment-form-url, .comment-form-cookies-consent {

		display: none;

	}


	#comment, #author, #email {
		width: 100%;
	    background: #1f1f1f;
	    border: none;
	    border: 1px solid black;
	    border-left: 5px solid green;
	    color: white;
	    padding: 15px;
	    margin-bottom: 35px;
	    margin-top: 15px;

	    border-radius: 15px;
/*
	    background: rgb(31,31,31);
background: -moz-linear-gradient(-45deg,  rgba(31,31,31,1) 0%, rgba(0,0,0,1) 100%);
background: -webkit-linear-gradient(-45deg,  rgba(31,31,31,1) 0%,rgba(0,0,0,1) 100%);
background: linear-gradient(135deg,  rgba(31,31,31,1) 0%,rgba(0,0,0,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1f1f1f', endColorstr='#000000',GradientType=1 );*/

	}



	.comment #cancel-comment-reply-link {
		color: red; 
		font-size: 12px;
	}


	.comment #cancel-comment-reply-link:hover {
		text-decoration: underline; 
	}





	#comment {
	    border: none;
	    overflow: auto;
	    outline: none;

	    -webkit-box-shadow: none;
	    -moz-box-shadow: none;
	    box-shadow: none;

	    resize: none; /*remove the resize handle on the bottom right*/
	    border: 1px solid black;
	    border-left: 5px solid green;

	}


	#comment:hover, #author:hover, #email:hover {

	    border: 1px solid limegreen;
	    border-left: 5px solid limegreen;

	}


	#comment:focus, #author:focus, #email:focus {

	    border: 1px solid limegreen;
	    border-left: 5px solid limegreen;
	    box-shadow: 0px 0px 18px limegreen;

	}





	.fn {
		font-size: 14px;
		margin: 7px 0;
		color: limegreen;
	}


	.reply {
		margin-top: 15px;
	}


	.comment-reply-link {
		
		background: black;
	    padding: 5px;
	    border-radius: 3px;
	    
	    color: green;

	    border: 1px solid green;
	}



	.comment-reply-link:hover {

	    border: 1px solid limegreen;
	}



	.avatar {
		width: 50px;
		height: 50px;
	}


/*	.comment {

		margin: 15px;
		padding: 25px;
		border-radius: 15px;
		background: #080808;
	}*/


	.comment {
		
	    padding: 25px;
	    /* border-radius: 15px; */
	    background: black;
	    border: 1px solid rgba(0,256,0,.2);
	    margin-bottom: 50px;
	    border-radius: 15px;
	    /*border-left: 3px;*/

background: rgb(0,0,0);
background: -moz-linear-gradient(-45deg,  rgba(0,0,0,1) 0%, rgba(31,31,31,1) 100%);
background: -webkit-linear-gradient(-45deg,  rgba(0,0,0,1) 0%,rgba(31,31,31,1) 100%);
background: linear-gradient(135deg,  rgba(0,0,0,1) 0%,rgba(31,31,31,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#1f1f1f',GradientType=1 );

	}


	ul {
	  list-style-type: none;
	  width: 90%;
	  padding-inline-start: 0;
	  margin: 0 auto;
	}


	.comment-author {
		display: flex;
		flex-direction: column;
	}


	.comment-respond {
		width: 100%;
	  	margin: 0 auto;

	}


	#reply-title {
		margin-top: 150px;
		font-size: 20px;
		color: green;

/*		background: -webkit-linear-gradient(#96D101, #008000);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;*/
	}

	.comment-notes {
		margin-bottom: 50px;
	}



	input[type="submit"] {

		font-weight: bold;
		width: 90%;
		border: 1px solid green;
		color: green;
		background: #000000;
		background: -moz-linear-gradient(top, #000000 0%, #25470e 100%);
		background: -webkit-linear-gradient(top, #000000 0%,#25470e 100%);
		background: linear-gradient(to bottom, #000000 0%,#25470e 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#25470e',GradientType=0 );
		font-size: 18px;
		padding: 15px 0;
		border-radius: 35px;
		text-align: center;
		/*transition: 0.35s;*/
		-webkit-transition: all 0.35s ease-in-out;
		-moz-transition: all 0.35s ease-in-out;
		-o-transition: all 0.35s ease-in-out;
		transition: all 0.35s ease-in-out;
		margin: 15px;
	}




	input[type="submit"]:hover {
		background: #b3f900;
		background: -moz-linear-gradient(top, #b3f900 16%, #00ee00 86%);
		background: -webkit-linear-gradient(top, #b3f900 16%,#00ee00 86%);
		background: linear-gradient(to bottom, #b3f900 16%,#00ee00 86%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3f900', endColorstr='#00ee00',GradientType=0 );
		color: black;
	}


	input[type="submit"]:active {
		filter: drop-shadow(0 0 0.75rem limegreen);
	}



	.form-submit {
		text-align: center;
	}


	label {

		background: -webkit-linear-gradient(#96D101, #008000);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
	}




@media only screen and (min-width:1140px) {



	.comments {
		padding: 150px 25px;

	}


	.comment-respond {
		width: 70%;
	}



	.comment {
		margin: 25px;
	    padding: 25px;
	    /* border-radius: 15px; */
	    background: #080808;
	    border: 1px solid green;
	    margin-bottom: 50px;
	    background: rgb(0,0,0);
background: -moz-linear-gradient(-45deg,  rgba(0,0,0,1) 0%, rgba(31,31,31,1) 100%);
background: -webkit-linear-gradient(-45deg,  rgba(0,0,0,1) 0%,rgba(31,31,31,1) 100%);
background: linear-gradient(135deg,  rgba(0,0,0,1) 0%,rgba(31,31,31,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#1f1f1f',GradientType=1 );

	}



	input[type="submit"] {
		width: 300px;
	}



	.font-black {
		color: black;
	}



	.font-gray {
		color: gray;
		
	}

	.crtica {
		height: 60px;
		 width: 1px;
		 background: green;
		 margin: 0 15px;
	}


	.crtica-2 {

		 background: black;

	}

.zeleni-text {
	background: -webkit-linear-gradient(#96D101, #008000);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
}
}


}





</style>








<style type="text/css">
	

	.xl-button-post {
		display: flex; 
		flex-wrap: wrap; 
		width: 100%; 
		justify-content: space-between; 
		align-items: center;

	}



	.xl-button-link-post {
		width: 49.2%; 
		margin-bottom: 25px; 
		border: 1px solid green; 
		border-radius: 15px; 
		padding: 70px 0; 
		background: black
	}


	.xl-button-link-post:hover {

		background: #001100;
	}






	.xl-button-post-krugovi {
		display: flex; 
		flex-wrap: wrap; 
		width: 100%; 
		justify-content: space-around; 
		align-items: center;

	}




	.xl-krugovi-link-post {

	    width: 400px;
	    margin-bottom: 25px;
	    border: 2px solid green;
	    border-radius: 100%;
	    padding: 70px 0;
	    background: black;
	    height: 400px;
	    display: flex;
	    flex-direction: column;
	    justify-content: center;
	    align-items: center;
	    overflow: hidden;
	    position: relative;
	}



	.xl-krugovi-link-post:hover {

	    /*border: 1px solid red;*/
	    filter: drop-shadow(0 0 0.75rem limegreen);

	}


</style>




<style type="text/css">
	
	.link-sharee {
		border: 1px solid #4267b2;
	    background: #4267b2;
	    padding: 4px;
	    display: flex;
	    justify-content: center;
	    align-items: center;
	    border-radius: 4px;
	}

	
	.link-sharee:hover {
	    background: #365899;
	    border: 1px solid #365899;
	}






	.link-share-text {
		font-family: Helvetica, Arial, sans-serif;
		font-size: 13px !important;
		line-height: 0 !important;
		font-weight: 700;
		color: white;
		margin-right: 4px;
	}

	.razmak-share {
		width: 4px;
	}

</style>
