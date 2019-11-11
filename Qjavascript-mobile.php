<script type="text/javascript">




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



        // KADA SE DOM ELEMENTI LOUDAJU

        // document.addEventListener('DOMContentLoaded', function() {



            // OVO JE LOADING SCREEN - 60 SEC

            // setTimeout(function(){

            //     var loadding = document.getElementById("loadingScr");
            //     loadding.classList.remove("loadingScreen");
            //     loadding.classList.add("removeLoading");

            // }, 60000);






                
                // MUZIKA

                // var audioPlay = document.getElementById("audiomp3");
                // audioPlay.play();







/////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////// LOGO - ULAZ / JUMBO ///////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////////















            // LOGO KLIK - GRUNE

            document.querySelector('#logoNavigacijaGrune').addEventListener('click', function (e) {
              
                var kamRig = document.querySelector('#kamRig');
          
                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navGrun',
                translateY: 102,
                duration: 1000
                });

                // SAKRI GRUNANLAGE MODAL
                anime({
                targets: '.modal',
                translateX: -450,
                delay: 0,
                duration: 1000
                });


                // POKAŽI NAVIGACIJU ULAZ
                anime({
                targets: '#navUlaz',
                translateY: 0,
                duration: 1000,
                delay: 2500,
                easing: 'easeOutQuad',

                });

                kamRig.setAttribute('alongpath', {
                    curve: '#trackGrun2Start',
                    triggerRadius: 2.2,
                    delay: 0,
                    dur: 3000,

                });

                kamRig.emit('reset-KamRig-rot');

            });










             // LOGO KLIK - GEBAUDE

            document.querySelector('#logoNavigacijaGebaude').addEventListener('click', function (e) {
              
                var kamRig = document.querySelector('#kamRig');
          
                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navGebaude',
                translateY: 102,
                duration: 1000
                });

                // SAKRI GRUNANLAGE MODAL
                anime({
                targets: '.modalGebaude',
                translateX: -450,
                delay: 0,
                duration: 1000
                });


                // POKAŽI NAVIGACIJU ULAZ
                anime({
                targets: '#navUlaz',
                translateY: 0,
                duration: 1000,
                delay: 2500,
                easing: 'easeOutQuad',

                });

                kamRig.setAttribute('alongpath', {
                    curve: '#trackGebaude2Start',
                    triggerRadius: 2.2,
                    delay: 0,
                    dur: 3000,

                });

                kamRig.emit('reset-KamRig-rot');

            });















             // LOGO KLIK - HAUS

            document.querySelector('#logoNavigacijaHaus').addEventListener('click', function (e) {
              
                var kamRig = document.querySelector('#kamRig');
          
                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navHaus',
                translateY: 102,
                duration: 1000
                });

                // SAKRI GRUNANLAGE MODAL
                anime({
                targets: '.modalHaus',
                translateX: 450,
                delay: 0,
                duration: 1000
                });


                // POKAŽI NAVIGACIJU ULAZ
                anime({
                targets: '#navUlaz',
                translateY: 0,
                duration: 1000,
                delay: 2500,
                easing: 'easeOutQuad',

                });

                kamRig.setAttribute('alongpath', {
                    curve: '#trackHaus2Start',
                    triggerRadius: 2.2,
                    delay: 0,
                    dur: 3000,

                });

                kamRig.emit('reset-KamRig-rot');

            });








             // LOGO KLIK - WINTER

            document.querySelector('#logoNavigacijaWinter').addEventListener('click', function (e) {
              
                var kamRig = document.querySelector('#kamRig');
          
                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navWinter',
                translateY: 102,
                duration: 1000
                });

                // SAKRI GRUNANLAGE MODAL
                anime({
                targets: '.modalWinter',
                translateX: -450,
                delay: 0,
                duration: 1000
                });


                // POKAŽI NAVIGACIJU ULAZ
                anime({
                targets: '#navUlaz',
                translateY: 0,
                duration: 1000,
                delay: 2500,
                easing: 'easeOutQuad',

                });

                kamRig.setAttribute('alongpath', {
                    curve: '#trackWinter2Start',
                    triggerRadius: 2.2,
                    delay: 0,
                    dur: 3000,

                });

                kamRig.emit('reset-KamRig-rot');

            });












             // LOGO KLIK - HAUS

            document.querySelector('#logoNavigacijaKontakt').addEventListener('click', function (e) {
              
                var kamRig = document.querySelector('#kamRig');
          
                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navKontakt',
                translateY: 102,
                duration: 1000
                });

                // SAKRI GRUNANLAGE MODAL
                anime({
                targets: '.modalKontakt',
                translateX: 450,
                delay: 0,
                duration: 1000
                });


                // POKAŽI NAVIGACIJU ULAZ
                anime({
                targets: '#navUlaz',
                translateY: 0,
                duration: 1000,
                delay: 2500,
                easing: 'easeOutQuad',
                
                });

                kamRig.setAttribute('alongpath', {
                    curve: '#trackKontakt2Start',
                    triggerRadius: 2.2,
                    delay: 0,
                    dur: 3000,
                    
                });

                kamRig.emit('reset-KamRig-rot');

            });











	
	document.querySelector('#logo3dUlaz').addEventListener('click', function (e) {
		
		var logoUlaz = document.querySelector('#logo3dUlaz');

	    logoUlaz.emit('logoNaUlazu-rot');

	});

	
	document.querySelector('#logo3dJumbo').addEventListener('click', function (e) {
		
		var logoJumbo = document.querySelector('#logo3dJumbo');

	    logoJumbo.emit('logoNaJambu-rot');

	});






/////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////// NAVIGACIJA - FROM START ///////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////////




            // NAVIGACIJA ULAZ - GRUNANLAGE GUMB KLIK

            document.querySelector('#grunanlageUlaz').addEventListener('click', function (e) {

                // openFullscreen();
               
              
                var kamRig = document.querySelector('#kamRig');
                var kamera = document.querySelector('#main-camera');

                
                // kamera.emit('kamera-reset0');


                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navUlaz',
                translateY: 102,
                duration: 1500,
                easing: 'easeOutQuad',
                });




                kamRig.setAttribute('alongpath', {
                    curve: '#trackgumbFromStart2Grune',
                    triggerRadius: 2.2,
                    delay: 0,
                    dur: 20000
                
                });


                var curvepoints = document.querySelectorAll("#trackgumbFromStart2Grune > a-curve-point");

                for (var i = 0; i < curvepoints.length; i++) {

                    curvepoints[i].addEventListener("alongpath-trigger-activated", function(e){

                        let id = e.target.id;

                        switch(id) {


                            case "curveGrun1":

                                kamRig.emit('curveGrune1-rot');
                                break;


                            case "curveGrun2":

                                kamRig.emit('curveGrune2-rot'); 
                                break;


                            case "curveGrun3":
                              
                                kamRig.emit('curveGrune3-rot');
                                break;


                            case "curveGrun4":
                                
                                kamRig.emit('curveGrune4-rot');
                                break;

                            case "curveGrun5":

                                kamRig.emit('curveGrune5-rot');
                                break;

                            case "curveGrun6":

                                kamRig.emit('curveGrune6-rot');
                                break;
                            case "curveGrun7":

                                kamRig.emit('curveGrune7-rot');
                                break;
                            case "curveGrun8":

                                kamRig.emit('curveGrune8-rot');
                                break;
                            case "curveGrun9":

                                kamRig.emit('curveGrune9-rot');
                                break;

                            case "curveGrun10":

                                kamRig.emit('curveGrune10-rot');
                                break;

                        }
                    });
                }


                kamRig.emit('curveGrune11-rot');


                // POKAŽI NAVIGACIJU GRUNANLAGE
                anime({
                targets: '#navGrun',
                translateY: -102,
                duration: 1000,
                delay: 21500,
                easing: 'easeOutQuad',
                });

                // POKAŽI GRUNANLAGE MODAL
                anime({
                targets: '.modal',
                translateX: 450,
                delay: 22000,
                duration: 1000,
                easing: 'easeOutQuad',
                });


                // EASING POSITION - STOP PATH

                // kamRig.emit('curveKontakt6-rot-mobile');
 


            });





















            // NAVIGACIJA ULAZ - GEBAUDE GUMB KLIK


            document.querySelector('#gebaudereinigungUlaz').addEventListener('click', function (e) {

                // openFullscreen();
              
                var kamRig = document.querySelector('#kamRig');
                var kamera = document.querySelector('#main-camera');

                
                // kamera.emit('kamera-reset0');


                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navUlaz',
                translateY: 102,
                duration: 1500,
                easing: 'easeOutQuad',
                });




                kamRig.setAttribute('alongpath', {
                    curve: '#trackgumbFromStart2Gebaude',
                    triggerRadius: 4,
                    delay: 0,
                    dur: 11000
                
                });


                var curvepoints = document.querySelectorAll("#trackgumbFromStart2Gebaude > a-curve-point");

                for (var i = 0; i < curvepoints.length; i++) {

                    curvepoints[i].addEventListener("alongpath-trigger-activated", function(e){

                        let id = e.target.id;

                        switch(id) {


                            case "curveGebaude0":

                                break;


                            case "curveGebaude1":

                                kamRig.emit('curveGebaude-rot-1'); 
                                break;


                            case "curveGebaude2":
                                
                                kamRig.emit('curveGebaude-rot-2'); 
                                break;

                            case "curveGebaude3":

                                kamRig.emit('curveGebaude-rot-3'); 
                                break;


                            case "curveGebaude4":

                                kamRig.emit('curveGebaude-rot-4'); 
                                break;


                            case "curveGebaude5":

                                kamRig.emit('curveGebaude-rot-5-mobile'); 
                                break;


                        }
                    });
                }

                
                // EASING POSITION - STOP PATH
                kamRig.emit('GebaudeEasing-pos');


                anime({
                  targets: '.modalGebaude',
                  translateX: 450,
                  delay: 13500,
                  duration: 1000,
                  easing: 'easeOutQuad',
                });





                anime({
                  targets: '#navGebaude',
                  translateY: -102,
                  duration: 1000,
                  delay: 13000,
                  easing: 'easeOutQuad',
                });

              



            });















            // NAVIGACIJA ULAZ - HAUS GUMB KLIK

            document.querySelector('#fromStart2Haus').addEventListener('click', function (e) {

                // openFullscreen();
              
                var kamRig = document.querySelector('#kamRig');
                var kamera = document.querySelector('#main-camera');

                
                // kamera.emit('kamera-reset0');


                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navUlaz',
                translateY: 102,
                duration: 1500,
                easing: 'easeOutQuad',
                });




                kamRig.setAttribute('alongpath', {
                    curve: '#trackgumbFromStart2Haus',
                    triggerRadius: 2.2,
                    delay: 0,
                    dur: 7000
                
                });


                var curvepoints = document.querySelectorAll("#trackgumbFromStart2Haus > a-curve-point");

                for (var i = 0; i < curvepoints.length; i++) {

                    curvepoints[i].addEventListener("alongpath-trigger-activated", function(e){

                        let id = e.target.id;

                        switch(id) {



                            case "curveHaus0":

                                kamRig.emit('curveStart2haus-rot-0-mobile');
                                break;


                            case "curveHaus1":

                                // kamRig.emit('curveGrune2-rot'); 
                                break;


                        }
                    });
                }


                kamRig.emit('start2HausEasing-pos-mobile');


                // POKAŽI NAVIGACIJU GRUNANLAGE
                anime({
                targets: '#navHaus',
                translateY: -102,
                duration: 1000,
                delay: 9000,
                easing: 'easeOutQuad',
                });

                // POKAŽI GRUNANLAGE MODAL
                anime({
                targets: '.modalHaus',
                translateX: -450,
                delay: 9500,
                duration: 1000,
                easing: 'easeOutQuad',
                });


 


            });
















            // NAVIGACIJA ULAZ - WINTER GUMB KLIK

            document.querySelector('#gumbFromStart2Winter').addEventListener('click', function (e) {

                // openFullscreen();
              
                var kamRig = document.querySelector('#kamRig'); 




                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navUlaz',
                translateY: 102,
                duration: 1500,
                easing: 'easeOutQuad',
                });



              


                kamRig.setAttribute('alongpath', {
                    curve: '#trackgumbFromStart2Winter',
                    triggerRadius: 5,
                    delay: 0,
                    dur: 20000
                });




                var curvepoints = document.querySelectorAll("#trackgumbFromStart2Winter > a-curve-point");


                for (var i = 0; i < curvepoints.length; i++) {

                    curvepoints[i].addEventListener("alongpath-trigger-activated", function(e){

                        let id = e.target.id;

                        switch(id) {


                            case "curveWinter1":

                                break;


                            case "curveWinter2":

                                kamRig.emit('curveWinter2-rot');
                                break;


                            case "curveWinter3":
                              
                                kamRig.emit('curveWinter3-rot');
                                break;


                            case "curveWinter4":
                                kamRig.emit('curveWinter4-rot');
                                break;

                            case "curveWinter5":

                                kamRig.emit('curveWinter5-rot');
                                break;

                            case "curveWinter6":

                                kamRig.emit('curveWinter6-rot');
                                break;

                            case "curveWinter7":

                                kamRig.emit('curveWinter7-rot');
                                break;

                            case "curveWinter8":

                                kamRig.emit('curveWinter8-rot');
                                break;
                        }
                    });
                }


                // EASING - PATH END

                kamRig.emit('curveWinter9-rot');

                var kamera = document.querySelector('#main-camera'); 





                anime({
                  targets: '#navWinter',
                  translateY: -102,
                  duration: 1000,
                  delay: 20000,
                  easing: 'easeOutQuad',
                });



                anime({
                  targets: '.modalWinter',
                  translateX: 450,
                  delay: 20500,
                  duration: 1000,
                  easing: 'easeOutQuad',
                });
   



          });






















            // NAVIGACIJA ULAZ - KONTAKT GUMB KLIK

            document.querySelector('#gumbFromStart2Kontakt').addEventListener('click', function (e) {

                // openFullscreen();
              
                var kamRig = document.querySelector('#kamRig'); 



                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navUlaz',
                translateY: 102,
                duration: 1500,
                easing: 'easeOutQuad',
                });




                kamRig.setAttribute('alongpath', {
                    curve: '#trackgumbFromStart2Kontakt',
                    triggerRadius: 5,
                    delay: 0,
                    dur: 10000
                
                });


                var curvepoints = document.querySelectorAll("#trackgumbFromStart2Kontakt > a-curve-point");

                for (var i = 0; i < curvepoints.length; i++) {

                    curvepoints[i].addEventListener("alongpath-trigger-activated", function(e){

                        let id = e.target.id;

                        switch(id) {


                            case "curveKontakt1":

                                break;


                            case "curveKontakt2":

                                kamRig.emit('curveKontakt2-rot');
                                break;


                            case "curveKontakt3":
                              
                                kamRig.emit('curveKontakt3-rot');
                                break;


                            case "curveKontakt4":
                                kamRig.emit('curveKontakt4-rot');
                                break;

                            case "curveKontakt5":

                                kamRig.emit('curveKontakt5-rot');
                                break;

                            case "curveKontakt6":

                              
                                break;
                        }
                    });
                }




                anime({
                  targets: '#navKontakt',
                  translateY: -102,
                  duration: 1000,
                  delay: 10000,
                  easing: 'easeOutQuad',
                });



                // POKAŽI GRUNANLAGE MODAL
                anime({
                targets: '.modalKontakt',
                translateX: -450,
                delay: 10500,
                duration: 1000,
                easing: 'easeOutQuad',
                });



                // EASING POSITION - STOP PATH

                kamRig.emit('curveKontakt6-rot-mobile');
 
                


            });









































/////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////// NAVIGACIJA - FROM GRUNANLAGE //////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////////









            // GUMB KLIK - FROM GRUNANLAGE 2 GEBAUDE

            document.querySelector('#fromGrun2Gebaude').addEventListener('click', function (e) {

              
                var kamRig = document.querySelector('#kamRig');
                var kamera = document.querySelector('#main-camera');

                kamRig.emit('fromGruneFlyUp');
                
                


                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navGrun',
                translateY: 102,
                duration: 1000
                });

                // SAKRI GRUNANLAGE MODAL
                anime({
                targets: '.modal',
                translateX: -450,
                delay: 0,
                duration: 1000
                });




            setTimeout(function(){


                kamRig.setAttribute('alongpath', {
                    curve: '#trackgumbFromGrune2Gebaude',
                    triggerRadius: 4,
                    delay: 0,
                    dur: 11000
                
                });

            }, 1000);





                var curvepoints = document.querySelectorAll("#trackgumbFromGrune2Gebaude > a-curve-point");

                for (var i = 0; i < curvepoints.length; i++) {

                    curvepoints[i].addEventListener("alongpath-trigger-activated", function(e){

                        let id = e.target.id;

                        switch(id) {


                            case "curveGrun2Gebaude_1":

                                break;


                            case "curveGrun2Gebaude_2":

                                kamRig.emit('curveGebaude-rot-1'); 
                                break;


                            case "curveGrun2Gebaude_3":
                                
                                kamRig.emit('curveGebaude-rot-2'); 
                                break;

                            case "curveGrun2Gebaude_4":

                                kamRig.emit('curveGebaude-rot-3'); 
                                break;


                            case "curveGrun2Gebaude_5":

                                kamRig.emit('curveGebaude-rot-4'); 
                                break;


                            case "curveGrun2Gebaude_6":

                                kamRig.emit('curveGebaude-rot-5-mobile'); 
                                break;


                        }
                    });
                }

                kamRig.emit('GebaudeEasingGrune-pos');


                anime({
                  targets: '.modalGebaude',
                  translateX: 450,
                  delay: 13500,
                  duration: 1000,
                  easing: 'easeOutQuad',

                });



                anime({
                  targets: '#navGebaude',
                  translateY: -102,
                  duration: 1000,
                  delay: 13000,
                  easing: 'easeOutQuad',

                });




            });



















            // NAVIGACIJA GRUNE - HAUS GUMB KLIK

            document.querySelector('#fromGrun2Haus').addEventListener('click', function (e) {

                
              
                var kamRig = document.querySelector('#kamRig');
                var kamera = document.querySelector('#main-camera');

                kamRig.emit('fromGruneFlyUp');


                
                // kamera.emit('kamera-reset0');


                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navGrun',
                translateY: 102,
                duration: 1500
                });



                // SAKRI GRUNANLAGE MODAL
                anime({
                targets: '.modal',
                translateX: -450,
                delay: 0,
                duration: 1000
                });





            setTimeout(function(){


                kamRig.setAttribute('alongpath', {
                    curve: '#trackgumbFromGrune2Haus',
                    triggerRadius: 2.2,
                    delay: 0,
                    dur: 7000
                
                });

            }, 1000);







                var curvepoints = document.querySelectorAll("#trackgumbFromGrune2Haus > a-curve-point");

                for (var i = 0; i < curvepoints.length; i++) {

                    curvepoints[i].addEventListener("alongpath-trigger-activated", function(e){

                        let id = e.target.id;

                        switch(id) {



                            case "curveGrune2Haus0":

                                kamRig.emit('curveStart2haus-rot-0-mobile');
                                break;


                            case "curveGrune2Haus1":

                                // kamRig.emit('curveGrune2-rot'); 
                                break;

                            case "curveGrune2Haus2":

                                // kamRig.emit('curveGrune2-rot'); 
                                break;


                        }
                    });
                }


                kamRig.emit('grune2HausEasing-pos-mobile');


                // POKAŽI NAVIGACIJU GRUNANLAGE
                anime({
                targets: '#navHaus',
                translateY: -102,
                duration: 1000,
                delay: 9000,
                easing: 'easeOutQuad',

                });

                // POKAŽI GRUNANLAGE MODAL
                anime({
                targets: '.modalHaus',
                translateX: -450,
                delay: 9500,
                duration: 1000,
                easing: 'easeOutQuad',

                });



            });




















            // GUMB KLIK - GRUNE 2 WINTER

            document.querySelector('#fromGrun2Winter').addEventListener('click', function (e) {

              
              
                var kamRig = document.querySelector('#kamRig'); 

                kamRig.emit('fromGruneFlyUp');




                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navGrun',
                translateY: 102,
                duration: 1000
                });

                // SAKRI GRUNANLAGE MODAL
                anime({
                targets: '.modal',
                translateX: -450,
                delay: 0,
                duration: 1000
                });




            setTimeout(function(){



                kamRig.setAttribute('alongpath', {
                    curve: '#trackgumbFromGrune2Winter',
                    triggerRadius: 5,
                    delay: 0,
                    dur: 20000
                });


            }, 1000);



              





                var curvepoints = document.querySelectorAll("#trackgumbFromGrune2Winter > a-curve-point");


                for (var i = 0; i < curvepoints.length; i++) {

                    curvepoints[i].addEventListener("alongpath-trigger-activated", function(e){

                        let id = e.target.id;

                        switch(id) {


                            case "curveGrun2Winter_1":
                                kamRig.emit('curveGrune2Winter-rot-1');
                                break;


                            case "curveGrun2Winter_2":

                                kamRig.emit('curveGrune2Winter-rot-2');
                                break;


                            case "curveGrun2Winter_3":
                              
                                kamRig.emit('curveGrune2Winter-rot-3');
                                break;


                            case "curveGrun2Winter_4":
                                kamRig.emit('curveGrune2Winter-rot-4');
                                break;


                            case "curveGrun2Winter_5":


                                kamRig.emit('curveGrune2Winter-rot-5');
                                // kamRig.emit('curveWinter5-rot');
                                break;

                            case "curveGrun2Winter_6":

                                kamRig.emit('curveWinter6-rot');
                                break;

                            case "curveGrun2Winter_7":

                                kamRig.emit('curveWinter7-rot');
                                break;

                            case "curveGrun2Winter_8":

                                kamRig.emit('curveWinter8-rot');
                                break;
                        }
                    });
                }


                // EASING - PATH END

                kamRig.emit('WinterEasingFromGrune-pos');

                var kamera = document.querySelector('#main-camera'); 





                anime({
                  targets: '#navWinter',
                  translateY: -102,
                  duration: 1000,
                  delay: 21500,
                  easing: 'easeOutQuad',

                });



                anime({
                  targets: '.modalWinter',
                  translateX: 450,
                  delay: 22000,
                  duration: 1000,
                  easing: 'easeOutQuad',

                });




          });


















            // GUMB KLIK - GRUNE 2 KONTAKT

            document.querySelector('#fromGrun2Kontakt').addEventListener('click', function (e) {

                
              
                var kamRig = document.querySelector('#kamRig'); 

                kamRig.emit('fromGruneFlyUp');



                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navGrun',
                translateY: 102,
                duration: 1500
                });


                // SAKRI GRUNANLAGE MODAL
                anime({
                targets: '.modal',
                translateX: -450,
                delay: 0,
                duration: 1000
                });




            setTimeout(function(){



                kamRig.setAttribute('alongpath', {
                    curve: '#trackgumbFromGrune2Kontakt',
                    triggerRadius: 5,
                    delay: 0,
                    dur: 10000
                
                });

            }, 1000);









                var curvepoints = document.querySelectorAll("#trackgumbFromGrune2Kontakt > a-curve-point");

                for (var i = 0; i < curvepoints.length; i++) {

                    curvepoints[i].addEventListener("alongpath-trigger-activated", function(e){

                        let id = e.target.id;

                        switch(id) {


                            case "curveGrune2Kontakt1":

                                kamRig.emit('curveGrune2Kontakt-rot-1');
                                break;


                            case "curveGrune2Kontakt2":

                                kamRig.emit('curveGrune2Kontakt-rot-2');
                                break;


                            case "curveGrune2Kontakt3":
                              
                                kamRig.emit('curveKontakt3-rot');
                                break;


                            case "curveGrune2Kontakt4":
                                kamRig.emit('curveKontakt4-rot');
                                break;

                            case "curveGrune2Kontakt5":

                                kamRig.emit('curveKontakt5-rot');
                                break;

                            case "curveGrune2Kontakt6":

                              
                                break;
                        }
                    });
                }




                anime({
                  targets: '#navKontakt',
                  translateY: -102,
                  duration: 1000,
                  delay: 10500,
                  easing: 'easeOutQuad',

                });



                // POKAŽI GRUNANLAGE MODAL
                anime({
                targets: '.modalKontakt',
                translateX: -450,
                delay: 11000,
                duration: 1000,
                easing: 'easeOutQuad',

                });


                // EASING POSITION - STOP PATH

                kamRig.emit('curveGrune2KontaktEasingMobile');
 
                


            });


























/////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////// NAVIGACIJA - FROM GEBAUDE /////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////////








            // GUMB KLIK - GEBAUDE 2 GRUNE

            document.querySelector('#fromGebaude2Grun').addEventListener('click', function (e) {

              
                var kamRig = document.querySelector('#kamRig');
                var kamera = document.querySelector('#main-camera');

                
                // kamera.emit('kamera-reset0');


                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navGebaude',
                translateY: 102,
                duration: 1500
                });


                // SAKRI GRUNANLAGE MODAL
                anime({
                targets: '.modalGebaude',
                translateX: -450,
                delay: 0,
                duration: 1000
                });






                kamRig.setAttribute('alongpath', {
                    curve: '#trackgumbFromGebaude2Grune',
                    triggerRadius: 2.2,
                    delay: 0,
                    dur: 20000
                
                });


  







                var curvepoints = document.querySelectorAll("#trackgumbFromGebaude2Grune > a-curve-point");

                for (var i = 0; i < curvepoints.length; i++) {

                    curvepoints[i].addEventListener("alongpath-trigger-activated", function(e){

                        let id = e.target.id;

                        switch(id) {


                            case "curveGebaude2Grun1":

                                kamRig.emit('curveGebaude2GruneRota-1');
                                break;


                            case "curveGebaude2Grun2":

                                // kamRig.emit('curveGrune2-rot'); 
                                break;


                            case "curveGebaude2Grun3":
                              
                                kamRig.emit('curveGrune3-rot');
                                break;


                            case "curveGebaude2Grun4":
                                
                                kamRig.emit('curveGrune4-rot');
                                break;

                            case "curveGebaude2Grun5":

                                kamRig.emit('curveGrune5-rot');
                                break;

                            case "curveGebaude2Grun6":

                                kamRig.emit('curveGrune6-rot');
                                break;

                            case "curveGebaude2Grun7":

                                kamRig.emit('curveGrune7-rot');
                                break;

                            case "curveGebaude2Grun8":

                                kamRig.emit('curveGrune8-rot');
                                break;
                            case "curveGebaude2Grun9":

                                kamRig.emit('curveGrune9-rot');
                                break;

                            case "curveGebaude2Grun10":

                                kamRig.emit('curveGrune10-rot');
                                break;

                        }
                    });
                }


                kamRig.emit('curveGrune11-rot');


                // POKAŽI NAVIGACIJU GRUNANLAGE
                anime({
                targets: '#navGrun',
                translateY: -102,
                duration: 1000,
                delay: 21000,
                easing: 'easeOutQuad',

                });

                // POKAŽI GRUNANLAGE MODAL
                anime({
                targets: '.modal',
                translateX: 450,
                delay: 21500,
                duration: 1000,
                easing: 'easeOutQuad',

                });


            });



















            // NAVIGACIJA GABAUDE - HAUS GUMB KLIK

            document.querySelector('#fromGebaude2Haus').addEventListener('click', function (e) {

            
              
                var kamRig = document.querySelector('#kamRig');
                var kamera = document.querySelector('#main-camera');

                


                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navGebaude',
                translateY: 102,
                duration: 1000
                });


                // SAKRI MODAL
                anime({
                targets: '.modalGebaude',
                translateX: -450,
                duration: 1000
                });




                kamRig.setAttribute('alongpath', {
                    curve: '#trackgumbFromGebaude2Haus',
                    triggerRadius: 2.2,
                    delay: 0,
                    dur: 7000
                
                });


                var curvepoints = document.querySelectorAll("#trackgumbFromGebaude2Haus > a-curve-point");

                for (var i = 0; i < curvepoints.length; i++) {

                    curvepoints[i].addEventListener("alongpath-trigger-activated", function(e){

                        let id = e.target.id;

                        switch(id) {



                            case "curveGebaude2Haus0":

                                kamRig.emit('curveGebaude2haus-rot-0');
                                break;


                            case "curveGebaude2Haus1":

                                kamRig.emit('curveGebaude2haus-rot-1-mobile'); 
                                break;

                            case "curveGebaude2Haus2":

                                // kamRig.emit('curveGrune2-rot'); 
                                break;

                            case "curveGebaude2Haus3":

                                // kamRig.emit('curveGrune2-rot'); 
                                break;

                        }
                    });
                }


                kamRig.emit('start2HausEasing-pos-mobile');


                // POKAŽI NAVIGACIJU GRUNANLAGE
                anime({
                targets: '#navHaus',
                translateY: -102,
                duration: 1000,
                delay: 9000,
                easing: 'easeOutQuad',

                });

                // POKAŽI GRUNANLAGE MODAL
                anime({
                targets: '.modalHaus',
                translateX: -450,
                delay: 9500,
                duration: 1000,
                easing: 'easeOutQuad',

                });


            });














            // WINTER GUMB KLIK

            document.querySelector('#fromGebaude2Winter').addEventListener('click', function (e) {

                
              
                var kamRig = document.querySelector('#kamRig'); 




                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navGebaude',
                translateY: 102,
                duration: 1500
                });



                anime({
                  targets: '.modalGebaude',
                  translateX: -450,
                  delay: 0,
                  duration: 1500
                });
              


                kamRig.setAttribute('alongpath', {
                    curve: '#trackgumbFromGebaude2Winter',
                    triggerRadius: 5,
                    delay: 0,
                    dur: 10000
                });




                // var curvepoints = document.querySelectorAll("#trackgumbFromGebaude2Winter > a-curve-point");

                // var kamera = document.querySelector('#main-camera'); 


                // for (var i = 0; i < curvepoints.length; i++) {

                //     curvepoints[i].addEventListener("alongpath-trigger-activated", function(e){

                //         let id = e.target.id;

                //         switch(id) {


                //             case "curveGebaude2Winter_1":

                //                 kamRig.emit('');                               
                //                 break;


                //             case "curveGebaude2Winter_2":

                //                 kamRig.emit('');
                //                 break;


                //             case "curveGebaude2Winter_3":
                              
                //                 kamRig.emit('');
                //                 break;


                //             case "curveGebaude2Winter_4":

                //                 kamRig.emit('');
                //                 break;

                //             case "curveGebaude2Winter_5":

                //                 kamRig.emit('');
                //                 break;

                //             case "curveGebaude2Winter_6":

                                
                //                 break;

                //         }
                //     });
                // }


                // EASING - PATH END

                kamRig.emit('frGebaude2WinterPos1');
                kamRig.emit('frGebaude2WinterRot1-mobile');

                


                // var kamera = document.querySelector('#main-camera'); 





                anime({
                  targets: '#navWinter',
                  translateY: -102,
                  duration: 1000,
                  delay: 11000,
                  easing: 'easeOutQuad',

                });



                anime({
                  targets: '.modalWinter',
                  translateX: 450,
                  delay: 11500,
                  duration: 1000,
                  easing: 'easeOutQuad',

                });


   
          });











            // KONTAKT GUMB KLIK - FROM GEBAUDE

            document.querySelector('#fromGebaude2Kontakt').addEventListener('click', function (e) {

               
              
                var kamRig = document.querySelector('#kamRig'); 



                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navGebaude',
                translateY: 102,
                duration: 1500
                });


                anime({
                  targets: '.modalGebaude',
                  translateX: -450,
                  delay: 0,
                  duration: 1500
                });
              


                kamRig.setAttribute('alongpath', {
                    curve: '#trackgumbFromGebaude2Kontakt',
                    triggerRadius: 5,
                    delay: 0,
                    dur: 10000
                
                });


                var curvepoints = document.querySelectorAll("#trackgumbFromGebaude2Kontakt > a-curve-point");

                for (var i = 0; i < curvepoints.length; i++) {

                    curvepoints[i].addEventListener("alongpath-trigger-activated", function(e){

                        let id = e.target.id;

                        switch(id) {


                            case "curveGebaude2Kontakt1":

                                kamRig.emit('fromGebaude2Kontakt1-rot');                              
                                break;


                            case "curveGebaude2Kontakt2":

                                kamRig.emit('fromGebaude2Kontakt2-rot');
                                break;


                            case "curveGebaude2Kontakt3":
                              
                                kamRig.emit('curveKontakt3-rot');
                                break;


                            case "curveGebaude2Kontakt4":

                                kamRig.emit('curveKontakt4-rot');
                                break;

                            case "curveGebaude2Kontakt5":

                                kamRig.emit('curveKontakt5-rot');
                                break;

                            case "curveGebaude2Kontakt6":

                              
                                break;
                        }
                    });
                }




                anime({
                  targets: '#navKontakt',
                  translateY: -102,
                  duration: 1000,
                  delay: 10500,
                  easing: 'easeOutQuad',

                });


                // POKAŽI GRUNANLAGE MODAL
                anime({
                targets: '.modalKontakt',
                translateX: -450,
                delay: 11000,
                duration: 1000,
                easing: 'easeOutQuad',

                });



                // EASING POSITION - STOP PATH

                kamRig.emit('curveKontakt6-rot-mobile');
 
                


            });































/////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////// NAVIGACIJA - FROM HAUS ///////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////////




            // NAVIGACIJA ULAZ - GRUNANLAGE GUMB KLIK

            document.querySelector('#fromHaus2Grun').addEventListener('click', function (e) {

              
              
                var kamRig = document.querySelector('#kamRig');
                var kamera = document.querySelector('#main-camera');

                



                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navHaus',
                translateY: 102,
                duration: 1500
                });



                // sakri GRUNANLAGE MODAL
                anime({
                targets: '.modalHaus',
                translateX: 450,
                delay: 0,
                duration: 1000
                });





                kamRig.setAttribute('alongpath', {
                    curve: '#trackgumbFromHaus2Grune',
                    triggerRadius: 2.2,
                    delay: 0,
                    dur: 20000
                
                });


                var curvepoints = document.querySelectorAll("#trackgumbFromHaus2Grune > a-curve-point");

                for (var i = 0; i < curvepoints.length; i++) {

                    curvepoints[i].addEventListener("alongpath-trigger-activated", function(e){

                        let id = e.target.id;

                        switch(id) {


                            case "curveHaus2Grun1":

                                // kamRig.emit('curveGrune1-rot');
                                break;


                            case "curveHaus2Grun2":

                                // kamRig.emit('curveGrune2-rot'); 
                                break;


                            case "curveHaus2Grun3":
                              
                                kamRig.emit('curveGrune3-rot');
                                break;


                            case "curveHaus2Grun4":
                                
                                kamRig.emit('curveGrune4-rot');
                                break;

                            case "curveHaus2Grun5":

                                kamRig.emit('curveGrune5-rot');
                                break;

                            case "curveHaus2Grun6":

                                kamRig.emit('curveGrune6-rot');
                                break;
                            case "curveHaus2Grun7":

                                kamRig.emit('curveGrune7-rot');
                                break;
                            case "curveHaus2Grun8":

                                kamRig.emit('curveGrune8-rot');
                                break;
                            case "curveHaus2Grun9":

                                kamRig.emit('curveGrune9-rot');
                                break;

                            case "curveHaus2Grun10":

                                kamRig.emit('curveGrune10-rot');
                                break;

                        }
                    });
                }


                kamRig.emit('curveGrune11-rot');


                // POKAŽI NAVIGACIJU GRUNANLAGE
                anime({
                targets: '#navGrun',
                translateY: -102,
                duration: 1000,
                delay: 21500,
                easing: 'easeOutQuad',

                });

                // POKAŽI GRUNANLAGE MODAL
                anime({
                targets: '.modal',
                translateX: 450,
                delay: 22000,
                duration: 1000,
                easing: 'easeOutQuad',

                });


            });























            // GUMB KLIK - FROM HAUS 2 GEBAUDE

            document.querySelector('#fromHaus2Gebaude').addEventListener('click', function (e) {

              
                var kamRig = document.querySelector('#kamRig');
                var kamera = document.querySelector('#main-camera');

                
                


                // SAKRI NAVIGACIJU HAUS
                anime({
                targets: '#navHaus',
                translateY: 102,
                duration: 1000
                });




                // sakri GRUNANLAGE MODAL
                anime({
                targets: '.modalHaus',
                translateX: 450,
                delay: 0,
                duration: 1000
                });





                kamRig.setAttribute('alongpath', {
                    curve: '#trackgumbFromHaus2Gebaude',
                    triggerRadius: 4,
                    delay: 0,
                    dur: 11000
                
                });

        



                var curvepoints = document.querySelectorAll("#trackgumbFromHaus2Gebaude > a-curve-point");

                for (var i = 0; i < curvepoints.length; i++) {

                    curvepoints[i].addEventListener("alongpath-trigger-activated", function(e){

                        let id = e.target.id;

                        switch(id) {


                            case "curveHaus2Gebaude0":
                                
                                kamRig.emit('curveGebaude-rot-2'); 
                                break;

                            case "curveHaus2Gebaude1":

                                kamRig.emit('curveGebaude-rot-3'); 
                                break;


                            case "curveHaus2Gebaude2":

                                kamRig.emit('curveHaus2Gebaude-rot-3'); 
                                break;


                            case "curveHaus2Gebaude3":

                                kamRig.emit('curveGebaude-rot-5-mobile'); 
                                break;


                        }
                    });
                }

                kamRig.emit('GebaudeEasing-pos');


                anime({
                  targets: '.modalGebaude',
                  translateX: 450,
                  delay: 13500,
                  duration: 1000,
                  easing: 'easeOutQuad',

                });



                anime({
                  targets: '#navGebaude',
                  translateY: -102,
                  duration: 1000,
                  delay: 13000,
                  easing: 'easeOutQuad',

                });




            });























            // NAVIGACIJA ULAZ - WINTER GUMB KLIK

            document.querySelector('#fromHaus2Winter').addEventListener('click', function (e) {

             
              
                var kamRig = document.querySelector('#kamRig'); 




                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navHaus',
                translateY: 102,
                duration: 1500
                });




                // sakri GRUNANLAGE MODAL
                anime({
                targets: '.modalHaus',
                translateX: 450,
                delay: 0,
                duration: 1000
                });


              


                kamRig.setAttribute('alongpath', {
                    curve: '#trackgumbFromHaus2Winter',
                    triggerRadius: 5,
                    delay: 0,
                    dur: 20000
                });




                var curvepoints = document.querySelectorAll("#trackgumbFromHaus2Winter > a-curve-point");


                for (var i = 0; i < curvepoints.length; i++) {

                    curvepoints[i].addEventListener("alongpath-trigger-activated", function(e){

                        let id = e.target.id;

                        switch(id) {


                            case "curveHaus2Winter1":

                                kamRig.emit('curveWinter1-rot');
                                break;

                            case "curveHaus2Winter2":

                                // kamRig.emit('curveWinter2-rot');
                                break;


                            case "curveHaus2Winter3":
                              
                                kamRig.emit('curveWinter3-rot');
                                break;


                            case "curveHaus2Winter4":
                                kamRig.emit('curveWinter4-rot');
                                break;

                            case "curveHaus2Winter5":

                                kamRig.emit('curveWinter5-rot');
                                break;

                            case "curveHaus2Winter6":

                                kamRig.emit('curveWinter6-rot');
                                break;

                            case "curveHaus2Winter7":

                                kamRig.emit('curveWinter7-rot');
                                break;

                            case "curveHaus2Winter8":

                                kamRig.emit('curveWinter8-rot');
                                break;
                        }
                    });
                }


                // EASING - PATH END

                kamRig.emit('curveWinter9-rot');

                var kamera = document.querySelector('#main-camera'); 





                anime({
                  targets: '#navWinter',
                  translateY: -102,
                  duration: 1000,
                  delay: 21000,
                  easing: 'easeOutQuad',

                });



                anime({
                  targets: '.modalWinter',
                  translateX: 450,
                  delay: 21500,
                  duration: 1000,
                  easing: 'easeOutQuad',

                });


   
          });
























            // NAVIGACIJA HAUS - KONTAKT GUMB KLIK

            document.querySelector('#fromHaus2Kontakt').addEventListener('click', function (e) {

                
              
                var kamRig = document.querySelector('#kamRig'); 



                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navHaus',
                translateY: 102,
                duration: 1500
                });


                // sakri GRUNANLAGE MODAL
                anime({
                targets: '.modalHaus',
                translateX: 450,
                delay: 0,
                duration: 1000
                });




                kamRig.setAttribute('alongpath', {
                    curve: '#trackgumbFromHaus2Kontakt',
                    triggerRadius: 5,
                    delay: 0,
                    dur: 10000
                
                });


                var curvepoints = document.querySelectorAll("#trackgumbFromHaus2Kontakt > a-curve-point");

                for (var i = 0; i < curvepoints.length; i++) {

                    curvepoints[i].addEventListener("alongpath-trigger-activated", function(e){

                        let id = e.target.id;

                        switch(id) {


                            case "curveHaus2Kontakt1":

                                break;


                            case "curveHaus2Kontakt2":

                                kamRig.emit('curveKontakt2-rot');
                                break;


                            case "curveHaus2Kontakt3":
                              
                                kamRig.emit('curveKontakt3-rot');
                                break;


                            case "curveHaus2Kontakt4":
                                kamRig.emit('curveKontakt4-rot');
                                break;

                            case "curveHaus2Kontakt5":

                                kamRig.emit('curveKontakt5-rot');
                                break;

                            case "curveHaus2Kontakt6":

                              
                                break;
                        }
                    });
                }




                anime({
                  targets: '#navKontakt',
                  translateY: -102,
                  duration: 1000,
                  delay: 10000,
                  easing: 'easeOutQuad',

                });


                // POKAŽI GRUNANLAGE MODAL
                anime({
                targets: '.modalKontakt',
                translateX: -450,
                delay: 10500,
                duration: 1000,
                easing: 'easeOutQuad',

                });



                // EASING POSITION - STOP PATH

                kamRig.emit('curveKontakt6-rot-mobile');
 
                



            });

















/////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////// NAVIGACIJA - FROM WINTER /////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////////








            // GUMB KLIK - WINTER 2 GRUNE

            document.querySelector('#fromWinter2Grun').addEventListener('click', function (e) {

              
                var kamRig = document.querySelector('#kamRig');
                var kamera = document.querySelector('#main-camera');

                
                // kamera.emit('kamera-reset0');


                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navWinter',
                translateY: 102,
                duration: 1500
                });


                // SAKRI GRUNANLAGE MODAL
                anime({
                targets: '.modalWinter',
                translateX: -450,
                delay: 0,
                duration: 1000
                });






                kamRig.setAttribute('alongpath', {
                    curve: '#trackgumbFromWinter2Grune',
                    triggerRadius: 2.2,
                    delay: 0,
                    dur: 20000
                
                });


  







                var curvepoints = document.querySelectorAll("#trackgumbFromWinter2Grune > a-curve-point");

                for (var i = 0; i < curvepoints.length; i++) {

                    curvepoints[i].addEventListener("alongpath-trigger-activated", function(e){

                        let id = e.target.id;

                        switch(id) {


                            case "curveWinter2Grun1":

                                kamRig.emit('curveWinter2GruneRota-1');
                                break;


                            case "curveWinter2Grun2":

                                // kamRig.emit('curveGrune2-rot'); 
                                break;


                            case "curveWinter2Grun3":
                              
                                kamRig.emit('curveGrune3-rot');
                                break;


                            case "curveWinter2Grun4":
                                
                                kamRig.emit('curveGrune4-rot');
                                break;

                            case "curveWinter2Grun5":

                                kamRig.emit('curveGrune5-rot');
                                break;

                            case "curveWinter2Grun6":

                                kamRig.emit('curveGrune6-rot');
                                break;

                            case "curveWinter2Grun7":

                                kamRig.emit('curveGrune7-rot');
                                break;

                            case "curveWinter2Grun8":

                                kamRig.emit('curveGrune8-rot');
                                break;
                            case "curveWinter2Grun9":

                                kamRig.emit('curveGrune9-rot');
                                break;

                            case "curveWinter2Grun10":

                                kamRig.emit('curveGrune10-rot');
                                break;

                        }
                    });
                }


                kamRig.emit('curveGrune11-rot');


                // POKAŽI NAVIGACIJU GRUNANLAGE
                anime({
                targets: '#navGrun',
                translateY: -102,
                duration: 1000,
                delay: 21000,
                easing: 'easeOutQuad',

                });

                // POKAŽI GRUNANLAGE MODAL
                anime({
                targets: '.modal',
                translateX: 450,
                delay: 21500,
                duration: 1000,
                easing: 'easeOutQuad',

                });




            });



















            // GUMB KLIK - WINTER 2 GEBAUDE

            document.querySelector('#fromWinter2Gebaude').addEventListener('click', function (e) {

              
                var kamRig = document.querySelector('#kamRig');
                var kamera = document.querySelector('#main-camera');

                
                // kamera.emit('kamera-reset0');


                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navWinter',
                translateY: 102,
                duration: 1000
                });


                // SAKRI GRUNANLAGE MODAL
                anime({
                targets: '.modalWinter',
                translateX: -450,
                delay: 0,
                duration: 1000
                });






                kamRig.setAttribute('alongpath', {
                    curve: '#trackgumbFromWinter2Gebaude',
                    triggerRadius: 2.2,
                    delay: 0,
                    dur: 5000
                
                });


  







                var curvepoints = document.querySelectorAll("#trackgumbFromWinter2Gebaude > a-curve-point");

                for (var i = 0; i < curvepoints.length; i++) {

                    curvepoints[i].addEventListener("alongpath-trigger-activated", function(e){

                        let id = e.target.id;

                        switch(id) {


                            case "curveWinter2Gebaude1":

                                kamRig.emit('curveWinter2GebaudeRot-1');
                                break;


                            case "curveWinter2Gebaude2":

                                break;


                            case "curveWinter2Gebaude3":
                            
                                kamRig.emit('curveWinter2GebaudeRot-3-mobile');
                                break;


                        }
                    });
                }


                kamRig.emit('Winter2GebaudeEasing-pos');


                // POKAŽI NAVIGACIJU GRUNANLAGE
                anime({
                targets: '#navGebaude',
                translateY: -102,
                duration: 1000,
                delay: 7000,
                easing: 'easeOutQuad',

                });

                // POKAŽI GRUNANLAGE MODAL
                anime({
                targets: '.modalGebaude',
                translateX: 450,
                delay: 7500,
                duration: 1000,
                easing: 'easeOutQuad',

                });




            });
















            // NAVIGACIJA WINTER - HAUS GUMB KLIK

            document.querySelector('#fromWinter2Haus').addEventListener('click', function (e) {

            
              
                var kamRig = document.querySelector('#kamRig');
                var kamera = document.querySelector('#main-camera');

                


                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navWinter',
                translateY: 102,
                duration: 1000
                });


                // SAKRI MODAL
                anime({
                targets: '.modalWinter',
                translateX: -450,
                duration: 1000
                });




                kamRig.setAttribute('alongpath', {
                    curve: '#trackgumbFromWinter2Haus',
                    triggerRadius: 2.2,
                    delay: 0,
                    dur: 7000
                
                });


                var curvepoints = document.querySelectorAll("#trackgumbFromWinter2Haus > a-curve-point");

                for (var i = 0; i < curvepoints.length; i++) {

                    curvepoints[i].addEventListener("alongpath-trigger-activated", function(e){

                        let id = e.target.id;

                        switch(id) {



                            case "curveWinter2Haus0":

                                kamRig.emit('curveWinter2HausRota-1-mobile');
                                break;


                            case "curveWinter2Haus1":

                                // kamRig.emit('curveGebaude2haus-rot-1-mobile');
                                kamRig.emit('curveWinter2HausRota-1-mobile');
                                break;

                            case "curveWinter2Haus2":

                                // kamRig.emit('curveGrune2-rot'); 
                                break;

                            case "curveWinter2Haus3":

                                // kamRig.emit('curveGrune2-rot'); 
                                break;

                        }
                    });
                }


                kamRig.emit('start2HausEasing-pos-mobile');


                // POKAŽI NAVIGACIJU GRUNANLAGE
                anime({
                targets: '#navHaus',
                translateY: -102,
                duration: 1000,
                delay: 9000,
                easing: 'easeOutQuad',

                });

                // POKAŽI GRUNANLAGE MODAL
                anime({
                targets: '.modalHaus',
                translateX: -450,
                delay: 9500,
                duration: 1000,
                easing: 'easeOutQuad',

                });



            });





















            // KONTAKT GUMB KLIK - FROM WINTER

            document.querySelector('#fromWinter2Kontakt').addEventListener('click', function (e) {

 
              
                var kamRig = document.querySelector('#kamRig'); 



                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navWinter',
                translateY: 102,
                duration: 1500
                });


                anime({
                  targets: '.modalWinter',
                  translateX: -450,
                  delay: 0,
                  duration: 1500
                });
              


                kamRig.setAttribute('alongpath', {
                    curve: '#trackgumbFromWinter2Kontakt',
                    triggerRadius: 5,
                    delay: 0,
                    dur: 10000
                
                });


                var curvepoints = document.querySelectorAll("#trackgumbFromWinter2Kontakt > a-curve-point");

                for (var i = 0; i < curvepoints.length; i++) {

                    curvepoints[i].addEventListener("alongpath-trigger-activated", function(e){

                        let id = e.target.id;

                        switch(id) {


                            case "curveWinter2Kontakt1":

                                kamRig.emit('fromWinter2Kontakt1-rot');                              
                                break;


                            case "curveWinter2Kontakt2":

                                kamRig.emit('fromGebaude2Kontakt2-rot');
                                break;


                            case "curveWinter2Kontakt3":
                              
                                kamRig.emit('curveKontakt3-rot');
                                break;


                            case "curveWinter2Kontakt4":

                                kamRig.emit('curveKontakt4-rot');
                                break;

                            case "curveWinter2Kontakt5":

                                kamRig.emit('curveKontakt5-rot');
                                break;

                            case "curveWinter2Kontakt6":

                              
                                break;
                        }
                    });
                }




                anime({
                  targets: '#navKontakt',
                  translateY: -102,
                  duration: 1000,
                  delay: 10500,
                  easing: 'easeOutQuad',

                });


                // POKAŽI GRUNANLAGE MODAL
                anime({
                targets: '.modalKontakt',
                translateX: -450,
                delay: 11000,
                duration: 1000,
                easing: 'easeOutQuad',

                });



                // EASING POSITION - STOP PATH

                kamRig.emit('curveKontakt6-rot-mobile');
 
                


            });






















/////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////// NAVIGACIJA - FROM KONTAKT /////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////////





            // NAVIGACIJA KONTAKT - GRUNANLAGE GUMB KLIK

            document.querySelector('#fromKontakt2Grun').addEventListener('click', function (e) {

                
              
                var kamRig = document.querySelector('#kamRig');
                var kamera = document.querySelector('#main-camera');

                
                // kamera.emit('kamera-reset0');


                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navKontakt',
                translateY: 102,
                duration: 1500
                });



                // SAKRI GRUNANLAGE MODAL
                anime({
                targets: '.modalKontakt',
                translateX: 450,
                delay: 0,
                duration: 1000
                });




                kamRig.setAttribute('alongpath', {
                    curve: '#trackgumbFromKontakt2Grune',
                    triggerRadius: 2.2,
                    delay: 0,
                    dur: 20000
                
                });


                var curvepoints = document.querySelectorAll("#trackgumbFromKontakt2Grune > a-curve-point");

                for (var i = 0; i < curvepoints.length; i++) {

                    curvepoints[i].addEventListener("alongpath-trigger-activated", function(e){

                        let id = e.target.id;

                        switch(id) {


                            case "curveKontakt2Grun1":

                                // kamRig.emit('curveGrune1-rot');
                                break;


                            case "curveKontakt2Grun2":

                                // kamRig.emit('curveGrune2-rot'); 
                                break;


                            case "curveKontakt2Grun3":
                              
                                kamRig.emit('curveGrune3-rot');
                                break;


                            case "curveKontakt2Grun4":
                                
                                kamRig.emit('curveGrune4-rot');
                                break;

                            case "curveKontakt2Grun5":

                                kamRig.emit('curveGrune5-rot');
                                break;

                            case "curveKontakt2Grun6":

                                kamRig.emit('curveGrune6-rot');
                                break;
                            case "curveKontakt2Grun7":

                                kamRig.emit('curveGrune7-rot');
                                break;
                            case "curveKontakt2Grun8":

                                kamRig.emit('curveGrune8-rot');
                                break;
                            case "curveKontakt2Grun9":

                                kamRig.emit('curveGrune9-rot');
                                break;

                            case "curveKontakt2Grun10":

                                kamRig.emit('curveGrune10-rot');
                                break;

                        }
                    });
                }


                kamRig.emit('curveGrune11-rot');


                // POKAŽI NAVIGACIJU GRUNANLAGE
                anime({
                targets: '#navGrun',
                translateY: -102,
                duration: 1000,
                delay: 21500,
                easing: 'easeOutQuad',

                });

                // POKAŽI GRUNANLAGE MODAL
                anime({
                targets: '.modal',
                translateX: 450,
                delay: 22000,
                duration: 1000,
                easing: 'easeOutQuad',

                });


                // EASING POSITION - STOP PATH

                // kamRig.emit('curveKontakt6-rot-mobile');
 


            });




















            // NAVIGACIJA ULAZ - GRUNANLAGE GUMB KLIK

            document.querySelector('#fromKontakt2Gebaude').addEventListener('click', function (e) {

                
              
                var kamRig = document.querySelector('#kamRig');
                var kamera = document.querySelector('#main-camera');

                
                // kamera.emit('kamera-reset0');


                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navKontakt',
                translateY: 102,
                duration: 1500
                });


                // SAKRI GRUNANLAGE MODAL
                anime({
                targets: '.modalKontakt',
                translateX: 450,
                delay: 0,
                duration: 1000
                });



                kamRig.setAttribute('alongpath', {
                    curve: '#trackgumbFromKontakt2Gebaude',
                    triggerRadius: 4,
                    delay: 0,
                    dur: 10000
                
                });


                var curvepoints = document.querySelectorAll("#trackgumbFromKontakt2Gebaude > a-curve-point");

                for (var i = 0; i < curvepoints.length; i++) {

                    curvepoints[i].addEventListener("alongpath-trigger-activated", function(e){

                        let id = e.target.id;

                        switch(id) {


                            case "curveKontakt2Gebaude0":

                                break;


                            case "curveKontakt2Gebaude1":

                                // kamRig.emit('curveGebaude-rot-1'); 
                                break;


                            case "curveKontakt2Gebaude2":
                                
                                // kamRig.emit('curveGebaude-rot-2'); 
                                break;

                            case "curveKontakt2Gebaude3":

                                kamRig.emit('curveGebaude-rot-3'); 
                                break;


                            case "curveKontakt2Gebaude4":

                                kamRig.emit('curveGebaude-rot-4'); 
                                break;


                            case "curveKontakt2Gebaude5":

                                kamRig.emit('curveGebaude-rot-5-mobile'); 
                                break;


                        }
                    });
                }

                kamRig.emit('kontakt2GebaudeEasing-pos');


                anime({
                  targets: '.modalGebaude',
                  translateX: 450,
                  delay: 11500,
                  duration: 1000,
                  easing: 'easeOutQuad',

                });


                // anime({
                //   targets: '#navUlaz',
                //   translateY: 102,
                //   duration: 1500
                // });




                anime({
                  targets: '#navGebaude',
                  translateY: -102,
                  duration: 1000,
                  delay: 11000,
                  easing: 'easeOutQuad',

                });




            });



















            // NAVIGACIJA KONTAKT - HAUS GUMB KLIK

            document.querySelector('#fromKontakt2Haus').addEventListener('click', function (e) {

               
              
                var kamRig = document.querySelector('#kamRig');
                var kamera = document.querySelector('#main-camera');

                
               


                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navKontakt',
                translateY: 102,
                duration: 1500
                });




                // SAKRI GRUNANLAGE MODAL
                anime({
                targets: '.modalKontakt',
                translateX: 450,
                delay: 0,
                duration: 1000
                });


                kamRig.setAttribute('alongpath', {
                    curve: '#trackgumbFromKontakt2Haus',
                    triggerRadius: 2.2,
                    delay: 0,
                    dur: 7000
                
                });


                var curvepoints = document.querySelectorAll("#trackgumbFromKontakt2Haus > a-curve-point");

                for (var i = 0; i < curvepoints.length; i++) {

                    curvepoints[i].addEventListener("alongpath-trigger-activated", function(e){

                        let id = e.target.id;

                        switch(id) {



                            case "curveKontakt2Haus0":

                                kamRig.emit('curveStart2haus-rot-0-mobile');
                                break;


                            case "curveKontakt2Haus1":

                                // kamRig.emit('curveGrune2-rot'); 
                                break;


                            case "curveKontakt2Haus2":

                                // kamRig.emit('curveGrune2-rot'); 
                                break;


                        }
                    });
                }


                kamRig.emit('start2HausEasing-pos-mobile');


                // POKAŽI NAVIGACIJU GRUNANLAGE
                anime({
                targets: '#navHaus',
                translateY: -102,
                duration: 1000,
                delay: 9000,
                easing: 'easeOutQuad',

                });

                // POKAŽI GRUNANLAGE MODAL
                anime({
                targets: '.modalHaus',
                translateX: -450,
                delay: 9500,
                duration: 1000,
                easing: 'easeOutQuad',

                });






            });

















            // NAVIGACIJA KONTAKT - WINTER GUMB KLIK

            document.querySelector('#fromKontakt2Winter').addEventListener('click', function (e) {

                
              
                var kamRig = document.querySelector('#kamRig'); 




                // SAKRI NAVIGACIJU ULAZ
                anime({
                targets: '#navKontakt',
                translateY: 102,
                duration: 1500
                });



                // SAKRI GRUNANLAGE MODAL
                anime({
                targets: '.modalKontakt',
                translateX: 450,
                delay: 0,
                duration: 1000
                });

              


                kamRig.setAttribute('alongpath', {
                    curve: '#trackgumbFromKontakt2Winter',
                    triggerRadius: 5,
                    delay: 0,
                    dur: 20000
                });




                var curvepoints = document.querySelectorAll("#trackgumbFromKontakt2Winter > a-curve-point");


                for (var i = 0; i < curvepoints.length; i++) {

                    curvepoints[i].addEventListener("alongpath-trigger-activated", function(e){

                        let id = e.target.id;

                        switch(id) {


                            case "curveKontakt2Winter1":

                                break;


                            case "curveKontakt2Winter2":

                                // kamRig.emit('curveWinter2-rot');
                                break;


                            case "curveKontakt2Winter3":
                              
                                kamRig.emit('curveWinter3-rot');
                                break;


                            case "curveKontakt2Winter4":
                                kamRig.emit('curveWinter4-rot');
                                break;

                            case "curveKontakt2Winter5":

                                kamRig.emit('curveWinter5-rot');
                                break;

                            case "curveKontakt2Winter6":

                                kamRig.emit('curveWinter6-rot');
                                break;

                            case "curveKontakt2Winter7":

                                kamRig.emit('curveWinter7-rot');
                                break;

                            case "curveKontakt2Winter8":

                                kamRig.emit('curveWinter8-rot');
                                break;
                        }
                    });
                }


                // EASING - PATH END

                kamRig.emit('curveWinter9-rot');

                var kamera = document.querySelector('#main-camera'); 





                anime({
                  targets: '#navWinter',
                  translateY: -102,
                  duration: 1000,
                  delay: 21000,
                  easing: 'easeOutQuad',

                });



                anime({
                  targets: '.modalWinter',
                  translateX: 450,
                  delay: 21500,
                  duration: 1000,
                  easing: 'easeOutQuad',

                });
   




          });

















var elem = document.documentElement;

function openFullscreen() {
  if (elem.requestFullscreen) {
     elem.requestFullscreen();
  } else if (elem.mozRequestFullScreen) {    
     elem.mozRequestFullScreen();
  } else if (elem.webkitRequestFullscreen) { 
     elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) {    
     elem.msRequestFullscreen();
  }
}

function closeFullscreen() {
  if (document.exitFullscreen) {
     document.exitFullscreen();
  } else if (document.mozCancelFullScreen) { 
     document.mozCancelFullScreen();
  } else if (document.webkitExitFullscreen) { 
     document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) {    
     document.msExitFullscreen();
  }
}



function lock(orientation) {
  fullScreen();
  screen.orientation.lock(orientation);
}

</script>