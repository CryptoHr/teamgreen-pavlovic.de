
 <?php 



/*
 * Template Name: Regular WEB Desktop
*/





 get_header('rregular'); ?>




<?php get_template_part( 'regular-stil' ); ?>








<div class="navigacija-reg" data-aos="fade-down" data-aos-easing="ease-in-out" data-aos-delay="50">

    <div id="logoImg" class="logo-regular" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">
        <img src="<?php echo get_template_directory_uri(); ?>/teamgreen-pavlovic-logo.png">
    </div>

</div>




<div class="page-hodl" id="goUpAnchor">


	
	<div class="left-sadrzaj">
		
        <div id="desktopYN" class="no-desktopen"> <h2>L O A D I N G</h2> </div>










<!-- 



        <div class="gdpr-div">


            <div class="navigacija-reg" data-aos="fade-down" data-aos-easing="ease-in-out" data-aos-delay="50">

                <div id="logoImg" class="logo-regular" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200">
                    <img src="<?php echo get_template_directory_uri(); ?>/teamgreen-pavlovic-logo.png">
                </div>

            </div>

            <div style="width: 70%">

                <div style="height: 150px"></div>

                <h2 style="margin-right: auto;" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="400">Wählen Sie eine Website aus</h2>

                <p data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="500" style="border-left: 5px solid green; padding-left: 20px; line-height: 18px; font-size: 15px;">
                    Wir freuen uns, dass Sie den Weg auf unsere Homepage gefunden haben und begrüßen Sie herzlichst. 

                    

                    Unsere Aufgabe ist es, die Kundenerwartungen zu erfüllen: gleichbleibende gute Qualität und gleichbleibender guter
                    Service, hervorragende Betreuung und bestmögliche Informationen. 

                   

                    Seit unser Unternehmen gegründet wurde,
                    sehen wir es als unser vorrangiges Ziel, unsere Kunden zu 100% zufriedenzustellen.


                    Eine besondere Auszeichnung und Freude ist für uns die Tatsache, dass ein Großteil unserer neuen Kunden auf Empfehlung von
                    bestehenden Kunden den Weg zu uns findet.
                </p>

            </div>


            <div style="height: 50px"></div>

            <div style="display: flex; justify-content: space-around; align-items: center; flex-direction: row;" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="600">

                <button class="koja-stranica">Die 3D Webseite</button>
                <div style="width: 100px"></div>
                <button class="koja-stranica">Normale Webseite</button>

            </div>
            


            <div style="height: 200px"></div>


            <div

            style="
            text-align: left; 
            width: 100%; 
            background: black; 
            display: flex; 
            flex-direction: column;
            justify-content: center; 
            align-items: center; 
            text-align: left;
            padding: 20px 0;

            border-top: 1px solid green;
            border-bottom: 1px solid green;
            margin-top: auto;

            "

            data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="700"
            >

                <div>
                    <H2>G D P R</H2>

                    <p>
                        Diese Website nutzt Cookies, um bestmögliche Funktionalität bieten zu können.<br><br>

                        Durch den Zugriff auf diese Website, Ich bin damit einverstanden, dass diese Website meine eingereichten Informationen speichert, damit sie auf meine Anfrage antworten können.


                        <br><br>

                        <a style="color: green; text-decoration: underline;" target="_blank" href="https://eur-lex.europa.eu/legal-content/DE/TXT/HTML/?uri=CELEX:32016R0679&from=HR">Mehr erfahren</a>
                    </p>
                </div> 
            </div>


            <div style="height: 50px"></div>



        </div>



 -->












        <div class="holder-sadrzaja" style="width: 100%; justify-content: center; position: relative;
        width: 100%; min-height: 101vh; display: flex; flex-direction: column; justify-content: center; align-items: center; 

        background-image: url('<?php echo get_template_directory_uri(); ?>/munchen-bavaria.jpg');
                position: relative;


background-repeat: no-repeat;
background-position: center;
background-size: cover;
/*background-attachment: fixed;*/">


            <div class="div-overlay" style=""></div>



            <div style="justify-content: center; display: flex; flex-direction: column; align-items: center; width: 80%; position: absolute; z-index: 5;">

            	<h2 style="font-size: 35px" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="400">Team Green Pavlovic</h2>

    	        <p data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="500" style="border-left: 5px solid green; padding-left: 20px; line-height: 50px; font-size: 19px; color: white">
    	            Wir freuen uns, dass Sie den Weg auf unsere Homepage gefunden haben und begrüßen Sie herzlichst. 

    	            

    	            Unsere Aufgabe ist es, die Kundenerwartungen zu erfüllen: gleichbleibende gute Qualität und gleichbleibender guter
    	            Service, hervorragende Betreuung und bestmögliche Informationen. 

    	           

    	            Seit unser Unternehmen gegründet wurde,
    	            sehen wir es als unser vorrangiges Ziel, unsere Kunden zu 100% zufriedenzustellen.


    	            Eine besondere Auszeichnung und Freude ist für uns die Tatsache, dass ein Großteil unserer neuen Kunden auf Empfehlung von
    	            bestehenden Kunden den Weg zu uns findet.
    	        </p>
            </div>

<!-- 
        <div id="swiperLoadingID" class="swiper-container">



         
            <?php $images = get_field('swiper_loading');

                if( $images ): ?>

                    <div class="swiper-wrapper">

                        <?php foreach( $images as $image ): ?>

                            <div class="swiper-slide" style="background-image:url(<?php echo $image['url']; ?>)"></div>

                        <?php endforeach; ?>

                    </div>

            <?php endif; ?>


            <div class="swiper-pagination"></div>

            <div class="swiper-button-next" style="background-image: url(<?php echo get_template_directory_uri(); ?>/svg-strelice/right-strelica.svg);"></div>
            <div class="swiper-button-prev" style="background-image: url(<?php echo get_template_directory_uri(); ?>/svg-strelice/left-strelica.svg);"></div>
        </div>
 -->

		</div>













        <div id="grune-anchor" class="aos-grune-naslov" style="height: 70px"></div>


        <div class="naslov-grupa" data-aos="fade-up" data-aos-easing="ease-in-out">
            <h2>Grünanlagenservice</h2>
        </div>


        <div style="height: 50px"></div>


        <div class="holder-sadrzaja">
            


            <p data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="200">
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


            <div style="height: 50px"></div>
           


            <!-- START / GALLERY -->
            <?php $images = get_field('galeria_grune');

                if( $images ): ?>

                    <div class="slike2holder">

                        <?php foreach( $images as $image ): ?>

                           
                                <a data-fancybox="gallery" href="<?php echo $image['url']; ?>">

                                    <img data-aos="flip-up" data-aos-easing="ease-in-out" 
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


        </div>
















        <div style="height: 200px"></div>


        <div id="gebaude-anchor" class="aos-gebaude-naslov" style="height: 70px"></div>


        <div class="naslov-grupa" data-aos="fade-up" data-aos-easing="ease-in-out">
            <h2>Gebäudereinigung</h2>
        </div>


        <div style="height: 50px"></div>



        <div class="holder-sadrzaja">
          



            <p data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="200">
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

         <div style="height: 50px"></div>









            <!-- START / GALLERY -->
            <?php $images = get_field('galeria_gebaude');

                if( $images ): ?>

                    <div class="slike2holder">

                        <?php foreach( $images as $image ): ?>

                           
                                <a data-fancybox="gallery2" href="<?php echo $image['url']; ?>">

                                    <img data-aos="flip-up" data-aos-easing="ease-in-out"
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



        </div>












        <div style="height: 200px"></div>


        <div id="haus-anchor" class="aos-haus-naslov" style="height: 70px"></div>


        <div class="naslov-grupa" data-aos="fade-up" data-aos-easing="ease-in-out">
            <h2>Hausmeisterservice</h2>
        </div>


        <div style="height: 50px"></div>




        <div class="holder-sadrzaja">
          



            <p data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="200">
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

            <div style="height: 50px"></div>



            <!-- START / GALLERY -->
            <?php $images = get_field('galeria_haus');

                if( $images ): ?>

                    <div class="slike2holder">

                        <?php foreach( $images as $image ): ?>

                           
                                <a data-fancybox="gallery3" href="<?php echo $image['url']; ?>">

                                    <img data-aos="flip-up" data-aos-easing="ease-in-out"
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


        </div>
















        <div style="height: 200px"></div>


        <div id="winter-anchor" class="aos-winter-naslov" style="height: 70px"></div>


        <div class="naslov-grupa" data-aos="fade-up" data-aos-easing="ease-in-out">
            <h2>Winterdienst</h2>
        </div>


        <div style="height: 50px"></div>




        <div class="holder-sadrzaja">
          


    


            <p data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="200">
                Die Sicherheit für Sie bei Eisbildung und Schneefall steht für uns an erster Stelle. <br><br>

                Sobald die kalte Jahreszeit beginnt sorgen wir dafür, dass Sie sicher zu Ihrem Wohnhaus oder Objekt gelangen.
            </p>


            <div style="height: 50px"></div>


            <!-- START / GALLERY -->
            <?php $images = get_field('galeria_winter');

                if( $images ): ?>

                    <div class="slike2holder">

                        <?php foreach( $images as $image ): ?>

                           
                                <a data-fancybox="gallery4" href="<?php echo $image['url']; ?>">

                                    <img data-aos="flip-up" data-aos-easing="ease-in-out" 
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


        </div>












        <div style="height: 200px"></div>


        <div id="tief-anchor" class="aos-tief-naslov" style="height: 70px"></div>


        <div class="naslov-grupa" data-aos="fade-up" data-aos-easing="ease-in-out">
            <h2>Tiefgaragenpflege</h2>
        </div>


        <div style="height: 50px"></div>





        <div class="holder-sadrzaja">
          


        


            <p data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="200">
                Neben der regelmäßigen Kontrolle, Reinigung und technischen Betreuung der Tiefgarage, sorgen wir für die
                Einhaltung der Sicherheitsbestimmungen, sowie die nötige Wartung und führen kleine Reparaturen durch.<br><br>

                - Reinigung mit Hochdruckreiniger<br><br>
                - Reinigung des Tiefgaragentores<br><br>
                - Technische Überwachung<br><br>
                - Kehren der Tiefgarage
            </p>


            <div style="height: 50px"></div>



<!-- 
            <video width="100%" controls style="border-radius: 20px; border: 1px solid green;">
              <source src="<?php echo get_template_directory_uri(); ?>/viddeoo.mp4" type="video/mp4">
                           Your browser does not support HTML5 video.
            </video>

 -->

            
            <?php $images = get_field('galeria_tief');

                if( $images ): ?>

                    <div class="slike2holder">

                        <?php foreach( $images as $image ): ?>

                           
                                <a data-fancybox="galleryTief" href="<?php echo $image['url']; ?>">

                                    <img data-aos="fade-up" data-aos-easing="ease-in-out"
                                    class="slika-thumb" 
                                    style="" 
                                    src="<?php echo $image['url']; ?>" 
                                    alt="<?php echo $image['alt']; ?>" 

                                    />

                                </a>


                        <?php endforeach; ?>

                    </div>

            <?php endif; ?>




<!--             <video width="50%" controls muted style="border-radius: 20px; border: 1px solid green;">
              <source src="<?php echo get_template_directory_uri(); ?>/tief.mp4" type="video/mp4">
                           Your browser does not support HTML5 video.
            </video> -->

            
<!--             <?php $images = get_field('galeria_winter_hiden');

                if( $images ): ?>

                        <?php foreach( $images as $image ): ?>

                           
                            <a data-fancybox="gallery4" href="<?php echo $image['url']; ?>"></a>


                        <?php endforeach; ?>

            <?php endif; ?> -->


        </div>











        <div style="height: 200px"></div>


        <div id="kontakt-anchor" class="aos-kontakt-naslov" style="height: 70px"></div>


        <div class="naslov-grupa" data-aos="fade-up" data-aos-easing="ease-in-out">
            <h2>Kontaktieren Sie uns</h2>
        </div>


        <!-- <div style="height: 50px"></div> -->



        <div class="holder-sadrzaja" style="width: 100%; position: relative;">
            

        



            <!-- <div style="height: 20px"></div> -->



            

            <div data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="200" class="forma-desktop">

                
                    <?php echo do_shortcode('[wpforms id="8" title="false" description="false"]'); ?>
                    <div style="height: 35px; width: 100%;"></div>

                    <a style="font-size: 12px; color: green; text-decoration: underline" href="https://teamgreen-pavlovic.de/dsgvo/" target="_blank">DSGVO mehr erfahren</a>


                    <p style="font-size: 12px;">
                        Panorama von München - Image by 
                    </p>
               
                    <a style="font-size: 12px;" href="https://pixabay.com/users/designerpoint-554875/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1558710">Michael Siebert</a> 
                    <a style="font-size: 12px;" href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1558710">from Pixabay</a>
                        
                    <div style="height: 35px; width: 100%;"></div>
                    <p style="font-size: 12px">Web Design:</p>

                    <a href="https://www.facebook.com/3DwebsiteDesign" onclick="ga(‘send’, ‘event’, [categoryfb], [action3dlink], [label3dlink], [eventValue]);" style="font-size: 13px; color: green" target="_blank">facebook.com/3DwebsiteDesign</a>


            </div>


            <div class="jumbo-desktop" data-aos="flip-up" data-aos-easing="ease-in-out" data-aos-delay="600">
            	<img class="jumbo-img" src="<?php the_field('jumbo_plakat'); ?>">

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



        <!-- <div style="height: 50px"></div> -->

        


	</div>





<style type="text/css">


[data-aos="logo-move"] {
    transform: translateY(0);
    opacity: 1;
    /*transition-property: transform;*/
    transition: all;

}

[data-aos="logo-move"].aos-animate {
    transform: translateY(-100px);
    opacity: 0;
}



[data-aos="overleeej"] {
opacity: 0;

 	transition-property: opacity;
}

[data-aos="overleeej"].aos-animate {

opacity: 1;
}






[data-aos="overleeej-remove"] {
opacity: 1;

 	transition-property: opacity;
}

[data-aos="overleeej-remove"].aos-animate {

opacity: 0;
}





.anchor-class {
	width: 100%;
	height: 100%;
	position: absolute;
	z-index: 10;
}
</style>



	<div class="right-menu" data-aos="fade-left" data-aos-easing="ease-in-out" data-aos-delay="250">



		<div class="naslov-iznad">


			<div class="pos-absolute" data-aos-anchor=".aos-grune-naslov" data-aos="logo-move" data-aos-easing="ease-in-out" data-aos-offset="580" style="width: 100%; height: 100%">
			    <div class="logo-regular-menu" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="700" style="text-align: center;">

			       <!-- <img src="<?php echo get_template_directory_uri(); ?>/munich-img.jpg"> -->

			        <!--  <div style="height: 15px"></div> -->
			        <!-- <h2>Willkomen</h2> -->
			    </div>
			</div>




			<div class="pos-absolute" data-aos-anchor=".aos-gebaude-naslov" data-aos="logo-move" data-aos-easing="ease-in-out" data-aos-offset="600">
				<h2 data-aos-anchor=".aos-grune-naslov" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-offset="600">Grünanlagenservice</h2>
			</div>



			<div class="pos-absolute" data-aos-anchor=".aos-haus-naslov" data-aos="logo-move" data-aos-easing="ease-in-out" data-aos-offset="600">
				<h2 data-aos-anchor=".aos-gebaude-naslov" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-offset="600">Gebäudereinigung</h2>
			</div>




			<div class="pos-absolute" data-aos-anchor=".aos-winter-naslov" data-aos="logo-move" data-aos-easing="ease-in-out" data-aos-offset="600">
				<h2 data-aos-anchor=".aos-haus-naslov" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-offset="600">Hausmeisterservice</h2>
			</div>



			<div class="pos-absolute" data-aos-anchor=".aos-tief-naslov" data-aos="logo-move" data-aos-easing="ease-in-out" data-aos-offset="600">
				<h2 data-aos-anchor=".aos-winter-naslov" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-offset="600">Winterdienst</h2>
			</div>



			<div class="pos-absolute" data-aos-anchor=".aos-kontakt-naslov" data-aos="logo-move" data-aos-easing="ease-in-out" data-aos-offset="600">
				<h2 data-aos-anchor=".aos-tief-naslov" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-offset="600">Tiefgaragenpflege</h2>
			</div>


			<!-- <div class="pos-absolute" data-aos-anchor=".aos-kontakt-naslov" data-aos="logo-move" data-aos-easing="ease-in-out" data-aos-offset="700"> -->
				<h2 data-aos-anchor=".aos-kontakt-naslov" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-offset="600">Kontakt</h2>
			<!-- </div> -->




		</div>








		<div class="gumbi-holder">

		
			<div class="jedan-gumb bg-slika-grune" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="800">
				<a href="#grune-anchor" class="anchor-class"></a>

				<div data-aos-anchor=".aos-gebaude-naslov" data-aos="overleeej-remove" data-aos-easing="ease-in-out" data-aos-offset="600">
					<div class="gumb-overlaj" data-aos-anchor=".aos-grune-naslov" data-aos="overleeej" data-aos-easing="ease-in-out" data-aos-offset="600"></div>
				</div>

				<div class="gumb-txt">Grünanlagenservice</div>
			</div>
		

			<div class="jedan-gumb bg-slika-gebaude" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="900">
				<a href="#gebaude-anchor" class="anchor-class"></a>

				<div data-aos-anchor=".aos-haus-naslov" data-aos="overleeej-remove" data-aos-easing="ease-in-out" data-aos-offset="600">
					<div class="gumb-overlaj" data-aos-anchor=".aos-gebaude-naslov" data-aos="overleeej" data-aos-easing="ease-in-out" data-aos-offset="600"></div>
				</div>

				<div class="gumb-txt">Gebäudereinigung</div>

			</div>

		</div>







		<div class="gumbi-holder">
			
			<div class="jedan-gumb bg-slika-haus" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="1000">
				<a href="#haus-anchor" class="anchor-class"></a>

				<div data-aos-anchor=".aos-winter-naslov" data-aos="overleeej-remove" data-aos-easing="ease-in-out" data-aos-offset="600">
					<div class="gumb-overlaj" data-aos-anchor=".aos-haus-naslov" data-aos="overleeej" data-aos-easing="ease-in-out" data-aos-offset="600"></div>
				</div>

				<div class="gumb-txt">Hausmeisterservice</div>
			</div>

			<div class="jedan-gumb bg-slika-winter" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="1100">
				<a href="#winter-anchor" class="anchor-class"></a>

				<div data-aos-anchor=".aos-tief-naslov" data-aos="overleeej-remove" data-aos-easing="ease-in-out" data-aos-offset="600">
					<div class="gumb-overlaj" data-aos-anchor=".aos-winter-naslov" data-aos="overleeej" data-aos-easing="ease-in-out" data-aos-offset="600"></div>
				</div>

				<div class="gumb-txt">Winterdienst</div>

			</div>

		</div>






		<div class="gumbi-holder">
			
			<div class="jedan-gumb bg-slika-tief" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="1200">
				<a href="#tief-anchor" class="anchor-class"></a>

				<div data-aos-anchor=".aos-kontakt-naslov" data-aos="overleeej-remove" data-aos-easing="ease-in-out" data-aos-offset="600">
					<div class="gumb-overlaj" data-aos-anchor=".aos-tief-naslov" data-aos="overleeej" data-aos-easing="ease-in-out" data-aos-offset="600"></div>
				</div>

				<div class="gumb-txt">Tiefgaragenpflege</div>
			</div>

			<div class="jedan-gumb bg-slika-kontakt" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="1300">
				<a href="#kontakt-anchor" class="anchor-class"></a>

				<!-- <div data-aos-anchor=".aos-tief-naslov" data-aos="overleeej-remove" data-aos-easing="ease-in-out" data-aos-offset="700"> -->
					<div class="gumb-overlaj" data-aos-anchor=".aos-kontakt-naslov" data-aos="overleeej" data-aos-easing="ease-in-out" data-aos-offset="600"></div>
				<!-- </div> -->

				<div class="gumb-txt">Kontakt</div>

			</div>

		</div>





	</div>



</div>






        <a id="goUp" href="#goUpAnchor" class="noSelect" data-aos-anchor=".aos-grune-naslov" data-aos="fade-right" data-aos-easing="ease-out-back" data-aos-offset="700" data-aos-delay="1000">
            
                <img src="<?php echo get_template_directory_uri(); ?>/arrow-up.svg">
            
        </a>







<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/swiper-master/dist/js/swiper.min.js"></script>


<script type="text/javascript">




    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });





	    
    window.addEventListener('DOMContentLoaded', (event) => {
        var dskt = document.getElementById("desktopYN");

        dskt.classList.add("yes-desktopen");
        // dskt.classList.remove("no-desktope");

    });



    AOS.init();



    // SWIPER NA LOADING SCREEN-U

    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        initialSlide: 2,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows : true,
        },
        pagination: {
            el: '.swiper-pagination',
        },
    });




</script>



<?php get_footer(); ?>