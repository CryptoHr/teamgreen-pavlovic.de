
 <?php 


/*
 * Template Name: 3D
*/





 get_header(); ?>




<!-- ////////////////////////////////////////////////////////////////////////////////
//////////////////////////////// LOADING SCREEN /////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////// -->





	<script>
	     AFRAME.registerComponent('loader', {
	       init: function() {
	         let loader = document.querySelector("#model3D")

	         this.el.addEventListener('model-loaded', e => {
	            console.log('loaded')
	            // loader.setAttribute("visible", "false")
	            var loadding = document.getElementById("loadingScr")
	            loadding.classList.remove("loadingScreen")
	            loadding.classList.add("removeLoading")

	         })
	       }
	     })

	</script>



    <script>

  AFRAME.registerComponent('foo', {
    init: function() {
      this.el.addEventListener('click', (e) => {
        window.open('https://www.facebook.com/3DwebsiteDesign');
      })
    }
  })       
    </script>








	<?php get_template_part( 'teamgreen-html' ); ?>









    
    <a-scene raycaster="objects: .ray-logo" cursor="rayOrigin: mouse" antialias="false">







<!-- <a-entity raycaster="objects:.ray-logo; far:0.5;"> -->








        <!-- KAMERA -->

        <a-entity id="kamRig" position="-4 1 38.5" rotation="0 0 0" 


animation__resetRigRot="delay: 0; dir: normal; dur: 1500; loop: 0; property: rotation; startEvents: reset-KamRig-rot; to: 0 0 0;"




animation__from-start=""


        animation__from-start-2-grune=""
            animation__curveGrune1="delay: 700; dir: normal; dur: 1100; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGrune1-rot; to: 0 -100 0;"
            animation__curveGrune2="delay: 0; dir: normal; dur: 1300; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGrune2-rot; to: 0 -80 0;"
            animation__curveGrune3="delay: 0; dir: normal; dur: 2000; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGrune3-rot; to: -10 55 0;"
            animation__curveGrune4="delay: 0; dir: normal; dur: 1000; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGrune4-rot; to: -15 90 0;"
            animation__curveGrune5="delay: 0; dir: normal; dur: 1000; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGrune5-rot; to: -10 80 0;"
            animation__curveGrune6="delay: 0; dir: normal; dur: 2000; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGrune6-rot; to: 0 200 0;"
            animation__curveGrune7="delay: 0; dir: normal; dur: 2000; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGrune7-rot; to: 0 160 0;"
            animation__curveGrune8="delay: 0; dir: normal; dur: 2000; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGrune8-rot; to: 0 90 0;"
            animation__curveGrune9="delay: 0; dir: normal; dur: 3000; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGrune9-rot; to: 0 60 0;"
            animation__curveGrune10="delay: 0; dir: normal; dur: 3000; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGrune10-rot; to: 0 -35.240 -5.000;"

            animation__curveGrune11="delay: 20000; dir: normal; dur: 3800; easing: easeOutQuad; elasticity: 4000; loop: 0; property: position; startEvents: curveGrune11-rot; from: -13.074 0.700 23.300; to: -16.442 0.809 20.920;"





        animation__from-start-2-gebaude=""
            animation__curveGebaude0="delay: 0; dir: normal; dur: 1800; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGebaude-rot-0; to: 0 0 0;"
            animation__curveGebaude1="delay: 0; dir: normal; dur: 1800; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGebaude-rot-1; to: 0 10 0;"
            animation__curveGebaude2="delay: 0; dir: normal; dur: 1800; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGebaude-rot-2; to: 0 -20 0;"
            animation__curveGebaude3="delay: 0; dir: normal; dur: 2800; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGebaude-rot-3; to: 0 5 0;"
            animation__curveGebaude4="delay: 0; dir: normal; dur: 1800; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGebaude-rot-4; to: 0 60 0;"
            animation__curveGebaude5="delay: 0; dir: normal; dur: 3500; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGebaude-rot-5; to: 10 135 3;"

            animation__curveGebaudeEasing="delay: 11000; dir: normal; dur: 3800; easing: easeOutQuad; elasticity: 4000; loop: 0; property: position; startEvents: GebaudeEasing-pos; from: 5.874 1.000 -16.143; to: 3.454 1.000 -26.022;"



            animation__curveGebaude5Mobile="delay: 0; dir: normal; dur: 3500; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGebaude-rot-5-mobile; to: 10 150 3;"




        animation__from-start-2-haus=""
            animation__curveStart2Haus0="delay: 2000; dir: normal; dur: 1800; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveStart2haus-rot-0; to: -15 25 3;"

            animation__curveStart2HausEasing="delay: 7000; dir: normal; dur: 3800; easing: easeOutQuad; elasticity: 4000; loop: 0; property: position; startEvents: start2HausEasing-pos; from: 4.990 2.240 20.987; to: 10 3 27;"




            animation__curveStart2Haus0Mobile="delay: 2000; dir: normal; dur: 1800; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveStart2haus-rot-0-mobile; to: -15 13.5 3;"

            animation__curveStart2HausEasingMobile="delay: 7000; dir: normal; dur: 3800; easing: easeOutQuad; elasticity: 4000; loop: 0; property: position; startEvents: start2HausEasing-pos-mobile; from: 4.990 2.240 20.987; to: 10 3 29;"






        animation__from-start-2-winter=""
            animation__curveWinter1="delay: 0; dir: normal; dur: 2200; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveWinter1-rot; to: 0 0 0;"
            animation__curveWinter2="delay: 0; dir: normal; dur: 2200; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveWinter2-rot; to: -10 -43 0;"
            animation__curveWinter3="delay: 0; dir: normal; dur: 2200; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveWinter3-rot; to: -10 -2.2 0;"
            animation__curveWinter4="delay: 0; dir: normal; dur: 2200; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveWinter4-rot; to: -25 -110 0;"
            animation__curveWinter5="delay: 0; dir: normal; dur: 2200; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveWinter5-rot; to: -32 -84 0;"
            animation__curveWinter6="delay: 0; dir: normal; dur: 2200; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveWinter6-rot; to: 3 -170 0;"
            animation__curveWinter7="delay: 0; dir: normal; dur: 2800; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveWinter7-rot; to: 3 -217 0;"
            animation__curveWinter8="delay: 0; dir: normal; dur: 2700; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveWinter8-rot; to: 3 -216 -3;"

            animation__curveWinter9="delay: 20000; dir: normal; dur: 2800; easing: easeOutQuad; elasticity: 4000; loop: 0; property: position; startEvents: curveWinter9-rot; from: 8.402 0.5 -34.728; to: 7.960 0.5 -33.962;"
            

            

           
        animation__from-start-2-kontakt=""
            animation__curveKontakt1="delay: 0; dir: normal; dur: 2500; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveKontakt1-rot; to: 0 0 0;"
            animation__curveKontakt2="delay: 0; dir: normal; dur: 2500; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveKontakt2-rot; to: -10 -50 -3;"
            animation__curveKontakt3="delay: 0; dir: normal; dur: 1500; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveKontakt3-rot; to: -10 60 3;"
            animation__curveKontakt4="delay: 0; dir: normal; dur: 1800; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveKontakt4-rot; to: -10 -10 -3;"
            animation__curveKontakt5="delay: 0; dir: normal; dur: 1500; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveKontakt5-rot; to: 0 0 0;"

            animation__curveKontakt6="delay: 10000; dir: normal; dur: 3000; easing: easeOutQuad; elasticity: 4000; loop: 0; property: position; startEvents: curveKontakt6-rot; from: -2.13 2.23 0.5; to: -1.6 2.23 -1.15;"



            animation__curveKontakt6Mobile="delay: 10000; dir: normal; dur: 3000; easing: easeOutQuad; elasticity: 4000; loop: 0; property: position; startEvents: curveKontakt6-rot-mobile; from: -2.13 2.23 0.5; to: -1.3 2.23 -1.10;"




















animation__fromGrune=""

        animation__fromGrune_flyUp="delay: 0; dir: normal; dur: 1000; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: position; startEvents: fromGruneFlyUp; from: -16.442 0.809 20.920; to: -16.442 1.809 20.920;"





        animation__curveGebaudeEasingFromGrune="delay: 12000; dir: normal; dur: 3800; easing: easeOutQuad; elasticity: 4000; loop: 0; property: position; startEvents: GebaudeEasingGrune-pos; from: 5.874 1.000 -16.143; to: 3.454 1.000 -26.022;"





        animation__fromGrune2HausEasing="delay: 8000; dir: normal; dur: 3800; easing: easeOutQuad; elasticity: 4000; loop: 0; property: position; startEvents: grune2HausEasing-pos; from: 4.990 2.240 20.987; to: 10 3 27;"


            animation__fromGrune2HausEasingMobile="delay: 8000; dir: normal; dur: 3800; easing: easeOutQuad; elasticity: 4000; loop: 0; property: position; startEvents: grune2HausEasing-pos-mobile; from: 4.990 2.240 20.987; to: 10 3 29;"








        animation__curveGrune2WinterRot1="delay: 0; dir: normal; dur: 1500; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGrune2Winter-rot-1; to: 3.000 -36.630 -3;"
            animation__curveGrune2WinterRot2="delay: 0; dir: normal; dur: 1500; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGrune2Winter-rot-2; to: 3.000 30 -3;"
            animation__curveGrune2WinterRot3="delay: 0; dir: normal; dur: 1500; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGrune2Winter-rot-3; to: 3.000 0 -3;"
            animation__curveGrune2WinterRot4="delay: 0; dir: normal; dur: 1500; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGrune2Winter-rot-4; to: -10 -100 -3;"
            animation__curveGrune2WinterRot5="delay: 0; dir: normal; dur: 1500; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGrune2Winter-rot-5; to: -20 -90 -3;"

            animation__curveWinterEasingFromGrune="delay: 21000; dir: normal; dur: 2800; easing: easeOutQuad; elasticity: 4000; loop: 0; property: position; startEvents: WinterEasingFromGrune-pos; from: 8.402 0.5 -34.728; to: 7.960 0.5 -33.962;"
            




        animation__curveGrune2KontaktRot1="delay: 0; dir: normal; dur: 1500; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGrune2Kontakt-rot-1; to: 0 -60 0;"
            animation__curveGrune2KontaktRot2="delay: 0; dir: normal; dur: 1500; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGrune2Kontakt-rot-2; to: 0 10 0;"

            animation__curveGrune2KontaktEasing="delay: 11000; dir: normal; dur: 3000; easing: easeOutQuad; elasticity: 4000; loop: 0; property: position; startEvents: curveGrune2KontaktEasing; from: -2.13 2.23 0.5; to: -1.6 2.23 -1.15;"





            animation__curveGrune2KontaktEasingMobile="delay: 11000; dir: normal; dur: 3000; easing: easeOutQuad; elasticity: 4000; loop: 0; property: position; startEvents: curveGrune2KontaktEasingMobile; from: -2.13 2.23 0.5; to: -1.3 2.23 -1.10;"









abimation__fromGebaude=""


        animation__from-gebaude-2-grune=""
            animation__curveGebaude2GruneRot="delay: 0; dir: normal; dur: 3500; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGebaude2GruneRota-1; to: 10 185 3;"









        animation__from-gebaude-2-haus=""
            animation__curveGebaude2HausRot0="delay: 0; dir: normal; dur: 1500; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGebaude2haus-rot-0; to: 0 180 0;"
            animation__curveGebaude2HausRot1="delay: 0; dir: normal; dur: 3800; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGebaude2haus-rot-1; to: -15 25 3;"




            animation__curveGebaude2HausRot1Mobile="delay: 0; dir: normal; dur: 3800; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveGebaude2haus-rot-1-mobile; to: -15 13.5 3;"


 





        animation__from-gebaude-2-winter=""
            animation__fromGebaude2WinterPos1="delay: 10000; dir: normal; dur: 3000; easing: easeOutQuad; elasticity: 1000; loop: 0; property: position; startEvents: frGebaude2WinterPos1; from: 8.402 0.5 -34.728; to: 7.960 0.5 -33.962;"
            animation__fromGebaude2WinterRot2="delay: 10000; dir: normal; dur: 3000; easing: easeOutQuad; elasticity: 1000; loop: 0; property: rotation; startEvents: frGebaude2WinterRot1; from: 10 135 3; to: 3 150 -3;"




            animation__fromGebaude2WinterRot2Mobile="delay: 10000; dir: normal; dur: 3000; easing: easeOutQuad; elasticity: 1000; loop: 0; property: rotation; startEvents: frGebaude2WinterRot1-mobile; from: 10 150 3; to: 3 150 -3;"




        animation__from-gebaude-2-kontakt=""
            animation__fromGebaude2Kontakt1="delay: 0; dir: normal; dur: 1500; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: fromGebaude2Kontakt1-rot; to: 0 180 3;"
            animation__fromGebaude2Kontakt2="delay: 0; dir: normal; dur: 1500; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: fromGebaude2Kontakt2-rot; to: 0 100 3;"








animation_from_haus=""

            animation__curvehaus2GebaudeRot3="delay: 200; dir: normal; dur: 2800; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveHaus2Gebaude-rot-3; to: 0 60 0;"










abimation__fromWinter=""


        animation__from-Winter-2-grune=""
            animation__curveWinter2GruneRot="delay: 0; dir: normal; dur: 3500; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveWinter2GruneRota-1; from: 10 135 3; to: 10 185 3;"




        animation__from-Winter-2-gebaude=""
            animation__curveWinter2GebaudeRot1="delay: 0; dir: normal; dur: 2500; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveWinter2GebaudeRot-1; from: 10 135 3; to: 10 100 3;"

            animation__curveWinter2GebaudeRot3="delay: 0; dir: normal; dur: 3800; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveWinter2GebaudeRot-3; to: 10 135 3;"

            animation__curveWinter2GebaudeEasing="delay: 5000; dir: normal; dur: 3800; easing: easeOutQuad; elasticity: 4000; loop: 0; property: position; startEvents: Winter2GebaudeEasing-pos; from: 5.554 1.000 -18.223; to: 3.454 1.000 -26.022;"




            animation__curveWinter2GebaudeRot3Mobile="delay: 0; dir: normal; dur: 3800; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveWinter2GebaudeRot-3-mobile; to: 10 150 3;"




        animation__from-Winter-2-haus=""
            animation__curveWinter2HausRot="delay: 0; dir: normal; dur: 2000; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveWinter2HausRota-1; from: 10 135 3; to: -15 25 3;"

            animation__curveWinter2HausRotMobile="delay: 0; dir: normal; dur: 2000; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: curveWinter2HausRota-1-mobile; from: 10 135 3; to: -15 13.5 3;"







        animation__from-winter-2-kontakt=""
            animation__fromWinter2Kontakt1="delay: 0; dir: normal; dur: 1500; easing: easeInOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: fromWinter2Kontakt1-rot; from: 10 135 3; to: 0 180 3;"








animation__from_kontakt=""

            animation__curveKontakt2GebaudeEasing="delay: 10000; dir: normal; dur: 3800; easing: easeOutQuad; elasticity: 4000; loop: 0; property: position; startEvents: kontakt2GebaudeEasing-pos; from: 5.874 1.000 -16.143; to: 3.454 1.000 -26.022;"


        >
          
        

            <!-- ¨GLAVNA KAMERA - U RIGU -->

            <a-entity camera id="main-camera" position="0 0 0"></a-entity>


        </a-entity>










        <!-- LIGHTS -->

<!--         <a-entity id="svjetlo" light="type: directional; intensity: 0.72; color: #666666" position="4.29 0 42.46"></a-entity>

        <a-entity id="svjetlo2" light="intensity: 2; type: hemisphere; color: #000; groundColor: #fff;"></a-entity> -->



        <!-- <a-entity light="type: hemisphere; color: #003d59; groundColor: #022853; intensity: 0.720" position="-13.506 48.453 10.950"></a-entity> -->


        <a-entity light="type: ambient; color: #82acfb; groundColor: #885b00;" position="28.784 38.507 42.460"></a-entity>



        <a-entity light="type: spot; angle: 45; color: #211a0c; groundColor: #624302; intensity: 13" position="9.912 30.695 63.892" rotation="0 21 0"></a-entity>


<!-- color: #2f1600; -->


















        <!-- ASSETS -->

        <a-assets>
            <a-asset-item id="gtp3Dmodel" src="<?php echo get_template_directory_uri(); ?>/najnoviji-3d-model/scene.gltf"></a-asset-item>
            <a-asset-item id="cistacBazena" src="<?php echo get_template_directory_uri(); ?>/pool-cleaner/scene.gltf"></a-asset-item>
            <a-asset-item id="cistacProzora" src="<?php echo get_template_directory_uri(); ?>/window-cleaner/scene.gltf"></a-asset-item>
            <a-asset-item id="toranj" src="<?php echo get_template_directory_uri(); ?>/toranj.glb"></a-asset-item>


            <a-asset-item id="logo3d" src="<?php echo get_template_directory_uri(); ?>/logo-3d.glb"></a-asset-item>


            <img crossorigin="anonymous" id="sunySky" src="<?php echo get_template_directory_uri(); ?>/suny-sky.jpg"> 



            <?php if( get_field('jumbo_plakat') ): ?>

            	<img crossorigin="anonymous" id="advertisement" src="<?php the_field('jumbo_plakat'); ?>">

            <?php endif; ?>



            <img crossorigin="anonymous" id="logoBlack" src="<?php echo get_template_directory_uri(); ?>/team-green-pavlovic-logo-black.jpg">
            <img crossorigin="anonymous" id="logoBlackBlack" src="<?php echo get_template_directory_uri(); ?>/team-green-pavlovic-logo-black-black.jpg">



            <a-mixin id="curveKocka" geometry="primitive:box; radius:0.01" material="color:#ff0000"></a-mixin>

           


        </a-assets>























        <!-- GLTF MODELI -->





        <a-entity id="model3D" gltf-model="#gtp3Dmodel" scale="0.001 0.001 0.001" loader></a-entity>
        <a-entity gltf-model="#cistacBazena" position="-4 0 -24.81" rotation="0 -90 0" scale="0.01 0.01 0.01"></a-entity>
        <a-entity gltf-model="#cistacProzora" position="0.091 0 -13.780" rotation="0 90 0" scale="0.01 0.01 0.01"></a-entity>

        <a-entity id="toranjModel" gltf-model="#toranj" position="-40.984 0 -134.732" rotation="0 180 0" scale="1 1 1"></a-entity>




       



        <!-- SNOW -->

        <a-entity id="snow1" position="6.679 50 -32.795" particle-system="preset: snow; size: 0.5" scale="0.12 0.570 0.14"></a-entity>



        <!-- SNOW -->

        <!-- <a-entity id="snow2" position="-4.984 12.279 -47.065" particle-system="preset: snow; size: 0.5" scale="0.190 0.260 0.180"></a-entity> -->






     

        <!-- JUMBO PLAKAT -->


        <a-plane id="slikaa" material="side: double; shader: flat" src="#advertisement" position="-2.17 2.35 -2.84" scale="3.18 2 1.5" metalness="0.5"></a-plane>

        


        <!-- JUMBO PLAKAT LINK -->


        <a-plane class="ray-logo" foo color="#f1f1f1" id="" material="shader: flat" src="" position="-1.245 1.591 -2.824" scale="0.960 0.280 0" metalness="" transparent="true" opacity="0"></a-plane>

        


        <!-- <a-text class="ray-logo" foo value="3D Web Design" color="#f1f1f1" geometry="primitive:plane" position="-1.245 1.591 -2.824" scale="0.960 0.280 0"></a-text> -->
 
        <!-- <a-entity text="text: 3D Web Design; font: #optimerBoldFont" position="-1.245 1.591 1.824"></a-entity> -->





        <!-- 3D LOGO JUMBO-->

        <a-entity position="-2.627 2.95 -2.672" scale="0.20 0.20 0.20" animation__logo3Drotate="delay: 0; dir: alternate; dur: 5000; easing: easeInOutQuad; elasticity: 4000; loop: true; property: rotation; from: -15 0 0; to: 15 0 0;">

            <a-entity id="logo3dJumbo" gltf-model="#logo3d" class="ray-logo"
            
                animation__LogoJumbo-rot="delay: 0; dir: alternate; dur: 1300; easing: easeOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: logoNaJambu-rot; from: 360 0 0; to: -360 0 0;"

            ></a-entity>

        </a-entity>



        <!-- 3D LOGO ULAZ-->

        <a-entity id="logo3dUlaz" gltf-model="#logo3d" position="-4.000 0.7 36.86" scale="0.2 0.2 0.2" rotation="370 0 0"  class="ray-logo"

            animation__LogoUlaz-pos="delay: 0; dir: alternate; dur: 2500; easing: easeInOutQuad; elasticity: 4000; loop: true; property: position; from: -4.000 0.7 36.86; to: -4.000 0.85 36.86;"


            animation__LogoUlaz-rot="delay: 0; dir: alternate; dur: 1300; easing: easeOutQuad; elasticity: 4000; loop: 0; property: rotation; startEvents: logoNaUlazu-rot; from: 370 0 0; to: -350 0 0;"

        >
            
        </a-entity>







        <!-- LOGO BLACK - KOMBI LEFT STRANA -->

        <a-image src="#logoBlackBlack" position="-10.500 1.704 10.700" scale="1.580 0.630 1" rotation="-14.110 180.000 0"></a-image>



        <!-- LOGO BLACK - KOMBI RIGHT STRANA -->

        <a-image src="#logoBlack" position="-10.500 1.713 12.670" scale="1.580 0.630 1" rotation="-14.000 0 0"></a-image>



        <!-- LOGO BLACK - KOMBI TOP STRANA -->

        <!-- <a-image src="#logoBlack" position="-10.599 2.162 11.680" scale="1.440 0.780 -90.000" rotation="-90.000 180.000 -90.000"></a-image> -->




        <!-- LOGO BLACK - KOMBI FRONT STRANA -->

        <a-image src="#logoBlack" position="-7.393 1.274 11.705" scale="1.090 0.580 1" rotation="-72.083 90.210 -0.038"></a-image>







        <!-- LOGO BLACK - NA KUĆI -->

        <a-image src="#logoBlack" position="-59.879 2.267 6.904" scale="4.920 1.520 1" rotation="0 80 0"></a-image>










        <!-- CRTA NA PARKINGU -->
        <a-plane color="#f1f1f1" height="2" width="1" rotation="-90 90 0" position="-10.610 0.000 9.803" scale="0.250 3.799 1"></a-plane>


        <!-- CRTA NA PARKINGU -->
        <a-plane color="#f1f1f1" height="20" width="5" rotation="-90 0 0" position="-6.731 0 9.808" scale="0.054 0.049 1.000"></a-plane>








        <!-- CRTA NA PARKINGU -->
        <a-plane color="#f1f1f1" height="2" width="1" rotation="-90 90 0" position="16.736 0 9.793" scale="0.250 3.799 1"></a-plane>


        <!-- CRTA NA PARKINGU -->
        <a-plane color="#f1f1f1" height="20" width="5" rotation="-90 0 0" position="12.800 0 9.784" scale="0.054 0.049 1.000"></a-plane>








        <!-- OCEAN -->

        <a-ocean color="#6c9ce0" width="25" depth="25" density="5" speed="3" position="-3.3 -0.37 -21.28" scale="0.374 0.25 0.2"></a-ocean>













        <!-- SKY -->

        <a-sky src="#sunySky" radius="300" position="0 0 149.697"></a-sky>

       
















<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- ///////////////////////////////////// CURVES - FROM NAVIGACIJA ULAZ /////////////////////////////////////////// -->

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->






        <!-- CURVE FROM ULAZ 2 GRUNANLAGE -->

        <a-curve id="trackgumbFromStart2Grune">
            <a-curve-point id="curveGrun1" position="-4 1 38.5"></a-curve-point>          
            <a-curve-point id="curveGrun2" position="-4.000 2.000 22.380"></a-curve-point>    
            <a-curve-point id="curveGrun3" position="7.563 0.750 22.010"></a-curve-point>   
            <a-curve-point id="curveGrun4" position="13.2 3 17.903"></a-curve-point>   
            <a-curve-point id="curveGrun5" position="14 1.5 14.2"></a-curve-point> 
            <a-curve-point id="curveGrun6" position="0.318 2.030 2.850"></a-curve-point> 
            <a-curve-point id="curveGrun7" position="-4.25 0.7 0.6"></a-curve-point> 
            <a-curve-point id="curveGrun8" position="-4.951 1.130 17.690"></a-curve-point> 
            <a-curve-point id="curveGrun9" position="-10.714 0.700 23.640"></a-curve-point> 
            <a-curve-point id="curveGrun10" position="-13.074 0.700 23.300"></a-curve-point> 
        </a-curve>


        <!-- <a-draw-curve curveref="#trackgumbFromStart2Grune" material="shader: line; color: blue;"></a-draw-curve> -->










        <!-- CURVE FROM ULAZ 2 GEBAUDEREINIGUNG -->

        <a-curve id="trackgumbFromStart2Gebaude">
            <a-curve-point id="curveGebaude0" position="-4 1 38.5"></a-curve-point>
            <a-curve-point id="curveGebaude1" position="-4 1 22.4" mixin=""></a-curve-point>
            <a-curve-point id="curveGebaude2" position="-4 1 13.3" mixin=""></a-curve-point>
            <a-curve-point id="curveGebaude3" position="4.21 1 8.564" mixin=""></a-curve-point>
            <a-curve-point id="curveGebaude4" position="5.874 1.000 -3.974" mixin=""></a-curve-point>
            <a-curve-point id="curveGebaude5" position="5.874 1.000 -16.143" mixin=""></a-curve-point>
        </a-curve>


        <!-- <a-draw-curve curveref="#trackgumbFromStart2Gebaude" material="shader: line; color: blue;"></a-draw-curve> -->










        <!-- CURVE FROM ULAZ 2 HAUSMEISTERSERVICE -->

        <a-curve id="trackgumbFromStart2Haus">
            <a-curve-point id="curveHaus0" position="-4 1 38.5"></a-curve-point> 
            <a-curve-point id="curveHaus1" position="-3.190 1 11.170" mixin=""></a-curve-point>  
            <a-curve-point id="curveHaus2" position="4.990 2.240 20.987" mixin=""></a-curve-point>

        </a-curve>


        <!-- <a-draw-curve curveref="#trackgumbFromStart2Haus" material="shader: line; color: blue;"></a-draw-curve> -->












        <!-- CURVE FROM ULAZ 2 WINTER -->

        <a-curve id="trackgumbFromStart2Winter">
            <a-curve-point id="curveWinter1" position="-4 1 38.5"></a-curve-point>          
            <a-curve-point id="curveWinter2" position="-4 2.5 15.7"></a-curve-point>  
            <a-curve-point id="curveWinter3" position="5.19 1 6"></a-curve-point>    
            <a-curve-point id="curveWinter4" position="0.66 3.5 -26.22"></a-curve-point>   
            <a-curve-point id="curveWinter5" position="-6.50 5 -41"></a-curve-point>  
            <a-curve-point id="curveWinter6" position="8.5 3 -48"></a-curve-point>
            <a-curve-point id="curveWinter7" position="14 1.2 -42"></a-curve-point>
            <a-curve-point id="curveWinter8" position="8.402 0.5 -34.728"></a-curve-point> 

            
            <!-- <a-curve-point id="curveWinter8" position="8.5 0.78 -35"></a-curve-point> STARA POZICIJA -->
        </a-curve>


        <!-- <a-draw-curve curveref="#trackgumbFromStart2Winter" material="shader: line; color: blue;"></a-draw-curve> -->






        <!-- CURVE FROM ULAZ 2 KONTAKT -->

        <a-curve id="trackgumbFromStart2Kontakt">
            <a-curve-point id="curveKontakt1" position="-4 1 38.5"></a-curve-point>          
            <a-curve-point id="curveKontakt2" position="-3.84 2 20.21"></a-curve-point>    
            <a-curve-point id="curveKontakt3" position="3.83 2.23 15.7"></a-curve-point>    
            <a-curve-point id="curveKontakt4" position="-5 2.23 8.45"></a-curve-point>    
            <a-curve-point id="curveKontakt5" position="-2.13 1 4"></a-curve-point>
            <a-curve-point id="curveKontakt6" position="-2.13 2.23 0.5"></a-curve-point>  

        </a-curve>


        <!-- <a-draw-curve curveref="#trackgumbFromStart2Kontakt" material="shader: line; color: blue;"></a-draw-curve> -->








































<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- ///////////////////////////////////// CURVES - FROM NAVIGACIJA GRUNANLAGE ///////////////////////////////////// -->

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->








        <!-- CURVE FROM GRUNANLAGE 2 GEBAUDE -->

        <a-curve id="trackgumbFromGrune2Gebaude">
            <!-- <a-curve-point id="curveGrun2Gebaude_1" position="-16.442 0.809 20.920"></a-curve-point>  -->
            <a-curve-point id="curveGrun2Gebaude_2" position="-16.442 1.809 20.920" mixin=""></a-curve-point> 
            <a-curve-point id="curveGrun2Gebaude_3" position="-4 1 13.3" mixin=""></a-curve-point> 
            <a-curve-point id="curveGrun2Gebaude_4" position="4.21 1 8.564" mixin=""></a-curve-point>
            <a-curve-point id="curveGrun2Gebaude_5" position="5.874 1.000 -3.974" mixin=""></a-curve-point> 
            <a-curve-point id="curveGrun2Gebaude_6" position="5.874 1.000 -16.143" mixin=""></a-curve-point> 
        </a-curve>


        <!-- <a-draw-curve curveref="#trackgumbFromGrune2Gebaude" material="shader: line; color: blue;"></a-draw-curve> -->






        <!-- CURVE FROM GRUNANLAGE 2 HAUSMEISTERSERVICE -->

        <a-curve id="trackgumbFromGrune2Haus">
            <a-curve-point id="curveGrune2Haus0" position="-16.442 1.809 20.920"></a-curve-point> 
            <a-curve-point id="curveGrune2Haus1" position="-3.190 3 11.170" mixin=""></a-curve-point>  
            <a-curve-point id="curveGrune2Haus2" position="4.990 2.240 20.987" mixin=""></a-curve-point>

        </a-curve>


        <!-- <a-draw-curve curveref="#trackgumbFromGrune2Haus" material="shader: line; color: blue;"></a-draw-curve> -->










        <!-- CURVE FROM GRUNANLAGE 2 WINTER -->

        <a-curve id="trackgumbFromGrune2Winter">
            <a-curve-point id="curveGrun2Winter_1" position="-16.442 1.809 20.920"></a-curve-point>          
            <a-curve-point id="curveGrun2Winter_2" position="-4 2.5 15.7"></a-curve-point>  
            <a-curve-point id="curveGrun2Winter_3" position="-10 2 5"></a-curve-point>    
            <a-curve-point id="curveGrun2Winter_4" position="-10.754 1 -22.808"></a-curve-point>  

            <a-curve-point id="curveGrun2Winter_5" position="-6.50 5 -41"></a-curve-point>  
            <a-curve-point id="curveGrun2Winter_6" position="8.5 3 -48"></a-curve-point>
            <a-curve-point id="curveGrun2Winter_7" position="14 1.2 -42"></a-curve-point>
            <a-curve-point id="curveGrun2Winter_8" position="8.402 0.5 -34.728"></a-curve-point> 

            
            <!-- <a-curve-point id="curveWinter8" position="8.5 0.78 -35"></a-curve-point> STARA POZICIJA -->
        </a-curve>


        <!-- <a-draw-curve curveref="#trackgumbFromGrune2Winter" material="shader: line; color: blue;"></a-draw-curve> -->








        <!-- CURVE FROM GRUNANLAGE 2 KONTAKT -->

        <a-curve id="trackgumbFromGrune2Kontakt">
            <a-curve-point id="curveGrune2Kontakt1" position="-16.442 1.809 20.920"></a-curve-point>          
            <a-curve-point id="curveGrune2Kontakt2" position="-3.84 2 20.21"></a-curve-point>    
            <a-curve-point id="curveGrune2Kontakt3" position="3.83 2.23 15.7"></a-curve-point>    
            <a-curve-point id="curveGrune2Kontakt4" position="-5 2.23 8.45"></a-curve-point>    
            <a-curve-point id="curveGrune2Kontakt5" position="-2.13 1 4"></a-curve-point>
            <a-curve-point id="curveGrune2Kontakt6" position="-2.13 2.23 0.5"></a-curve-point>  

        </a-curve>


        <!-- <a-draw-curve curveref="#trackgumbFromGrune2Kontakt" material="shader: line; color: blue;"></a-draw-curve> -->































<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- ///////////////////////////////////// CURVES - FROM NAVIGACIJA GABAUDE //////////////////////////////////////// -->

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->






        <!-- CURVE GABAUDE 2 GRUNANLAGE -->

        <a-curve id="trackgumbFromGebaude2Grune">
            <a-curve-point id="curveGebaude2Grun1" position="3.454 1.000 -26.022"></a-curve-point>          
            <a-curve-point id="curveGebaude2Grun2" position="3.454 3.020 -10.000"></a-curve-point>   
            <a-curve-point id="curveGebaude2Grun3" position="6.5 0.750 22.010"></a-curve-point>   
            <a-curve-point id="curveGebaude2Grun4" position="13.2 3 17.903"></a-curve-point>   
            <a-curve-point id="curveGebaude2Grun5" position="14 1.5 14.2"></a-curve-point> 
            <a-curve-point id="curveGebaude2Grun6" position="0.318 2.030 2.850"></a-curve-point> 
            <a-curve-point id="curveGebaude2Grun7" position="-4.25 0.7 0.6"></a-curve-point> 
            <a-curve-point id="curveGebaude2Grun8" position="-4.951 1.130 17.690"></a-curve-point> 
            <a-curve-point id="curveGebaude2Grun9" position="-10.714 0.700 23.640"></a-curve-point> 
            <a-curve-point id="curveGebaude2Grun10" position="-13.074 0.700 23.300"></a-curve-point> 
        </a-curve>


        <!-- <a-draw-curve curveref="#trackgumbFromGebaude2Grune" material="shader: line; color: blue;"></a-draw-curve> -->











        <!-- CURVE FROM GABAUDE 2 HAUSMEISTERSERVICE -->

        <a-curve id="trackgumbFromGebaude2Haus">
            <a-curve-point id="curveGebaude2Haus0" position="3.454 1.000 -26.022"></a-curve-point>
            <a-curve-point id="curveGebaude2Haus1" position="5.600 2.240 5.227"></a-curve-point>
            <a-curve-point id="curveGebaude2Haus2" position="-1.23 3 11.170" mixin=""></a-curve-point>  
            <a-curve-point id="curveGebaude2Haus3" position="4.990 2.240 20.987" mixin=""></a-curve-point>
        </a-curve>


        <!-- <a-draw-curve curveref="#trackgumbFromGebaude2Haus" material="shader: line; color: blue;"></a-draw-curve> -->









        <!-- CURVE FROM GEBAUDE 2 WINTER -->

        <a-curve id="trackgumbFromGebaude2Winter">
            <a-curve-point mixin="" id="curveGebaude2Winter_1" position="3.454 1.000 -26.022"></a-curve-point>          
            <a-curve-point mixin="" id="curveGebaude2Winter_2" position="8 0.85 -33.27"></a-curve-point>    
            <a-curve-point mixin="" id="curveGebaude2Winter_3" position="7.622 0.780 -35.446"></a-curve-point>    
            <a-curve-point mixin="" id="curveGebaude2Winter_4" position="17.378 4.294 -49.857"></a-curve-point>    
            <a-curve-point mixin="" id="curveGebaude2Winter_5" position="9.438  0.850 -36.444"></a-curve-point>
            <a-curve-point mixin="" id="curveGebaude2Winter_6" position="8.402 0.5 -34.728"></a-curve-point>  

        </a-curve>


        <!-- <a-draw-curve curveref="#trackgumbFromGebaude2Winter" material="shader: line; color: blue;"></a-draw-curve> -->









        <!-- CURVE FROM GEBAUDE 2 KONTAKT -->

        <a-curve id="trackgumbFromGebaude2Kontakt">
            <a-curve-point id="curveGebaude2Kontakt1" position="3.454 1.000 -26.022"></a-curve-point>          
            <a-curve-point id="curveGebaude2Kontakt2" position="9.988 2.230 -3.850"></a-curve-point>
            <a-curve-point id="curveGebaude2Kontakt3" position="3.83 2.23 15.7"></a-curve-point>    
            <a-curve-point id="curveGebaude2Kontakt4" position="-5 2.23 8.45"></a-curve-point>    
            <a-curve-point id="curveGebaude2Kontakt5" position="-2.13 1 4"></a-curve-point>
            <a-curve-point id="curveGebaude2Kontakt6" position="-2.13 2.23 0.5"></a-curve-point>  

        </a-curve>


        <!-- <a-draw-curve curveref="#trackgumbFromGebaude2Kontakt" material="shader: line; color: blue;"></a-draw-curve> -->
















<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- ///////////////////////////////////// CURVES - FROM NAVIGACIJA HAUS /////////////////////////////////////////// -->

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->






        <!-- CURVE FROM HAUS 2 GRUNANLAGE -->

        <a-curve id="trackgumbFromHaus2Grune">
            <a-curve-point id="curveHaus2Grun1" position="10 3 27"></a-curve-point>          
            <!-- <a-curve-point id="curveGrun2" position="-4.000 2.000 22.380"></a-curve-point>     -->
            <a-curve-point id="curveHaus2Grun3" position="7.563 0.750 22.010"></a-curve-point>   
            <a-curve-point id="curveHaus2Grun4" position="13.2 3 17.903"></a-curve-point>   
            <a-curve-point id="curveHaus2Grun5" position="14 1.5 14.2"></a-curve-point> 
            <a-curve-point id="curveHaus2Grun6" position="0.318 2.030 2.850"></a-curve-point> 
            <a-curve-point id="curveHaus2Grun7" position="-4.25 0.7 0.6"></a-curve-point> 
            <a-curve-point id="curveHaus2Grun8" position="-4.951 1.130 17.690"></a-curve-point> 
            <a-curve-point id="curveHaus2Grun9" position="-10.714 0.700 23.640"></a-curve-point> 
            <a-curve-point id="curveHaus2Grun10" position="-13.074 0.700 23.300"></a-curve-point> 
        </a-curve>


        <!-- <a-draw-curve curveref="#trackgumbFromHaus2Grune" material="shader: line; color: blue;"></a-draw-curve> -->












        <!-- CURVE FROM HAUSMEISTERSERVICE 2 GABAUDE -->

        <a-curve id="trackgumbFromHaus2Gebaude">
            <a-curve-point id="curveHaus2Gebaude0" position="10 3 27"></a-curve-point>
            <a-curve-point id="curveHaus2Gebaude1" position="-1.23 3 11.170" mixin=""></a-curve-point> 
            <a-curve-point id="curveHaus2Gebaude2" position="5.600 2.240 5.227"></a-curve-point>
            <a-curve-point id="curveHaus2Gebaude3" position="5.874 1.000 -16.143" mixin=""></a-curve-point>
        </a-curve>


        <!-- <a-draw-curve curveref="#trackgumbFromHaus2Gebaude" material="shader: line; color: blue;"></a-draw-curve> -->









        <!-- CURVE FROM HAUSMEISTERSERVICE 2 WINTER -->

        <a-curve id="trackgumbFromHaus2Winter">
            <a-curve-point id="curveHaus2Winter1" position="10 3 27"></a-curve-point>          
            <!-- <a-curve-point id="curveHaus2Winter2" position="-4 2.5 15.7"></a-curve-point> -->
            <a-curve-point id="curveHaus2Winter3" position="5.19 1 6"></a-curve-point>    
            <a-curve-point id="curveHaus2Winter4" position="0.66 3.5 -26.22"></a-curve-point>   
            <a-curve-point id="curveHaus2Winter5" position="-6.50 5 -41"></a-curve-point>  
            <a-curve-point id="curveHaus2Winter6" position="8.5 3 -48"></a-curve-point>
            <a-curve-point id="curveHaus2Winter7" position="14 1.2 -42"></a-curve-point>
            <a-curve-point id="curveHaus2Winter8" position="8.402 0.5 -34.728"></a-curve-point> 
        </a-curve>


        <!-- <a-draw-curve curveref="#trackgumbFromHaus2Winter" material="shader: line; color: blue;"></a-draw-curve> -->










        <!-- CURVE FROM HAUSMEISTERSERVICE 2 KONTAKT -->

        <a-curve id="trackgumbFromHaus2Kontakt">
            <a-curve-point id="curveHaus2Kontakt1" position="10 3 27"></a-curve-point>          
            <!-- <a-curve-point id="curveHaus2Kontakt2" position="-3.84 2 20.21"></a-curve-point>     -->
            <a-curve-point id="curveHaus2Kontakt3" position="3.83 2.23 15.7"></a-curve-point>    
            <a-curve-point id="curveHaus2Kontakt4" position="-5 2.23 8.45"></a-curve-point>    
            <a-curve-point id="curveHaus2Kontakt5" position="-2.13 1 4"></a-curve-point>
            <a-curve-point id="curveHaus2Kontakt6" position="-2.13 2.23 0.5"></a-curve-point>  

        </a-curve>


        <!-- <a-draw-curve curveref="#trackgumbFromHaus2Kontakt" material="shader: line; color: blue;"></a-draw-curve> -->










<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- ///////////////////////////////////// CURVES - FROM NAVIGACIJA WINTER //////////////////////////////////////// -->

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->









        <!-- CURVE FROM WINTER 2 GRUNANLAGE -->

        <a-curve id="trackgumbFromWinter2Grune">
            <a-curve-point id="curveWinter2Grun1" position="7.960 0.5 -33.962"></a-curve-point>          
            <a-curve-point id="curveWinter2Grun2" position="3.454 3.020 -10.000"></a-curve-point>   
            <a-curve-point id="curveWinter2Grun3" position="6.5 0.750 22.010"></a-curve-point>   
            <a-curve-point id="curveWinter2Grun4" position="13.2 3 17.903"></a-curve-point>   
            <a-curve-point id="curveWinter2Grun5" position="14 1.5 14.2"></a-curve-point> 
            <a-curve-point id="curveWinter2Grun6" position="0.318 2.030 2.850"></a-curve-point> 
            <a-curve-point id="curveWinter2Grun7" position="-4.25 0.7 0.6"></a-curve-point> 
            <a-curve-point id="curveWinter2Grun8" position="-4.951 1.130 17.690"></a-curve-point> 
            <a-curve-point id="curveWinter2Grun9" position="-10.714 0.700 23.640"></a-curve-point> 
            <a-curve-point id="curveWinter2Grun10" position="-13.074 0.700 23.300"></a-curve-point> 
        </a-curve>


        <!-- <a-draw-curve curveref="#trackgumbFromWinter2Grune" material="shader: line; color: blue;"></a-draw-curve> -->














        <!-- CURVE FROM WINTER 2 GEBAUDE -->

        <a-curve id="trackgumbFromWinter2Gebaude">
            <a-curve-point id="curveWinter2Gebaude1" position="7.960 0.5 -33.962"></a-curve-point>          
            <a-curve-point id="curveWinter2Gebaude2" position="7.380 1.000 -11.760" mixin=""></a-curve-point>
            <a-curve-point id="curveWinter2Gebaude3" position="5.554 1.000 -18.223" mixin=""></a-curve-point>

        </a-curve>


        <!-- <a-draw-curve curveref="#trackgumbFromWinter2Gebaude" material="shader: line; color: blue;"></a-draw-curve> -->








        <!-- CURVE FROM WINTER 2 HAUSMEISTERSERVICE -->

        <a-curve id="trackgumbFromWinter2Haus">
            <a-curve-point id="curveWinter2Haus0" position="7.960 0.5 -33.962"></a-curve-point>
            <a-curve-point id="curveWinter2Haus1" position="5.600 2.240 5.227"></a-curve-point>
            <a-curve-point id="curveWinter2Haus2" position="-1.23 3 11.170" mixin=""></a-curve-point>  
            <a-curve-point id="curveWinter2Haus3" position="4.990 2.240 20.987" mixin=""></a-curve-point>
        </a-curve>


        <!-- <a-draw-curve curveref="#trackgumbFromWinter2Haus" material="shader: line; color: blue;"></a-draw-curve> -->













        <!-- CURVE FROM WINTER 2 KONTAKT -->

        <a-curve id="trackgumbFromWinter2Kontakt">
            <a-curve-point id="curveWinter2Kontakt1" position="7.960 0.5 -33.962"></a-curve-point>          
            <a-curve-point id="curveWinter2Kontakt2" position="9.988 2.230 -3.850"></a-curve-point>
            <a-curve-point id="curveWinter2Kontakt3" position="3.83 2.23 15.7"></a-curve-point>    
            <a-curve-point id="curveWinter2Kontakt4" position="-5 2.23 8.45"></a-curve-point>    
            <a-curve-point id="curveWinter2Kontakt5" position="-2.13 1 4"></a-curve-point>
            <a-curve-point id="curveWinter2Kontakt6" position="-2.13 2.23 0.5"></a-curve-point>  

        </a-curve>


        <!-- <a-draw-curve curveref="#trackgumbFromWinter2Kontakt" material="shader: line; color: blue;"></a-draw-curve> -->



































<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- ///////////////////////////////////// CURVES - FROM NAVIGACIJA KONTAKT //////////////////////////////////////// -->

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->







        <!-- CURVE FROM KONTAKT 2 GRUNANLAGE -->

        <a-curve id="trackgumbFromKontakt2Grune">
            <a-curve-point id="curveKontakt2Grun1" position="-1.6 2.23 -1.15"></a-curve-point>          
            <a-curve-point id="curveKontakt2Grun2" position="2.523 1.5 12.612"></a-curve-point>    
            <a-curve-point id="curveKontakt2Grun3" position="6.5 0.750 22.010"></a-curve-point>   
            <a-curve-point id="curveKontakt2Grun4" position="13.2 3 17.903"></a-curve-point>   
            <a-curve-point id="curveKontakt2Grun5" position="14 1.5 14.2"></a-curve-point> 
            <a-curve-point id="curveKontakt2Grun6" position="0.318 2.030 2.850"></a-curve-point> 
            <a-curve-point id="curveKontakt2Grun7" position="-4.25 0.7 0.6"></a-curve-point> 
            <a-curve-point id="curveKontakt2Grun8" position="-4.951 1.130 17.690"></a-curve-point> 
            <a-curve-point id="curveKontakt2Grun9" position="-10.714 0.700 23.640"></a-curve-point> 
            <a-curve-point id="curveKontakt2Grun10" position="-13.074 0.700 23.300"></a-curve-point> 
        </a-curve>


        <!-- <a-draw-curve curveref="#trackgumbFromKontakt2Grune" material="shader: line; color: blue;"></a-draw-curve> -->











        <!-- CURVE FROM KONTAKT 2 GEBAUDEREINIGUNG -->

        <a-curve id="trackgumbFromKontakt2Gebaude">
            <a-curve-point id="curveKontakt2Gebaude0" position="-1.6 2.23 -1.15"></a-curve-point>
<!--             <a-curve-point id="curveKontakt2Gebaude1" position="-4 1 22.4" mixin=""></a-curve-point>
            <a-curve-point id="curveKontakt2Gebaude2" position="-4 1 13.3" mixin=""></a-curve-point> -->
            <a-curve-point id="curveKontakt2Gebaude3" position="4.21 1 8.564" mixin=""></a-curve-point>
            <a-curve-point id="curveKontakt2Gebaude4" position="5.874 1.000 -3.974" mixin=""></a-curve-point>
            <a-curve-point id="curveKontakt2Gebaude5" position="5.874 1.000 -16.143" mixin=""></a-curve-point>
        </a-curve>


        <!-- <a-draw-curve curveref="#trackgumbFromKontakt2Gebaude" material="shader: line; color: blue;"></a-draw-curve> -->











        <!-- CURVE FROM ULAZ 2 HAUSMEISTERSERVICE --> 

        <a-curve id="trackgumbFromKontakt2Haus">
            <a-curve-point id="curveKontakt2Haus0" position="-1.6 2.23 -1.15"></a-curve-point> 
            <a-curve-point id="curveKontakt2Haus1" position="-1.850 1 11.170" mixin=""></a-curve-point>  
            <a-curve-point id="curveKontakt2Haus2" position="4.990 2.240 20.987" mixin=""></a-curve-point>

        </a-curve>


        <!-- <a-draw-curve curveref="#trackgumbFromKontakt2Haus" material="shader: line; color: blue;"></a-draw-curve> -->












        <!-- CURVE FROM KONTAKT 2 WINTER -->

        <a-curve id="trackgumbFromKontakt2Winter">
            <a-curve-point id="curveKontakt2Winter1" position="-1.6 2.23 -1.15"></a-curve-point>          
            <!-- <a-curve-point id="curveKontakt2Winter2" position="-4 2.5 15.7"></a-curve-point>   -->
            <a-curve-point id="curveKontakt2Winter3" position="5.19 1 6"></a-curve-point>    
            <a-curve-point id="curveKontakt2Winter4" position="0.66 3.5 -26.22"></a-curve-point>   
            <a-curve-point id="curveKontakt2Winter5" position="-6.50 5 -41"></a-curve-point>  
            <a-curve-point id="curveKontakt2Winter6" position="8.5 3 -48"></a-curve-point>
            <a-curve-point id="curveKontakt2Winter7" position="14 1.2 -42"></a-curve-point>
            <a-curve-point id="curveKontakt2Winter8" position="8.402 0.5 -34.728"></a-curve-point> 

            
            <!-- <a-curve-point id="curveWinter8" position="8.5 0.78 -35"></a-curve-point> STARA POZICIJA -->
        </a-curve>


        <!-- <a-draw-curve curveref="#trackgumbFromKontakt2Winter" material="shader: line; color: blue;"></a-draw-curve> -->













































        <!-- CURVE FROM GRUNANLAGE 2 ULAZ  -->

        <a-curve id="trackGrun2Start">
			<a-curve-point position="-16.442 0.809 20.920"></a-curve-point>
            <a-curve-point position="-4.432 0.809 20.920"></a-curve-point>
            <a-curve-point position="-4 1 35.5"></a-curve-point>
            <a-curve-point position="-4 1 38.5"></a-curve-point>          

        </a-curve>


        <!-- <a-draw-curve curveref="#trackGrun2Start" material="shader: line; color: blue;"></a-draw-curve> -->






     <!-- CURVE FROM GEBAUDE 2 ULAZ  -->

        <a-curve id="trackGebaude2Start">
			<a-curve-point position="3.454 1.000 -26.022"></a-curve-point>
            <a-curve-point position="2.877 0.809 9.578"></a-curve-point>
            <a-curve-point position="-4.230 0.809 14.477"></a-curve-point>
            <a-curve-point position="-4 1 35.5"></a-curve-point>              
            <a-curve-point position="-4 1 38.5"></a-curve-point>          
        </a-curve>


        <!-- <a-draw-curve curveref="#trackGebaude2Start" material="shader: line; color: blue;"></a-draw-curve> -->









     <!-- CURVE FROM HAUS 2 ULAZ  -->

        <a-curve id="trackHaus2Start">
			<a-curve-point position="10 3 27"></a-curve-point>
            <a-curve-point position="-3.975 0.809 23.037"></a-curve-point>
            <a-curve-point position="-4 1 35.5"></a-curve-point>              
            <a-curve-point position="-4 1 38.5"></a-curve-point>          
        </a-curve>


        <!-- <a-draw-curve curveref="#trackHaus2Start" material="shader: line; color: blue;"></a-draw-curve> -->








     <!-- CURVE FROM WINTER 2 ULAZ  -->

        <a-curve id="trackWinter2Start">
			<a-curve-point position="7.960 0.5 -33.962"></a-curve-point>
            <a-curve-point position="2.877 0.809 9.578"></a-curve-point>
            <a-curve-point position="-4.230 0.809 14.477"></a-curve-point>
            <a-curve-point position="-4 1 35.5"></a-curve-point>              
            <a-curve-point position="-4 1 38.5"></a-curve-point>          
        </a-curve>


        <!-- <a-draw-curve curveref="#trackWinter2Start" material="shader: line; color: blue;"></a-draw-curve> -->








     <!-- CURVE FROM KONTAKT 2 ULAZ  -->

        <a-curve id="trackKontakt2Start">
			<a-curve-point position="-1.6 2.23 -1.15"></a-curve-point>
            <a-curve-point position="-4.230 0.809 14.477"></a-curve-point>
            <a-curve-point position="-4 1 35.5"></a-curve-point>              
            <a-curve-point position="-4 1 38.5"></a-curve-point>          
        </a-curve>


        <!-- <a-draw-curve curveref="#trackKontakt2Start" material="shader: line; color: blue;"></a-draw-curve> -->












    </a-scene>


    

    <script src="<?php echo get_template_directory_uri(); ?>/swiper-master/dist/js/swiper.min.js"></script>





<script type="text/javascript">
    



    
    document.querySelector('#btn3Dsite').addEventListener('click', function (e) {
        
        var gdprDiv = document.getElementById("gdprDiv");


        gdprDiv.classList.add("gdprDiv-hide");

    });




</script>



    <?php 

        if ( !wp_is_mobile() ) {

             get_template_part( 'Qjavascript' );





        } else {

            get_template_part( 'Qjavascript-mobile' );
        }


    ?>



<?php get_footer(); ?>
