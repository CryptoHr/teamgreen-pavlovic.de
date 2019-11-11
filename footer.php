			<!-- footer -->
			<!-- <footer class="footer" role="contentinfo">

			
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
		

			</footer> -->
			<!-- /footer -->



		<a id="pozivMob" href="tel:+4915753471660" class="noSelect poziv-gumb"  data-aos="fade-left" data-aos-easing="ease-out-back" data-aos-delay="1500" data-aos-offset="0">
			
				<img src="<?php echo get_template_directory_uri(); ?>/smartphone.svg">
			
		</a>




<!-- 
		<a id="goUp" href="#" class="noSelect" data-aos-anchor=".aos-grune-naslov" data-aos="fade-right" data-aos-easing="ease-out-back" data-aos-offset="700" data-aos-delay="1000">
			
				<img src="<?php echo get_template_directory_uri(); ?>/arrow-up.svg">
			
		</a>

 -->



		<div style="opacity: 0; position: fixed; z-index: -1">
			<a href='https://www.stat-counter.org/'>Free StatCounter</a> <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=b4e579aaca2d87efaa39c042db19a376e92f165b'></script>
			<script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/575806/t/0"></script>
		</div>







		<?php wp_footer(); ?>


	
		<style type="text/css">
			
			#wpforms-8 {
			    width: 100%;
			}


			#wpforms-8-field_4, #wpforms-8-field_1, #wpforms-8-field_2 {
				border: 1px solid black;
				border-bottom: 2px dashed green;
				border-radius: 5px;
				font-weight: bold;
				font-size: 18px;
/*				-webkit-transition: all 0.35s ease-in-out;
				-moz-transition: all 0.35s ease-in-out;
				-o-transition: all 0.35s ease-in-out;
				transition: all 0.35s ease-in-out;*/
				color: white;
				background: #000;
				margin-bottom: 15px;
			}

			#wpforms-8-field_4:hover, #wpforms-8-field_1:hover, #wpforms-8-field_2:hover {
				/*border: 1px solid limegreen;*/
				border-bottom: 2px dashed limegreen;

			}



			#wpforms-8-field_4:focus, #wpforms-8-field_1:focus, #wpforms-8-field_2:focus {
				border: 1px solid limegreen;
				/*border-bottom: 2px dashed limegreen;*/
				border-radius: 20px;
			}



			.wpforms-required-label {
			    color: green;
			    font-weight: 400;
			}


			div.wpforms-container-full .wpforms-form .wpforms-field {
				margin-bottom: 30px;
			}


			div.wpforms-container-full .wpforms-form .wpforms-required-label {
			    color: green;
			    font-weight: 400;
			}


			div.wpforms-container-full .wpforms-form .wpforms-field-label {
			    
				background: -webkit-linear-gradient(#96D101, #008000);
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent;
				font-weight: bold;
			    display: block;
			    font-weight: 700;
			    font-size: 16px;
			    float: none;
			    line-height: 1.3;
			    margin: 0 0 4px 0;
			    padding: 0;
			}




			div.wpforms-container-full .wpforms-form .wpforms-submit-container {
			    display: flex;
			    justify-content: center;
			    margin-top: 50px;
			}




			#wpforms-submit-8 {
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
				padding: 15px;
				border-radius: 25px;
				text-align: center;
				cursor: pointer;
				/*transition: 0.35s;*/
				-webkit-transition: all 0.35s ease-in-out;
				-moz-transition: all 0.35s ease-in-out;
				-o-transition: all 0.35s ease-in-out;
				transition: all 0.35s ease-in-out;
			}


			#wpforms-submit-8:hover {
				background: #b3f900;
				background: -moz-linear-gradient(top, #b3f900 16%, #00ee00 86%);
				background: -webkit-linear-gradient(top, #b3f900 16%,#00ee00 86%);
				background: linear-gradient(to bottom, #b3f900 16%,#00ee00 86%);
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3f900', endColorstr='#00ee00',GradientType=0 );
				color: black;
			}


			div.wpforms-container-full .wpforms-form .wpforms-field-label-inline {
			    font-size: 13px;
			    font-weight: normal;
			    line-height: 20px;
			    color: white;
			}


			div.wpforms-container-full .wpforms-form label.wpforms-error {
			    color: limegreen;
			}



			#wpforms-confirmation-8 {
				margin-top: 35px;
				background: #000000;
				background: -moz-linear-gradient(top, #000000 0%, #25470e 100%);
				background: -webkit-linear-gradient(top, #000000 0%,#25470e 100%);
				background: linear-gradient(to bottom, #000000 0%,#25470e 100%);
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#25470e',GradientType=0 );
			    border: 1px solid #82fb20;
			    border-radius: 15px;
			    text-align: center;
			}






			@media only screen and (max-width: 1300px) {


				div.wpforms-container-full .wpforms-form .wpforms-field-label {
				    
					font-weight: bold;
				    font-weight: 700;
				    font-size: 14px;

				}


				#wpforms-8-field_4, #wpforms-8-field_1, #wpforms-8-field_2 {
					font-weight: normal;
					font-size: 15px;

				}



				#wpforms-submit-8 {
					width: 100%;
					font-size: 15px;

				}


				div.wpforms-container-full .wpforms-form .wpforms-field-label-inline {
				    font-size: 10px;
				}



			}






			@media only screen and (max-width: 1100px) {


				div.wpforms-container-full .wpforms-form .wpforms-field-label {
				    
					font-weight: bold;
				    font-weight: 700;
				    font-size: 14px;

				}


				#wpforms-8-field_4, #wpforms-8-field_1, #wpforms-8-field_2 {
					font-weight: normal;
					font-size: 12px;

				}



				#wpforms-submit-8 {
					width: 100%;
					font-size: 15px;

				}


				div.wpforms-container-full .wpforms-form .wpforms-field-label-inline {
				    font-size: 10px;
				}




			}




			* {
				cursor:url(<?php echo get_template_directory_uri(); ?>/glow.cur),auto !important; 
			}

			.link-sharee, .link-sharee * {
				cursor: pointer !important;
			}


		</style>

<!-- 
		<script type="text/javascript">
			
			function hasTouch() {
		    return 'ontouchstart' in document.documentElement
		           || navigator.maxTouchPoints > 0
		           || navigator.msMaxTouchPoints > 0;
		}

		if (hasTouch()) { // remove all :hover stylesheets
		    try { // prevent exception on browsers not supporting DOM styleSheets properly
		        for (var si in document.styleSheets) {
		            var styleSheet = document.styleSheets[si];
		            if (!styleSheet.rules) continue;

		            for (var ri = styleSheet.rules.length - 1; ri >= 0; ri--) {
		                if (!styleSheet.rules[ri].selectorText) continue;

		                if (styleSheet.rules[ri].selectorText.match(':hover')) {
		                    styleSheet.deleteRule(ri);
		                }
		            }
		        }
		    } catch (ex) {}
		}


		</script> -->


		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
