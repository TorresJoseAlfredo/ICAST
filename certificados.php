<?php
require './includes/funciones.php';
$id5 = "54df54-54df5";
$id6 = "54df54-54df6";
$id7 = "54df54-54df7";
$id8 = "54df54-54df8";
$id9 = "54df54-54df9";
$id10 = "54df54-54df10";
$id11 = "54df54-54df11";
$consulta5 = obtener_constancias($id5);
$consulta6 = obtener_constancias($id6);
$consulta7 = obtener_constancias($id7);
$consulta8 = obtener_constancias($id8);
$consulta9 = obtener_constancias($id9);
$consulta10 = obtener_constancias($id10);
$consulta11 = obtener_constancias($id11);

$consulta_trabajoscartas5 = obtener_trabajoscartas($id5);
$consulta_trabajoscartas6 = obtener_trabajoscartas($id6);
$consulta_trabajoscartas9 = obtener_trabajoscartas($id9);
$consulta_trabajoscartas11 = obtener_trabajoscartas($id11);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ICASST 2023</title>
  <meta name="description" content="International Conference on Aerospace Science and Technology 2023" >
  <meta name="keywords"    content="congress, aerospace, science, technology, conference">

  <!-- Favicons -->
  <link href="assets/img/IconLogo.png" rel="icon">
  <link href="assets/img/IconLogo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="assets/css/style.css" rel="stylesheet">

</head>



<body>

  
  
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">ICASST &nbsp; 2023</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="getstarted scrollto" href="https://www.morressier.com/call-for-papers/645a389ff8f4570019ede5f9" target="_blank">Submit a
              manuscript</a></li>
          <li><a class="nav-link scrollto active" href="#hero">Main</a></li>
          <li><a class="nav-link scrollto" href="#about">CFP</a></li>
          <li><a class="nav-link scrollto" href="#clients">Templates</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Speakers</a></li>
          <li><a class="nav-link scrollto" href="#services">Program</a></li>
          <!---<li><a class="nav-link scrollto" href="#services">Workshops</a></li>-->
          <li><a class="nav-link scrollto" href="#Committee">Committee</a>
       </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  




    
       <!-- ======= certificados Section ======= -->

    
       <section id="Attestations" class="attestations">
  <div class="container">
    <div class="section-title">
      <h2>Attestations</h2>
      <p><b>Constancias</b></p>
    </div>
    
 
      <div class="row">  
          <?php   $constancia = mysqli_fetch_assoc($consulta5) ?>   
              <div class="col-lg-6 mt-2 mt-lg-0">
                  <div class="box">
                      <h4>CERTIFICATE ID <?php  echo $constancia['Certificate_ID'] ?> valid!</h4>   
                        <p>The Centro de Desarrollo Aeroespacial del 
                            Instituto Politécnico Nacional certifies the participation of:</p>
                            <div><br>&nbsp;</div>
                      <h4><?php  echo $constancia['Nombre_con_grado'] ?></h4>   
                      <h4><?php  echo $constancia['Adscripcion'] ?></h4>   
                          <p>imparted the <?php  echo $constancia['Tipo'] ?>
                          entitled "<?php  echo $constancia['Titulo'] ?>", 
                          of <?php  echo $constancia['Duracion'] ?>, 
                          at the International Conference of Aerospace Science and 
                          Technology (ICASST) 2023, which took place from November 19th 
                          to November 24nd, 2023, at the facilities of this centre</p>      
                  </div>
              </div>
                    
          <?php ?>
          
             <hr>

          <?php   $constancia = mysqli_fetch_assoc($consulta6) ?>   
              <div class="col-lg-6 mt-2 mt-lg-0">
                  <div class="box">
                      <h4>CERTIFICATE ID <?php  echo $constancia['Certificate_ID'] ?> valid!</h4>   
                        <p>The Centro de Desarrollo Aeroespacial del Instituto Politécnico Nacional certifies that:</p>
                      <div><br>&nbsp;</div>
                      <h4><?php  echo $constancia['Nombre_con_grado'] ?></h4>   
                      <h4><?php  echo $constancia['Adscripcion'] ?></h4>   
                        <p>imparted the Keynote Speech entitled "<?php  echo $constancia['Titulo'] ?>", 
                        , at the International Conference of Aerospace Science and Technology (ICASST) 2023, 
                        which took place from November 19th to November 24th, 2023, at the facilities of this centre.</p>      
                  </div>
              </div>
                    
          <?php ?>
            
              <hr>

          <?php   $constancia = mysqli_fetch_assoc($consulta7) ?>   
              <div class="col-lg-6 mt-2 mt-lg-0">
                  <div class="box">
                      <h4>CERTIFICATE ID <?php  echo $constancia['Certificate_ID'] ?> valid!</h4>   
                        <p>The Centro de Desarrollo Aeroespacial del Instituto Politécnico Nacional 
                        certifies the contribution as double-blinded peer-reviewer of full-length 
                        papers published at Journal of Physics: Conference Series, published by 
                        Institute of Physics (IOP), United Kingdom, of:</p>
                        <div><br>&nbsp;</div>
                      <h4><?php  echo $constancia['Nombre_con_grado'] ?></h4>   
                      <h4><?php  echo $constancia['Adscripcion'] ?></h4>   
                        <p>to assure the academic quality at International Conference of Aerospace 
                        Science and Technology (ICASST) 2023, which took place from November 19th 
                        to November 24th, 2023, at the facilities of this centre."</p>      
                  </div>
              </div>
                    
          <?php ?>
            
             <hr>

          <?php   $constancia = mysqli_fetch_assoc($consulta8) ?>   
              <div class="col-lg-6 mt-2 mt-lg-0">
                  <div class="box">
                      <h4>CERTIFICATE ID <?php  echo $constancia['Certificate_ID'] ?> valid!</h4>   
                      <p>The Centro de Desarrollo Aeroespacial del Instituto Politécnico Nacional certifies the participation of:</p>
                      <div><br>&nbsp;</div>
                      <h4><?php  echo $constancia['Nombre_con_grado'] ?></h4>   
                      <h4><?php  echo $constancia['Adscripcion'] ?></h4>   
                      <p>served as part of the Scientific Committe at International Conference of Aerospace Science and Technology (ICASST) 2023, which took place from November 19th to November 24th, 2023, at the facilities of this centre.</p>      
                  </div>
              </div>
                    
          <?php ?>  

            <hr>

          <?php   $constancia = mysqli_fetch_assoc($consulta9) ?>   
              <div class="col-lg-6 mt-2 mt-lg-0">
                  <div class="box">
                      <h4>CERTIFICATE ID <?php  echo $constancia['Certificate_ID'] ?> valid!</h4>   
                      <p>The Centro de Desarrollo Aeroespacial del Instituto Politécnico Nacional certifies the participation of:</p>
                      
                      <div><br>&nbsp;</div>
                      <h4><?php  echo $constancia['Nombre_con_grado'] ?></h4>   
                      <h4><?php  echo $constancia['Adscripcion'] ?></h4>   
                      <p>successfully completed the  <?php  echo $constancia['Tipo'] ?>
                      entitled "<?php  echo $constancia['Titulo'] ?>", 
                      of <?php  echo $constancia['Duracion'] ?>, at International Conference of Aerospace Science and Technology (ICASST) 2023, which took place from November 19th to November 24th, 2023, at the facilities of this centre.</p>   
                  </div>
              </div>
                    
          <?php ?>       

            <hr>

          <?php   $constancia = mysqli_fetch_assoc($consulta10) ?>   
              <div class="col-lg-6 mt-2 mt-lg-0">
                  <div class="box">
                      <h4>CERTIFICATE ID <?php  echo $constancia['Certificate_ID'] ?> valid!</h4>   
                      <p>The Centro de Desarrollo Aeroespacial del Instituto Politécnico Nacional certifies the participation of:</p>
                      <div><br>&nbsp;</div>
                      <h4><?php  echo $constancia['Nombre_con_grado'] ?></h4>   
                      <h4><?php  echo $constancia['Adscripcion'] ?></h4>   
                      <p>at International Conference of Aerospace Science and Technology (ICASST) 2023, which took place from November 19th to November 24th, 2023, at the facilities of this centre.</p>      
                  </div>
              </div>
                    
          <?php ?>

            <hr>

          <?php   $constancia = mysqli_fetch_assoc($consulta11) ?>   
              <div class="col-lg-6 mt-2 mt-lg-0">
                  <div class="box">
                      <h4>CERTIFICATE ID <?php  echo $constancia['Certificate_ID'] ?> valid!</h4>   
                      <p>The Centro de Desarrollo Aeroespacial del Instituto Politécnico Nacional acknowledges:</p>
                      <div><br>&nbsp;</div>
                      <h4><?php  echo $constancia['Nombre_con_grado'] ?></h4>   
                      <h4><?php  echo $constancia['Adscripcion'] ?></h4>   
                      <p>for the presentation of his work entitled "<?php  echo $constancia['Titulo'] ?>", at International Conference of Aerospace Science and Technology (ICASST) 2023, which took place from November 19th to November 24th, 2023, at the facilities of this centre.</p>      
                  </div>
              </div>
                    
          <?php ?>
            </div>
      </div>

</section>


       <!-- ======= Trabajos cartas Section ======= -->

    
       <section id="Attestations" class="attestations">
  <div class="container">
    <div class="section-title">
      <h2>Attestations</h2>
      <p><b>Trabajos Cartas</b></p>
    </div>
    
 
      <div class="row">  
          <?php   $constancia = mysqli_fetch_assoc($consulta_trabajoscartas5) ?>   
              <div class="col-lg-6 mt-2 mt-lg-0">
                  <div class="box">
                      <h4> LETTER ID <?php  echo $constancia['Certificate_ID'] ?> valid!</h4>   
                        <p>The full-length article <?php  echo $constancia['Titulo'] ?>by the authors:</p>
                            <div><br>&nbsp;</div>
                      <h4><?php  echo $constancia['Nombre1'] ?></h4>   
                      <h4><?php  echo $constancia['Adscripcion1'] ?></h4>   
                          <p>has been <?php  echo $constancia['Status'] ?>
                          for its presentation at the International Conference of Aerospace
                           Science and Technology (ICASST) 2023, which takes place from November 
                           19th to November 24nd, 2024. The submitted work is double-blinded 
                           peer-reviewed of its publication at Journal of Physics: Conference 
                           Series, by Institute of Physics (IOP), United Kingdom.</p>      
                           <p>Abstract: <?php  echo $constancia['Adstract'] ?></p>
                  </div>
              </div>
                    
          <?php ?>
          
             <hr>

          <?php   $constancia = mysqli_fetch_assoc($consulta_trabajoscartas6) ?>   
              <div class="col-lg-6 mt-2 mt-lg-0">
                  <div class="box">
                  <h4> LETTER ID <?php  echo $constancia['Certificate_ID'] ?> valid!</h4>   
                        <p>The full-length article <?php  echo $constancia['Titulo'] ?>by the authors:</p>
                            <div><br>&nbsp;</div>
                      <h4><?php  echo $constancia['Nombre1'] ?></h4>   
                      <h4><?php  echo $constancia['Adscripcion1'] ?></h4>   
                          <p>has been <?php  echo $constancia['Status'] ?>
                          for its presentation at the International Conference of Aerospace
                           Science and Technology (ICASST) 2023, which takes place from November 
                           19th to November 24nd, 2024. The submitted work is double-blinded 
                           peer-reviewed of its publication at Journal of Physics: Conference 
                           Series, by Institute of Physics (IOP), United Kingdom.</p>      
                           <p>Abstract: <?php  echo $constancia['Adstract'] ?></p>  
                  </div>
              </div>
                    
          <?php ?>
            
              <hr>

        

          <?php   $constancia = mysqli_fetch_assoc($consulta_trabajoscartas9) ?>   
              <div class="col-lg-6 mt-2 mt-lg-0">
                  <div class="box">
                      <h4> LETTER ID <?php  echo $constancia['Certificate_ID'] ?> valid!</h4>   
                        <p>The full-length article <?php  echo $constancia['Titulo'] ?>by the authors:</p>
                            <div><br>&nbsp;</div>
                      <h4><?php  echo $constancia['Nombre1'] ?></h4>   
                      <h4><?php  echo $constancia['Adscripcion1'] ?></h4>   
                          <p>has been <?php  echo $constancia['Status'] ?>
                          for its presentation at the International Conference of Aerospace
                           Science and Technology (ICASST) 2023, which takes place from November 
                           19th to November 24nd, 2024. The submitted work is double-blinded 
                           peer-reviewed of its publication at Journal of Physics: Conference 
                           Series, by Institute of Physics (IOP), United Kingdom.</p>      
                           <p>Abstract: <?php  echo $constancia['Adstract'] ?></p>
                  </div>
              </div>
                    
          <?php ?>       

            <hr>

       

          <?php   $constancia = mysqli_fetch_assoc($consulta_trabajoscartas11) ?>   
              <div class="col-lg-6 mt-2 mt-lg-0">
                  <div class="box">
                      <h4> LETTER ID <?php  echo $constancia['Certificate_ID'] ?> valid!</h4>   
                        <p>The full-length article <?php  echo $constancia['Titulo'] ?>by the authors:</p>
                            <div><br>&nbsp;</div>
                      <h4><?php  echo $constancia['Nombre1'] ?></h4>   
                      <h4><?php  echo $constancia['Adscripcion1'] ?></h4>   
                          <p>has been <?php  echo $constancia['Status'] ?>
                          for its presentation at the International Conference of Aerospace
                           Science and Technology (ICASST) 2023, which takes place from November 
                           19th to November 24nd, 2024. The submitted work is double-blinded 
                           peer-reviewed of its publication at Journal of Physics: Conference 
                           Series, by Institute of Physics (IOP), United Kingdom.</p>      
                           <p>Abstract: <?php  echo $constancia['Adstract'] ?></p>
                  </div>
              </div>
                    
          <?php ?>
            </div>
      </div>

</section>


    <!-- End Attestations -->
    
  </main><!-- End #main -->


<!-----------Contador de visitas ------------------->

<div align="center">

 <div class="section-title">
   <h2>Views</h2>
 </div>

<div id="sfcc96pklym9kwelrk9tk4azww4k8pb5hj7"></div>
<script type="text/javascript"
 src="https://counter3.optistats.ovh/private/counter.js?c=c96pklym9kwelrk9tk4azww4k8pb5hj7&down=async" async></script>
<br><a href="https://www.contadorvisitasgratis.com"><!---contador de visitas web---></a><noscript><a
   href="https://www.contadorvisitasgratis.com" title="contador de visitas web"><img
     src="https://counter3.optistats.ovh/private/contadorvisitasgratis.php?c=c96pklym9kwelrk9tk4azww4k8pb5hj7"
     border="0" title="contador de visitas web" alt="contador de visitas web"></a></noscript>

</div>

 

<!-- ======= Footer ======= -->
<footer id="footer">
<div class="footer-top">
 <div class="container">
   <div class="row">

     <div class="col-lg-3 col-md-6">
       <div class="footer-info">
         <h3><font color="#5c9f24">ICASST</font></h3>
         <p>
           Alfredo S&aacutenchez <br>
           Mart&iacutenez<br>
           <strong>Webmaster</strong> <br>
           <strong></strong><br>
         </p>
         <div class="social-links mt-4">
           <a href="https://twitter.com/ICASST_Official" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
           <a href="https://www.facebook.com/people/International-Conference-on-Aerospace-Science-and-Technology/100085533155954/" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
           <a href="https://www.linkedin.com/company/international-conference-on-aerospace-science-and-technology-icasst/" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
           <!---<a href="https://youtube.com/@user-qe8jf8ti5r" class="linkedin" target="_blank"><i class="bx bxl-youtube"></i></a>--->
           <a href="https://www.instagram.com/icasst_official/" class="Instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
           <a href="https://t.me/icasst" class="telegram" target="_blank"><i class="bx bxl-telegram"></i></a>
         </div>
       </div>
     </div>

     <div class="col-lg-2 col-md-6 footer-links">
         <ul>
           <li><i class="bx bx-chevron-right"></i> <a href="#hero">Main</a></li>
           <li><i class="bx bx-chevron-right"></i> <a href="#about">CFP</a></li>
           <li><i class="bx bx-chevron-right"></i> <a href="#clients">Templates</a></li>
           <li><i class="bx bx-chevron-right"></i> <a href="#services">Speakers</a></li>
           <li><i class="bx bx-chevron-right"></i> <a href="#services">Program</a></li>
           <li><i class="bx bx-chevron-right"></i> <a href="#Committee">Committee</a></li>
           
         </ul>
     </div>

     <div class="col-lg-3 col-md-6 footer-links">
         <ul>
           <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Institutions</a></li>
           <li><i class="bx bx-chevron-right"></i> <a href="#team">Conference chairs</a></li>
           <li><i class="bx bx-chevron-right"></i> <a href="#fees">Fees</a></li>
           <li><i class="bx bx-chevron-right"></i> <a href="#venue">Venue</a></li>
           <li><i class="bx bx-chevron-right"></i> <a href="#faq">Staff</a></li>
           <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
         </ul>
     </div>

     <div class="col-lg-4 col-md-6 footer-newsletter">
       <h4>International Conference on Aerospace Science and Technology 2023</h4>
       <p>(virtual/hybrid)</p><br>
       <p><a href="https://support.google.com/chrome/answer/2392709?hl=es&co=GENIE.Platform%3DDesktop" target="_blank"><i
             class="bx bx-help-circle icon-help"></i> If you're having trouble viewing this site, clear your browsing data. 
             For more information, click here.</a></p>
       <p>If any image within this webpage is of your property, please contact us so to proceed to remove it.</p>
     
     </div>

   </div>
 </div>
</div>

<div class="container">
 <div class="copyright">
   &copy; Copyright <strong><span>ICASST 2023</span></strong>. All Rights Reserved
 </div>
 
</div>
</footer><!-- End Footer -->




<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script src="assets/js/main2.js"></script>
<script src="assets/js/main3.js"></script>



</body>

</html>
