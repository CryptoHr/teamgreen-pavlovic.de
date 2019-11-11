<?php


get_header('rregular-blog'); ?>




<?php get_template_part( 'regular-stil' ); ?>




<?php get_template_part( 'blog-stil' ); ?>












<div id="desktopYN" class="no-desktopen"> <h2 style="font-size: 100px">L O A D I N G</h2> </div>


<div id="menuHideShow" class="menu-screen">
    

    
    <div class="left-strana">

        <h2 style="font-size: 35px">Das Menü</h2>

        <div style="height: 25px"></div>

        <div class="tri-ikone-holder" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="800">


            <!-- GRUNE IKONA -->

            <a href="#grune-anchor" class="noSelect" id="menuHideGrune">

                <div class="ikona">

                    <div class="ikona-slika bg-slika-grune">
                        <div class="ikona-overlaj"></div>
                    </div>

                    <div class="ikon-space"></div>

                    <div class="ikona-txt">Grünanlagenservice</div>

                </div>

            </a>

            <div class="ikona-empty"></div>


            <!-- GEBAUDE IKONA -->
            <a href="#gebaude-anchor" class="noSelect" id="menuHideGebaude">
                <div class="ikona">

                    <div class="ikona-slika bg-slika-gebaude">
                        <div class="ikona-overlaj"></div>
                    </div>

                    <div class="ikon-space"></div>

                    <div class="ikona-txt">Gebäudereinigung</div>

                </div>
            </a>


            <div class="ikona-empty"></div>


            <!-- GEBAUDE IKONA -->

            <a href="#haus-anchor" class="noSelect" id="menuHideHaus">

                <div class="ikona">

                    <div class="ikona-slika bg-slika-haus">
                        <div class="ikona-overlaj"></div>
                    </div>

                    <div class="ikon-space"></div>

                    <div class="ikona-txt">Hausmeisterservice</div>

                </div>
            </a>
        </div>






        <div style="height: 50px"></div>




        <div class="tri-ikone-holder" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="1100">


            <!-- GRUNE IKONA -->

            <a href="#winter-anchor" class="noSelect" id="menuHideWinter">
                <div class="ikona">

                    <div class="ikona-slika bg-slika-winter">
                        <div class="ikona-overlaj"></div>
                    </div>

                    <div class="ikon-space"></div>

                    <div class="ikona-txt">Winterdienst</div>

                </div>
            </a>

            <div class="ikona-empty"></div>


            <!-- GEBAUDE IKONA -->

            <a href="#tief-anchor" class="noSelect" id="menuHideTief">
                <div class="ikona">

                    <div class="ikona-slika bg-slika-tief">
                        <div class="ikona-overlaj"></div>
                    </div>

                    <div class="ikon-space"></div>

                    <div class="ikona-txt">Tiefgaragenpflege</div>

                </div>
            </a>

            <div class="ikona-empty"></div>


            <!-- GEBAUDE IKONA -->

            <a href="#kontakt-anchor" class="noSelect" id="menuHideKontakt">
                <div class="ikona">

                    <div class="ikona-slika bg-slika-kontakt">
                        <div class="ikona-overlaj"></div>
                    </div>

                    <div class="ikon-space"></div>

                    <div class="ikona-txt">Über uns / Kontakt</div>

                </div>
            </a>

        </div>




    </div>




</div>


















<div class="navigacija-reg" data-aos="fade-down" data-aos-easing="ease-in-out" data-aos-delay="200">

    
    <div id="logoImg" class="logo-regular" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="500">
        <img src="<?php echo get_template_directory_uri(); ?>/teamgreen-pavlovic-logo.png">
    </div>



    <div id="hamby" class="menu-ikona" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="700">
        <div class="menu-crta"></div>
        <div style="height: 3px"></div>
        <div class="menu-crta"></div>
        <div style="height: 3px"></div>
        <div class="menu-crta"></div>
    </div>


    <div id="hambyClose" class="menu-ikona-close">
        <div class="menu-crta" style="transform: rotate(45deg);"></div>
        <div class="menu-crta" style="transform: rotate(-45deg);"></div>
    </div>

</div>










































































<div class="page-hodl" id="navID">


	
	<div class="left-sadrzaj"data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="1000">
		
        <!-- <div id="desktopYN" class="no-desktopen"> <h2>L O A D I N G</h2> </div> -->
































		
        <div class="blog-header" 

        style="width: 100%; min-height: 101vh; display: flex; flex-direction: column; justify-content: flex-end; align-items: center; 

        background-image: url(


		<?php 
		$image = get_field('slika_posta');
		if( !empty( $image ) ): ?>

        	<?php echo esc_url($image['url']); ?>
        <?php endif; ?>

        );">






        	<div class="div-overlay" style=""></div>




			<div style="height: 150px"></div>





			<div style="position: absolute; z-index: 5; display: flex; flex-direction: column; align-items: center; justify-content: center; padding-bottom: 50px">


				<div style="margin-top: auto;">
					<h2 data-aos="fade-down" data-aos-easing="ease-in-out" data-aos-delay="1300" style="font-size: 50px"><?php the_field('naslov_posta'); ?></h2>
				</div>







				<div style="height: 25px"></div>


		
				<div style="width: 500px">
					<p style="text-align: center;">


				 		<?php $summary = get_field('opis_posta');
						
	      				echo substr($summary, 0, 110); ?>... 


					</p>

				</div>




				<div style="height: 45px"></div>


				
				<div data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="1600">
					<p>
						
						<?php the_time('F j, Y'); ?> / <?php the_time(); ?>
						
					</p>
				</div>

				<div style="height: 150px"></div>


				<a id="goDown" href="#blogOpis" class="noSelect" data-aos="fade-down" data-aos-easing="ease-in-out" data-aos-delay="2000" data-aos-offset="-500">
					
						<img src="<?php echo get_template_directory_uri(); ?>/arow-down.svg">
					
				</a>


			</div>






		</div>
































		<div class="blog-holder-2" id="blogOpis">

			<div style="height: 150px"></div>

			<div data-aos="fade-up" data-aos-easing="ease-in-out">
				<p><?php the_field('opis_posta'); ?></p>
			</div>

			<div style="height: 50px; width: 100%"></div>
<!-- 

			<?php 
			$image = get_field('slika_posta');
			if( !empty( $image ) ): ?>

				<div>
			    	<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			    </div>

			<?php endif; ?>

 -->



			

			<?php if( get_field('video_blog_2') ): ?>
				<video width="100%" autoplay muted loop style="border-radius: 15px; outline: none !important;" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-offset="400">
					
						<source src="<?php the_field('video_blog_2'); ?>" type="video/mp4">
					
						Your browser does not support HTML5 video.

				</video>
			<?php endif; ?>




			<div style="height: 50px"></div>

            
            <?php $images = get_field('galeria_blog');

                if( $images ): ?>

                    <div class="slike2holder" id="randImgGall">

                        <?php foreach( $images as $image ): ?>

                           
                                <a data-fancybox="galleryTief" href="<?php echo $image['url']; ?>">

                                    <img data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="400"
                                    class="slika-thumb" 
                                    style="" 
                                    src="<?php echo $image['url']; ?>" 
                                    alt="<?php echo $image['alt']; ?>" 

                                    />

                                </a>


                        <?php endforeach; ?>

                    </div>

            <?php endif; ?>





			<div style="height: 50px; width: 100%"></div>




			
			   
			

			<?php if( get_field('video_blog') ): ?>
				<video width="100%" autoplay muted loop style="border-radius: 15px; outline: none !important;" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-offset="400">
					
						<source src="<?php the_field('video_blog'); ?>" type="video/mp4">
					
						Your browser does not support HTML5 video.

				</video>
			<?php endif; ?>



			<div style="height: 50px; width: 100%"></div>



			<p><?php the_field('opis_posta'); ?></p>	
			
			
			<div style="height: 50px; width: 100%"></div>
			

			<?php if( get_field('video_blog') ): ?>

				<video 
					id="myVideo"
					width="100%" 
					controls 
					style="
						border-radius: 15px; 
						outline: none !important;" 
					data-aos="fade-up" 
					data-aos-easing="ease-in-out"
					data-aos-offset="400"
				>
					
						<source src="https://teamgreen-pavlovic.de/wp-content/uploads/WhatsAppVideo.mp4" type="video/mp4">
					
						Your browser does not support HTML5 video.

				</video>

			<?php endif; ?>


			<div style="height: 300px; width: 100%"></div>



			



							


			<style>
			.slike2holder a:nth-last-child(-n+2) {width:49.7%;}
			</style>








			<script>

			var ul = document.getElementById("randImgGall");


			for (var i = ul.children.length; i >= 0; i--) {

				ul.appendChild(ul.children[Math.random() * i | 0]);

			}

			</script>











			<div><h2 style="font-size: 20px">Teilen Sie diese</h2></div>

			<div style="height: 30px; width: 100%"></div>



			<div style="border: 1px solid green; background: black; padding: 30px; position: relative; display: flex; justify-content: center; align-items: center; border-radius: 100px;">

				<div style="width: 200vh; background: green; height: 1px; position: absolute; z-index: -1"></div>

				<!-- AddToAny BEGIN -->
				<div style="display: flex; width: 600px; justify-content: space-around; align-items: center;">
					





					<div class="fb-share-button" 
					data-href="<?php the_permalink(); ?>" 
					data-layout="button" 
					data-size="large">

						<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fteamgreen-pavlovic.de%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a>
					</div>











					<a class="link-sharee" href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site <?php the_permalink(); ?>"
					   title="Share by Email">
					  	<img style="width: 20px; height: 20px" src="<?php echo get_template_directory_uri(); ?>/email-share.svg">
					  	<div class="razmak-share"></div>
						<p class="link-share-text">Email</p>

					</a>






					<a class="twitter-share-button link-sharee" href="https://twitter.com/intent/tweet?text=Team Green Pavlovic - <?php the_field('naslov_posta'); ?> - <?php the_permalink(); ?>">
						

					  	<img style="width: 20px; height: 20px" src="<?php echo get_template_directory_uri(); ?>/twitter-share.svg">
					  	<div class="razmak-share"></div>

						<p class="link-share-text">Tweet</p>

					</a>




					<a class="link-sharee" href="whatsapp://send?text=<?php the_permalink(); ?>" data-action="share/whatsapp/share">
						<img style="width: 20px; height: 20px" src="<?php echo get_template_directory_uri(); ?>/whatsapp-share.svg">
					  	<div class="razmak-share"></div>

						<p class="link-share-text">WhatsApp</p>
					</a>





				</div>
				<!-- AddToAny END -->



			</div>

			<div style="height: 300px; width: 100%"></div>









<!-- GALERIA POSTOVA -->



<div class="naslov-kategorije-posta" data-aos="fade-up" data-aos-easing="ease-in-out">
	<h2>Grünanlagenservice</h2>
</div>

<div style="height: 30px; width: 100%"></div>


<div style="width: 100%; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center;">


			<?php
			global $post;
			$args = array( 
				'posts_per_page' => 3,
	    		'category_name' => '',
    			'orderby'   => 'rand',  
	    		);



			$lastposts = get_posts( $args );
			foreach ( $lastposts as $post ) :
			  setup_postdata( $post ); ?>


			  	

				
		
        <div class="blog-header posts-xl" data-aos="fade-up" data-aos-easing="ease-in-out" 

        style="

        width: 33%;

        background-image: url(


		<?php 
		$image = get_field('slika_posta');
		if( !empty( $image ) ): ?>

        	<?php echo esc_url($image['url']); ?>
        <?php endif; ?>

        );">


		<a href="<?php the_permalink(); ?>" class="link-xl-post"></a>



        	<div class="div-overlay-posts" style=""></div>




			<div style="height: 150px"></div>






			<div class="text-xl-post" style="">


				<div>
					<h2 data-aos="fade-down" data-aos-easing="ease-in-out" data-aos-delay="200" style="font-size: 15px"><?php the_field('naslov_posta'); ?></h2>
				</div>



				
				<div data-aos="fade-down" data-aos-easing="ease-in-out" data-aos-delay="">
					<p style="font-size: 11px; text-align: left;">
						
						<?php the_time('F j, Y'); ?> / <?php the_time(); ?>
						
					</p>
				</div>



			




			</div>






		</div>

				


				<!-- <div style="width: 100%; height: 1px; background: rgba(0,256,0,.25);"></div> -->

			<?php endforeach; 
			wp_reset_postdata(); ?>





</div>



<!-- / GALERIA POSTOVA -->

























<div style="height: 150px; width: 100%"></div>






<!-- GALERIA VELIKOG POSTA -->



<div class="naslov-kategorije-posta" data-aos="fade-up" data-aos-easing="ease-in-out">
	<h2>Gebäudereinigung</h2>
</div>

<div style="height: 30px; width: 100%"></div>

<div style="width: 100%; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center;">


			<?php
			global $post;
			$args = array( 
				'posts_per_page' => 1,
	    		'category_name' => '',
    			'orderby'   => 'rand', 
	    		);



			$lastposts = get_posts( $args );
			foreach ( $lastposts as $post ) :
			  setup_postdata( $post ); ?>


			  	

				
		
        <div class="blog-header posts-xl" data-aos="fade-up" data-aos-easing="ease-in-out" 

        style="



        width: 100%;
        background-image: url(


		<?php 
		$image = get_field('slika_posta');
		if( !empty( $image ) ): ?>

        	<?php echo esc_url($image['url']); ?>
        <?php endif; ?>

        );">


		<a href="<?php the_permalink(); ?>" class="link-xl-post"></a>



        	<div class="div-overlay-posts" style=""></div>




			<div style="height: 150px"></div>





			<div class="text-xl-post">


				<div>
					<h2 data-aos="fade-down" data-aos-easing="ease-in-out" data-aos-delay="200" style="font-size: 20px"><?php the_field('naslov_posta'); ?></h2>
				</div>



				
				<div data-aos="fade-down" data-aos-easing="ease-in-out" data-aos-delay="">
					<p style="font-size: 12px; text-align: left;">
						
						<?php the_time('F j, Y'); ?> / <?php the_time(); ?>
						
					</p>
				</div>



			




			</div>






		</div>

				


				<!-- <div style="width: 100%; height: 1px; background: rgba(0,256,0,.25);"></div> -->

			<?php endforeach; 
			wp_reset_postdata(); ?>





</div>




<!-- / GALERIA VELIKOG POSTA -->














<div style="height: 150px; width: 100%"></div>







<!-- GALERIA 2 srednja POSTA -->




<div class="naslov-kategorije-posta" data-aos="fade-up" data-aos-easing="ease-in-out">
	<h2>Hausmeisterservice</h2>
</div>

<div style="height: 30px; width: 100%"></div>


<div style="width: 100%; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center;">


			<?php
			global $post;
			$args = array( 
				'posts_per_page' => 2,
	    		'category_name' => '',
    			'orderby'   => 'rand', 
	    		);



			$lastposts = get_posts( $args );
			foreach ( $lastposts as $post ) :
			  setup_postdata( $post ); ?>


			  	

				
		
        <div class="blog-header posts-xl" data-aos="fade-up" data-aos-easing="ease-in-out" 

        style="


        width: 49.6%;
        background-image: url(


		<?php 
		$image = get_field('slika_posta');
		if( !empty( $image ) ): ?>

        	<?php echo esc_url($image['url']); ?>
        <?php endif; ?>

        );">


		<a href="<?php the_permalink(); ?>" class="link-xl-post"></a>



        	<div class="div-overlay-posts" style=""></div>




			<div style="height: 150px"></div>





			<div class="text-xl-post">


				<div>
					<h2 data-aos="fade-down" data-aos-easing="ease-in-out" data-aos-delay="200" style="font-size: 20px"><?php the_field('naslov_posta'); ?></h2>
				</div>



				
				<div data-aos="fade-down" data-aos-easing="ease-in-out" data-aos-delay="">
					<p style="font-size: 12px; text-align: left;">
						
						<?php the_time('F j, Y'); ?> / <?php the_time(); ?>
						
					</p>
				</div>



			




			</div>






		</div>

				


				<!-- <div style="width: 100%; height: 1px; background: rgba(0,256,0,.25);"></div> -->

			<?php endforeach; 
			wp_reset_postdata(); ?>





</div>




<!-- / GALERIA 2 srednja POSTA -->





















		<div style="height: 150px; width: 100%"></div>



		</div>





		<div style="width: 100%">
			
			<div class="naslov-grupa" data-aos="fade-up" data-aos-easing="ease-in-out">
			    <h2>Kommentare</h2>
			</div>

			<!-- <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span> -->


			<?php if( comments_open() ) {
				// do something here
				comments_template();
			} ?> 



			
			<div id="kontakt-anchor" class="aos-kontakt-naslov" style="height: 70px"></div> 


		</div>











		




     


        <div class="naslov-grupa" data-aos="fade-up" data-aos-easing="ease-in-out">
            <h2>Kontaktieren Sie uns</h2>
        </div>


        <!-- <div style="height: 50px"></div> -->



        <div class="holder-sadrzaja" style="width: 100%; position: relative;">
            

        



            <!-- <div style="height: 20px"></div> -->



            

            <div data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200" class="forma-desktop">

                
                    <?php echo do_shortcode('[wpforms id="8" title="false" description="false"]'); ?>
                    <div style="height: 35px; width: 100%;"></div>

					<p style="font-size: 12px;">Ich bin damit einverstanden, dass diese Website meine eingereichten Informationen speichert, damit sie auf meine Anfrage antworten können.</p>

					<div style="height: 15px; width: 100%;"></div>

                    <a style="font-size: 12px; color: green; text-decoration: underline;" href="https://teamgreen-pavlovic.de/dsgvo/" target="_blank">DSGVO mehr erfahren</a>

					<div style="height: 15px; width: 100%;"></div>
					
                    <p style="font-size: 11px;">
                        Panorama von München<br> - Image by <a href="https://pixabay.com/users/designerpoint-554875/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1558710">Michael Siebert</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1558710">Pixabay</a>
                    </p>
               
            </div>


            <div class="jumbo-desktop" data-aos="flip-up" data-aos-easing="ease-in-out" data-aos-delay="600">
            	<img class="jumbo-img" src="https://teamgreen-pavlovic.de/wp-content/uploads/pano.jpg">

                <div style="height: 500px"></div>
            </div>

<!--             <div style="display: flex; justify-content: center; align-items: flex-start; flex-direction: column; width: 35%;">
            	
            	<div style="margin-left: auto;">
            		<h3>Team Green Pavlovic e.K.</h3>	
					<p>
						Inh. Boris Pavlovic<br>
						Nanga-Parbat-Straße 83<br>
						80992 München<br>
						USt-IdNr.: DE309919821<br>
						Amtsgericht München HRA 108363<br>
						Tel.: 015753471660<br>
						Fax: 08996041200<br>
						info@teamgreen-pavlovic.de
					</p>
				</div>

            </div> -->

        </div>



	</div>





























































	<div class="right-menu" data-aos="fade-left" data-aos-easing="ease-in-out">


        <div style="width: 50%; margin: 100px 0 50px 0">
            <img src="<?php echo get_template_directory_uri(); ?>/teamgreen-pavlovic-logo.png">
        </div>


        <p style="font-size: 18px">Aktuelle Nachrichten</p>

		<?php
		global $post;
		$args = array( 
			'posts_per_page' => -1,
    		'category_name' => '' 
    		);



		$lastposts = get_posts( $args );
		foreach ( $lastposts as $post ) :
		  setup_postdata( $post ); ?>


		  	
			<a href="<?php the_permalink(); ?>" class="jedan-link-holder">
				<div class="jedan-blog-holder">



					<div class="blog-slika-holder">

						<?php 
						$image = get_field('slika_posta');
						if( !empty( $image ) ): ?>

							<div style="width: 100px">
						    	<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" style="border-radius: 7px; border: 1px solid black;"/>
						    </div>

						<?php endif; ?>
					</div>

					<div class="crtica"></div>

					<div>
						<span class="zeleni-text"><?php the_field('naslov_posta'); ?></span> <br>
						<span class="date"><?php the_time('F j, Y'); ?> / <?php the_time(); ?></span>

				
					
						<p style="font-size: 14px">


							<?php $summary = get_field('opis_posta');
							
		      				echo substr($summary, 0, 30); ?>...

							<!-- <?php $excerpt = wp_trim_words( get_field('opis_posta' ), $num_words = 20, $more = '...' ); ?> -->
						</p>

						

						


					</div>


				</div>
			</a>
			


			<!-- <div style="width: 100%; height: 1px; background: rgba(0,256,0,.25);"></div> -->

		<?php endforeach; 
		wp_reset_postdata(); ?>


















		<?php
		global $post;
		$args = array( 
			'posts_per_page' => -1,
    		'category_name' => '' 
    		);



		$lastposts = get_posts( $args );
		foreach ( $lastposts as $post ) :
		  setup_postdata( $post ); ?>


		  	
			<a href="<?php the_permalink(); ?>" class="jedan-link-holder">
				<div class="jedan-blog-holder">



					<div class="blog-slika-holder">

						<?php 
						$image = get_field('slika_posta');
						if( !empty( $image ) ): ?>

							<div style="width: 100px">
						    	<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" style="border-radius: 7px; border: 1px solid black;"/>
						    </div>

						<?php endif; ?>
					</div>

					<div class="crtica"></div>

					<div>
						<span class="zeleni-text"><?php the_field('naslov_posta'); ?></span> <br>
						<span class="date"><?php the_time('F j, Y'); ?> / <?php the_time(); ?></span>

				
					
						<p style="font-size: 14px">


							<?php $summary = get_field('opis_posta');
							
		      				echo substr($summary, 0, 30); ?>...

							<!-- <?php $excerpt = wp_trim_words( get_field('opis_posta' ), $num_words = 20, $more = '...' ); ?> -->
						</p>

						

						


					</div>


				</div>
			</a>
			


			<!-- <div style="width: 100%; height: 1px; background: rgba(0,256,0,.25);"></div> -->

		<?php endforeach; 
		wp_reset_postdata(); ?>


		<div style="heigth:100px"></div>
	</div>











</div>








		<a id="goUp" href="#navID" class="noSelect" data-aos="fade-right" data-aos-easing="ease-out-back" data-aos-offset="700" data-aos-delay="">
			
				<img src="<?php echo get_template_directory_uri(); ?>/arrow-up.svg">
			
		</a>














  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>


<!--  hover na jedan element a promjeni drugi
<script type="text/javascript">
	

const cbox = document.querySelectorAll(".jedan-link-holder");

 for (let i = 0; i < cbox.length; i++) {


    cbox[i].addEventListener("mouseenter", function() {


		const datum = document.querySelectorAll(".date");
		const crtica = document.querySelectorAll(".crtica");


       	crtica[i].classList.add("crtica-2");

       	datum[i].classList.add("font-black");


     });




 }







 for (let i = 0; i < cbox.length; i++) {


    cbox[i].addEventListener("mouseleave", function() {


		const datum = document.querySelectorAll(".date");

		const crtica = document.querySelectorAll(".crtica");


       	crtica[i].classList.remove("crtica-2");

       	datum[i].classList.remove("font-black");


     });




 }







</script>
 -->

















  <script>



const vid = document.getElementById("myVideo");
  
setHalfVolume = () => vid.volume = 0.2;


setHalfVolume();





const cbox = document.querySelectorAll(".posts-xl");

 for (let i = 0; i < cbox.length; i++) {


    cbox[i].addEventListener("mouseenter", function() {


		const divOverlay = document.querySelectorAll(".div-overlay-posts");

       	divOverlay[i].classList.add("div-overlay-posts-hover");


		// const crtica = document.querySelectorAll(".crtica");

       	// crtica[i].classList.add("crtica-2");

     });

 }







 for (let i = 0; i < cbox.length; i++) {


    cbox[i].addEventListener("mouseleave", function() {


		const divOverlay = document.querySelectorAll(".div-overlay-posts");

       	divOverlay[i].classList.remove("div-overlay-posts-hover");


     });

 }











 for (let i = 0; i < cbox.length; i++) {


    cbox[i].addEventListener("click", function() {


		const divOverlay = document.querySelectorAll(".div-overlay-posts");

       	divOverlay[i].classList.add("div-overlay-posts-click");


     });
 }













document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});









	// aos

    AOS.init();






window.addEventListener('DOMContentLoaded', (event) => {
    var dskt = document.getElementById("desktopYN");

    dskt.classList.add("yes-desktopen");
    // dskt.classList.remove("no-desktope");
});
















const komentar = document.querySelectorAll(".comment");

 for (let i = 0; i < komentar.length; i++) {


    komentar[i].setAttribute("data-aos", "fade-up");



 }


 for (let i = 0; i < komentar.length; i++) {



	komentar[i].setAttribute("data-aos-easing", "ease-in-out");

 }


 for (let i = 0; i < komentar.length; i++) {



	komentar[i].setAttribute("data-aos-offset", "400");

 }




const komentarForma = document.querySelector(".comment-respond");

	komentarForma.setAttribute("data-aos", "fade-up");
	komentarForma.setAttribute("data-aos-easing", "ease-in-out");
	komentarForma.setAttribute("data-aos-offset", "400");







const submitGumb = document.querySelector(".submit");

	submitGumb.setAttribute("data-aos", "fade-up");
	submitGumb.setAttribute("data-aos-easing", "ease-in-out");





    
    document.querySelector('#hamby').addEventListener('click', function (e) {
        
        var menuHideShow = document.getElementById("menuHideShow");
        var hambyClose = document.getElementById("hambyClose");
        var hamby = document.getElementById("hamby");


        menuHideShow.classList.add("menu-screen-show");
        hambyClose.classList.add("hambyBtnCloseFlex");
        hamby.classList.add("hambyHide");

    });




    
    document.querySelector('#menuHideGrune').addEventListener('click', function (e) {
        
        var element = document.getElementById("menuHideShow");
        element.classList.remove("menu-screen-show");  

        var hambyClose = document.getElementById("hambyClose");
        var hamby = document.getElementById("hamby");

        hambyClose.classList.remove("hambyBtnCloseFlex");
        hamby.classList.remove("hambyHide");
    });



    
    document.querySelector('#menuHideGebaude').addEventListener('click', function (e) {
        
        var element = document.getElementById("menuHideShow");
        element.classList.remove("menu-screen-show");

        var hambyClose = document.getElementById("hambyClose");
        var hamby = document.getElementById("hamby");

        hambyClose.classList.remove("hambyBtnCloseFlex");
        hamby.classList.remove("hambyHide");  
    });

    
    document.querySelector('#menuHideHaus').addEventListener('click', function (e) {
        
        var element = document.getElementById("menuHideShow");
        element.classList.remove("menu-screen-show");

        var hambyClose = document.getElementById("hambyClose");
        var hamby = document.getElementById("hamby");

        hambyClose.classList.remove("hambyBtnCloseFlex");
        hamby.classList.remove("hambyHide");  
    });

    
    document.querySelector('#menuHideWinter').addEventListener('click', function (e) {
        
        var element = document.getElementById("menuHideShow");
        element.classList.remove("menu-screen-show");  

        var hambyClose = document.getElementById("hambyClose");
        var hamby = document.getElementById("hamby");

        hambyClose.classList.remove("hambyBtnCloseFlex");
        hamby.classList.remove("hambyHide");
    });

    
    document.querySelector('#menuHideTief').addEventListener('click', function (e) {
        
        var element = document.getElementById("menuHideShow");
        element.classList.remove("menu-screen-show");  

        var hambyClose = document.getElementById("hambyClose");
        var hamby = document.getElementById("hamby");

        hambyClose.classList.remove("hambyBtnCloseFlex");
        hamby.classList.remove("hambyHide");
    });

    
    document.querySelector('#menuHideKontakt').addEventListener('click', function (e) {
        
        var element = document.getElementById("menuHideShow");
        element.classList.remove("menu-screen-show");  

        var hambyClose = document.getElementById("hambyClose");
        var hamby = document.getElementById("hamby");

        hambyClose.classList.remove("hambyBtnCloseFlex");
        hamby.classList.remove("hambyHide");
    });





    
    document.querySelector('#hambyClose').addEventListener('click', function (e) {
        
        var element = document.getElementById("menuHideShow");
        element.classList.remove("menu-screen-show");  




        var hambyClose = document.getElementById("hambyClose");
        var hamby = document.getElementById("hamby");



        hambyClose.classList.remove("hambyBtnCloseFlex");
        hamby.classList.remove("hambyHide");



    });








  </script>






<?php get_footer();  ?>
