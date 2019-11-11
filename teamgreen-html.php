


	<?php  

		get_template_part( 'css-stil' );
	
	?>


















    <?php 

        if ( !wp_is_mobile() ) {

             get_template_part( 'gdpr-desk' );





        } else {

            get_template_part( 'gdpr-mob' );
        }


    ?>


































    <div id="loadingScr" class="loadingScreen">



	<div class="navigacija-reg">

	    <div id="logoImg" class="logo-regular" style="display: flex; justify-content: center; align-items: center;">

	        <img style="width: 100px;" src="<?php echo get_template_directory_uri(); ?>/teamgreen-pavlovic-logo.png">
	        
	    </div>

	    <img style="height: 25px" src="<?php echo get_template_directory_uri(); ?>/369.gif">


	</div>


     
     
      
        <div class="overlej" style="opacity: .9"></div>

      
<!-- 
        <div style="display: flex; justify-content: center;align-items: center;">

        	<img style="width: 30px" src="<?php echo get_template_directory_uri(); ?>/369.gif">
        	
			<div><img class="logo-loading" src="<?php echo get_template_directory_uri(); ?>/teamgreen-pavlovic-logo.png"></div>

	        <img style="width: 30px; transform: rotate(90deg);" src="<?php echo get_template_directory_uri(); ?>/369.gif">

		</div> -->
        

       	<div class="height-30"></div>

        <div class="loading-tekst">LOADING - Die 3D Webseite wird geladen</div>

        <div class="height-30"></div>

      
        <div class="loading-box">
            <div id="loadingLineGreen" class="loading-green"></div>
        </div>

        <div class="height-40"></div>


        
       	<div class="height-30"></div>

      

        <div id="swiperLoadingID" class="swiper-container">



		    <!-- START / GALLERY -->
		    <?php $images = get_field('swiper_loading');

		        if( $images ): ?>

		            <div class="swiper-wrapper">

		                <?php foreach( $images as $image ): ?>

                			<div class="swiper-slide" style="background-image:url(<?php echo $image['url']; ?>)"></div>

		                <?php endforeach; ?>

		            </div>

		    <?php endif; ?><!-- END / GALLERY -->


            <div class="swiper-pagination"></div>

            <div class="swiper-button-next" style="background-image: url(<?php echo get_template_directory_uri(); ?>/svg-strelice/right-strelica.svg);"></div>
            <div class="swiper-button-prev" style="background-image: url(<?php echo get_template_directory_uri(); ?>/svg-strelice/left-strelica.svg);"></div>
        </div>

    </div>



























<!-- ////////////////////////////////////////////////////////////////////////////////
//////////////////////////////// MODALI /////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////// -->



    <div class="modal">



	    <img class="logo-modal" src="<?php echo get_template_directory_uri(); ?>/teamgreen-pavlovic-logo.png">


    	<div class="modal-content-holder">

	        <h2>Grünanlagenservice</h2>


	        <p>
                Zu einem anspruchsvollen Erscheinungsbild eines Objektes gehört ein gepflegter Garten. <br><br>Wir sorgen dafür, dass
                Ihre Gärten und Außenanlagen zu jedem Zeitpunkt in besten Zustand sind.
                Wir bieten:<br><br>

                - Pflege von Grünflächen<br><br>
                - Rasen mähen<br><br>
                - Beschneiden von Hecken<br><br>
                - Unkrautbekämpfung<br><br>
                - Vertikutieren und Düngen von Rasenflächen<br><br>
                - Pflege/Wartung von Spielplätzen<br><br>
                - u.v.m.
	        </p>


	       


		    <!-- START / GALLERY -->
		    <?php $images = get_field('galeria_grune');

		        if( $images ): ?>

		            <div class="slike2holder">

		                <?php foreach( $images as $image ): ?>

		                   
		                        <a data-fancybox="gallery" href="<?php echo $image['url']; ?>">

		                            <img 
		                            class="slika-thumb" 
		                            style="" 
		                            src="<?php echo $image['url']; ?>" 
		                            alt="<?php echo $image['alt']; ?>" 

		                            />

		                        </a>


		                <?php endforeach; ?>

		            </div>

		    <?php endif; ?><!-- END / GALLERY -->








		    <!-- START / GALLERY HIDEN -->
		    <?php $images = get_field('galeria_grune_hiden');

		        if( $images ): ?>

		                <?php foreach( $images as $image ): ?>

		                   
		                    <a data-fancybox="gallery" href="<?php echo $image['url']; ?>"></a>


		                <?php endforeach; ?>

		    <?php endif; ?><!-- END / GALLERY HIDEN -->

    		<div class="modal-bottom-height"></div>

    	</div>

  	</div>













    <div class="modalGebaude">

        <img class="logo-modal" src="<?php echo get_template_directory_uri(); ?>/teamgreen-pavlovic-logo.png">
        

    	<div class="modal-content-holder">


	        <h2>Gebäudereinigung</h2>


	        <p>
                Unsere fachmännische Gebäudereinigung wirkt sich nicht nur positiv auf den ersten Eindruck eines Kunden oder
                Mieter aus. <br><br>Sie sichert auch langfristig einen hohen Pflegezustand und Wert Ihrer Immobilie.<br><br>

                - Glasreinigung für vollen Durchblick (Glas und Fensterflächen jeder Art)<br><br>
                - Unterhaltsreinigung im Privat und Geschäftsbereichen, Praxen, Büros, Kindergärten und Schulen<br><br>
                - Treppenhausreinigung<br><br>
                - Kellerreinigung<br><br>
                - Sanitärreinigung<br><br>
                <!-- - Glasreinigung/Fensterreinigung<br> -->
                - Speicherreinigung<br><br>
                - Dachterrassenreinigung<br><br>
                - Mülltonnenreinigung<br><br>
	        </p>




		    <!-- START / GALLERY -->
		    <?php $images = get_field('galeria_gebaude');

		        if( $images ): ?>

		            <div class="slike2holder">

		                <?php foreach( $images as $image ): ?>

		                   
		                        <a data-fancybox="gallery2" href="<?php echo $image['url']; ?>">

		                            <img 
		                            class="slika-thumb" 
		                            style="" 
		                            src="<?php echo $image['url']; ?>" 
		                            alt="<?php echo $image['alt']; ?>" 

		                            />

		                        </a>


		                <?php endforeach; ?>

		            </div>

		    <?php endif; ?><!-- END / GALLERY -->




		    <!-- START / GALLERY HIDEN -->
		    <?php $images = get_field('galeria_gebaude_hiden');

		        if( $images ): ?>

		                <?php foreach( $images as $image ): ?>

		                   
		                    <a data-fancybox="gallery2" href="<?php echo $image['url']; ?>"></a>


		                <?php endforeach; ?>

		    <?php endif; ?><!-- END / GALLERY HIDEN -->


    		<div class="modal-bottom-height"></div>


    	</div>


    </div>
















    <div class="modalHaus">

        <img class="logo-modal" src="<?php echo get_template_directory_uri(); ?>/teamgreen-pavlovic-logo.png">
        

    	<div class="modal-content-holder">


	        <h2>Hausmeisterservice</h2>


	        <p>
                Unser Hausmeisterservice hat sich zum Ziel gesetzt, seinem Kunden nahe zu alle Arbeiten abzunehmen. <br><br>

                Wir beraten Sie kostenlos und ohne Verpflichtungen. Sie erhalten Vorschläge und Ideen von uns, wie wir Ihnen bei
                Ihrer täglichen Arbeit helfen können.<br><br>

                Unser Hausmeisterservice beinhaltet einen 24 stündigen Notdienst.<br><br>

                - Entsorgung von Sperrmüll<br><br>
                - Entrümpelung von Wohnungen, Kellern und Dachböden<br><br>
                - Überwachung der Müllentsorgung<br><br>
                - Beaufsichtigung und Kontrolle der Handwerker<br><br>

                - Wohnungsübergabe, Abnahme und Besichtigungen<br><br>
                - Meldung von Schäden und Mängeln an die Hausverwaltung<br><br>
                - Ablesen von Wasser, Strom und Gaszählerständen<br><br>
                - Ausführung von Kleinreparaturen<br><br>
                - Bedienung der Heizungsanlage<br><br>
                <!-- - Garten und Grünflächenpflege<br><br> -->
                - Hausaufsicht<br><br>
                - Reinigung (Innen und Außen)
	        </p>




		    <!-- START / GALLERY -->
		    <?php $images = get_field('galeria_haus');

		        if( $images ): ?>

		            <div class="slike2holder">

		                <?php foreach( $images as $image ): ?>

		                   
		                        <a data-fancybox="gallery3" href="<?php echo $image['url']; ?>">

		                            <img 
		                            class="slika-thumb" 
		                            style="" 
		                            src="<?php echo $image['url']; ?>" 
		                            alt="<?php echo $image['alt']; ?>" 

		                            />

		                        </a>


		                <?php endforeach; ?>

		            </div>

		    <?php endif; ?><!-- END / GALLERY -->




		    <!-- START / GALLERY HIDEN -->
		    <?php $images = get_field('galeria_haus_hiden');

		        if( $images ): ?>

		                <?php foreach( $images as $image ): ?>

		                   
		                    <a data-fancybox="gallery3" href="<?php echo $image['url']; ?>"></a>


		                <?php endforeach; ?>

		    <?php endif; ?><!-- END / GALLERY HIDEN -->

			<div class="modal-bottom-height"></div>

    	</div>

    </div>








    <div class="modalWinter">

        <img class="logo-modal" src="<?php echo get_template_directory_uri(); ?>/teamgreen-pavlovic-logo.png">
        


    	<div class="modal-content-holder">


	        <h2>Winterdienst</h2>


	        <p>
	            Die Sicherheit für Sie bei Eisbildung und Schneefall steht für uns an erster Stelle. <br><br>

	            Sobald die kalte Jahreszeit beginnt sorgen wir dafür, dass Sie sicher zu Ihrem Wohnhaus oder Objekt gelangen.
	        </p>




		    <!-- START / GALLERY -->
		    <?php $images = get_field('galeria_winter');

		        if( $images ): ?>

		            <div class="slike2holder">

		                <?php foreach( $images as $image ): ?>

		                   
		                        <a data-fancybox="gallery4" href="<?php echo $image['url']; ?>">

		                            <img 
		                            class="slika-thumb" 
		                            style="" 
		                            src="<?php echo $image['url']; ?>" 
		                            alt="<?php echo $image['alt']; ?>" 

		                            />

		                        </a>


		                <?php endforeach; ?>

		            </div>

		    <?php endif; ?><!-- END / GALLERY -->



		    <!-- START / GALLERY HIDEN -->
		    <?php $images = get_field('galeria_winter_hiden');

		        if( $images ): ?>

		                <?php foreach( $images as $image ): ?>

		                   
		                    <a data-fancybox="gallery4" href="<?php echo $image['url']; ?>"></a>


		                <?php endforeach; ?>

		    <?php endif; ?><!-- END / GALLERY HIDEN -->



    		<div class="modal-bottom-height"></div>


    	</div>


    </div>











    <div class="modalKontakt">

        <img class="logo-modal" src="<?php echo get_template_directory_uri(); ?>/teamgreen-pavlovic-logo.png">
        


    	<div class="modal-content-holder">


	        <h2>Kontaktieren Sie uns</h2>


	        <p>
	            Wir freuen uns, dass Sie den Weg auf unsere Homepage gefunden haben und begrüßen Sie herzlichst. 

	            <br><br>

	            Unsere Aufgabe ist es, die Kundenerwartungen zu erfüllen: gleichbleibende gute Qualität und gleichbleibender guter
	            Service, hervorragende Betreuung und bestmögliche Informationen. 

	            <br><br>

	            Seit unser Unternehmen gegründet wurde,
	            sehen wir es als unser vorrangiges Ziel, unsere Kunden zu 100% zufriedenzustellen.

	            <br><br>

	            Eine besondere Auszeichnung und Freude ist für uns die Tatsache, dass ein Großteil unserer neuen Kunden auf Empfehlung von
	            bestehenden Kunden den Weg zu uns findet.
	        </p>


	 		

			<?php echo do_shortcode('[wpforms id="8" title="false" description="false"]'); ?>

            <div style="height: 35px; width: 100%;"></div>

           	<a style="font-size: 12px; color: green" href="https://teamgreen-pavlovic.de/dsgvo/" target="_blank">DSGVO mehr erfahren</a>


		
            <div style="height: 35px; width: 100%;"></div>
   
			<p style="font-size: 12px;">
				Panorama von München - Image by 
			</p>
		
			<a style="font-size: 12px;" href="https://pixabay.com/users/designerpoint-554875/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1558710">Michael Siebert</a> 
			<a style="font-size: 12px;" href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1558710">from Pixabay</a>
				

            <div style="height: 35px; width: 100%;"></div>
			<p style="font-size: 12px">3D Web Design:</p>

           	<a style="font-size: 13px; color: green" href="https://www.facebook.com/3DwebsiteDesign" target="_blank">facebook.com/3DwebsiteDesign</a>


    		<div class="modal-bottom-height"></div>

	
		</div>

    </div>












    <!-- <audio id="audiomp3" src="btn-soud.mp3"></audio> -->



























<!-- ////////////////////////////////////////////////////////////////////////////////
//////////////////////////////// NAVIGACIJA /////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////// -->







    <!-- POČETNA NAVIGACIJA - U L A Z -->

    <div id="navUlaz" class="navigacija-box">
        <button class="nav-gumb" id="grunanlageUlaz">Grünanlagenservice</button>
        <button class="nav-gumb" id="gebaudereinigungUlaz">Gebäudereinigung</button>
        <button id="fromStart2Haus" class="nav-gumb">Hausmeisterservice</button>
        <button id="gumbFromStart2Winter" class="nav-gumb">Winterdienst</button>
        <img class="logo-navigacija" src="<?php echo get_template_directory_uri(); ?>/teamgreen-pavlovic-logo.png">
        
        <button id="gumbFromStart2Kontakt" class="nav-gumb">Über uns / Kontakt</button>
    </div>



    <!-- Grünanlagenservice NAVIGACIJA-->

    <div id="navGrun" class="navigacija-box">
        <button id="" class="nav-gumb green-gumb">Grünanlagenservice</button>
        <button id="fromGrun2Gebaude" class="nav-gumb">Gebäudereinigung</button>
        <button id="fromGrun2Haus" class="nav-gumb">Hausmeisterservice</button>
        <button id="fromGrun2Winter" class="nav-gumb">Winterdienst</button>
        <img id="logoNavigacijaGrune" class="logo-navigacija" src="<?php echo get_template_directory_uri(); ?>/teamgreen-pavlovic-logo.png">
        
        <button id="fromGrun2Kontakt" class="nav-gumb">Über uns / Kontakt</button>
    </div>



    <!-- Gebäudereinigung NAVIGACIJA -->

    <div id="navGebaude" class="navigacija-box">
        <button id="fromGebaude2Grun" class="nav-gumb">Grünanlagenservice</button>
        <button id="" class="nav-gumb green-gumb">Gebäudereinigung</button>
        <button id="fromGebaude2Haus" class="nav-gumb">Hausmeisterservice</button>
        <button id="fromGebaude2Winter" class="nav-gumb">Winterdienst</button>
        <img id="logoNavigacijaGebaude" class="logo-navigacija" src="<?php echo get_template_directory_uri(); ?>/teamgreen-pavlovic-logo.png">
        
        <button id="fromGebaude2Kontakt" class="nav-gumb">Über uns / Kontakt</button>
    </div>



    <!-- Hausmeisterservice NAVIGACIJA -->

    <div id="navHaus" class="navigacija-box">
        <button id="fromHaus2Grun" class="nav-gumb">Grünanlagenservice</button>
        <button id="fromHaus2Gebaude" class="nav-gumb">Gebäudereinigung</button>
        <button id="" class="nav-gumb green-gumb">Hausmeisterservice</button>
        <button id="fromHaus2Winter" class="nav-gumb">Winterdienst</button>
        <img id="logoNavigacijaHaus" class="logo-navigacija" src="<?php echo get_template_directory_uri(); ?>/teamgreen-pavlovic-logo.png">
        
        <button id="fromHaus2Kontakt" class="nav-gumb">Über uns / Kontakt</button>
    </div>








    <!-- Winterdienst NAVIGACIJA -->

    <div id="navWinter" class="navigacija-box">
        <button id="fromWinter2Grun" class="nav-gumb">Grünanlagenservice</button>
        <button id="fromWinter2Gebaude" class="nav-gumb">Gebäudereinigung</button>
        <button id="fromWinter2Haus" class="nav-gumb">Hausmeisterservice</button>
        <button id="" class="nav-gumb green-gumb">Winterdienst</button>
        <img id="logoNavigacijaWinter" class="logo-navigacija" src="<?php echo get_template_directory_uri(); ?>/teamgreen-pavlovic-logo.png">
        
        <button id="fromWinter2Kontakt" class="nav-gumb">Über uns / Kontakt</button>
    </div>






    <!-- Kontakt NAVIGACIJA -->

    <div id="navKontakt" class="navigacija-box">
        <button id="fromKontakt2Grun" class="nav-gumb">Grünanlagenservice</button>
        <button id="fromKontakt2Gebaude" class="nav-gumb">Gebäudereinigung</button>
        <button id="fromKontakt2Haus" class="nav-gumb">Hausmeisterservice</button>
        <button id="fromKontakt2Winter" class="nav-gumb">Winterdienst</button>
        <img id="logoNavigacijaKontakt" class="logo-navigacija" src="<?php echo get_template_directory_uri(); ?>/teamgreen-pavlovic-logo.png">
        
        <button id="" class="nav-gumb green-gumb">Über uns / Kontakt</button>
    </div>









<script src="https://unpkg.com/aos@next/dist/aos.js"></script>


<script type="text/javascript">
	


    // aos

    AOS.init();





</script>