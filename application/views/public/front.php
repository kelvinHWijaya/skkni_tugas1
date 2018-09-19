<!DOCTYPE html>
<html lang="en">

<!--================================================================================
  Item Name: Materialize - Material Design Admin Template
  Version: 3.1
  Author: GeeksLabs
  Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Perhitungan Dasar</title>

    <!-- Favicons-->
    <link rel="icon" href="<?php echo base_url('assets/materialize') ?>/images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/materialize') ?>/images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="<?php echo base_url('assets/materialize') ?>/images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->    
    <link href="<?php echo base_url('assets/materialize') ?>/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url('assets/materialize') ?>/css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS for full screen (Layout-2)-->    
    <link href="<?php echo base_url('assets/materialize') ?>/css/layouts/style-fullscreen.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="<?php echo base_url('assets/materialize') ?>/css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">

    <link href="<?php echo base_url('assets/materialize') ?>/js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="<?php echo base_url('assets/materialize') ?>/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url('assets/materialize') ?>/js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url('assets/materialize') ?>/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet" >
   

    <style>
    body {
     display: flex;
     min-height: 100vh;
     flex-direction: column;
     }
     main {
         flex: 1 0 auto;
     }

     
  </style>

</head>

<body>
    <!-- Start Page Loading -->
    <!-- <div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div> -->
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

<?php $this->load->view('public/header');?>

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <main>
            <section id="content">

                    <div id="work-collections">
                        <div class="row">
                            
                            <div class="col s12 m12 l12">
                                <div class="map-card">
                                    <div style="padding:10px" class="card">
                                      <!-- Form inputan -->
                                      <form action="<?php echo site_url('C_public/submitted') ?>" method="post">
                                        <strong>Pilih operasi perhitungan dan input 2 angka:</strong><br>
                                        <br>
                                        <div class="row">
                                          <div class="input-field col s6">

                                        <!-- input pilihan operasi matematik -->
                                        <select name="operasi">
                                          <option value="1" selected>Tambah</option>
                                          <option value="2">Kurang</option>
                                          <option value="3">Kali</option>
                                          <option value="4">Bagi</option>
                                        </select>


                                      </div>
                                      </div>

                                      <!-- Input Angka -->
                                        <div class="row">
                                        <div class="input-field col s3">
                                        <input id="first" name="num1" type="text" class="validate" required>
                                        <label for="first_name">Angka 1</label>
                                      </div>
                                      <div class="input-field col s3">
                                        <input id="second" name="num2" type="text" class="validate" required>
                                        <label for="second">Angka 2</label>
                                      </div>
                                      </div>


                                      <div class="row">
                                      <button type="submit" class="btn blue"><i class="fa fa-add"></i>Submit</button>
                                      </div> 
                                      <!-- Akhir Form Inputan --> 
                                      </form>

                                      <!-- Kondisi untuk menampilkan hasil hanya jika nilai tersebut telah ditentukan -->
                                      <?php if(isset($result)){?>
                                      <div class="row">
                                      <b>Hasil Operasi : <?php echo $result;?></b><br>
                                      
                                      <b>Terbilang : <?php echo $terbilang?></b>

                                      <?php 
                                        $pieces = explode(" ", strtolower($terbilang));
                                        $total = count($pieces);
                                      ?>

                                      <input type="hidden" id="terbilang" value="<?php echo $terbilang?>">
                                      <div class="audio">
                                        <audio id="satu" src="<?php echo base_url('assets')?>/audio/new/1.MP3"></audio> 
                                        <audio id="dua" src="<?php echo base_url('assets')?>/audio/new/2.MP3"></audio>
                                        <audio id="tiga" src="<?php echo base_url('assets')?>/audio/new/3.MP3"></audio>
                                        <audio id="empat" src="<?php echo base_url('assets')?>/audio/new/4.MP3"></audio>
                                        <audio id="lima" src="<?php echo base_url('assets')?>/audio/new/5.MP3"></audio>
                                        <audio id="enam" src="<?php echo base_url('assets')?>/audio/new/6.MP3"></audio>
                                        <audio id="tujuh" src="<?php echo base_url('assets')?>/audio/new/7.MP3"></audio>
                                        <audio id="delapan" src="<?php echo base_url('assets')?>/audio/new/8.MP3"></audio>
                                        <audio id="sembilan" src="<?php echo base_url('assets')?>/audio/new/9.MP3"></audio>
                                        <audio id="sepuluh" src="<?php echo base_url('assets')?>/audio/new/sepuluh.MP3"></audio>
                                        <audio id="sebelas" src="<?php echo base_url('assets')?>/audio/new/sebelas.MP3"></audio> 
                                        <audio id="belas" src="<?php echo base_url('assets')?>/audio/new/belas.MP3"></audio> 
                                        <audio id="puluh" src="<?php echo base_url('assets')?>/audio/new/puluh.MP3"></audio> 
                                         
                                        <audio id="ratus" src="<?php echo base_url('assets')?>/audio/new/ratus.MP3"></audio> 
                                        <audio id="seratus" src="<?php echo base_url('assets')?>/audio/new/seratus.MP3"></audio> 
                                      </div>
                                      <br>
                                      <button onclick="panggil()" class="btn green"><i class="mdi-av-volume-up"></i></button>
                                      </div>

                                    <?php } ?>
                                    <!-- akhir tampilan hasil -->
                                    
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!--work collections end-->

                    <!-- Floating Action Button -->
                    <!-- <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                        <a class="btn-floating btn-large">
                          <i class="mdi-action-stars"></i>
                        </a>
                        <ul>
                          <li><a href="css-helpers.html" class="btn-floating red"><i class="large mdi-communication-live-help"></i></a></li>
                          <li><a href="app-widget.html" class="btn-floating yellow darken-1"><i class="large mdi-device-now-widgets"></i></a></li>
                          <li><a href="app-calendar.html" class="btn-floating green"><i class="large mdi-editor-insert-invitation"></i></a></li>
                          <li><a href="app-email.html" class="btn-floating blue"><i class="large mdi-communication-email"></i></a></li>
                        </ul>
                    </div> -->
                    <!-- Floating Action Button -->
                    </section>
  </main>
    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <footer class="page-footer">
        <div class="container">
                <div class="col l4 offset-l2 s12">
                    <p class="grey-text text-lighten-4">2018 @ SKKNI.</p>
                </div>
        </div>
    </footer>
    <!-- END FOOTER -->
    
    </div>

    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/plugins/jquery-1.11.2.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <!-- chartjs -->
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/plugins/chartjs/chart.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/plugins/chartjs/chart-script.js"></script>

    <!-- sparkline --> 
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/plugins/sparkline/sparkline-script.js"></script>
    
    <!-- google map api -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script> -->
   <!--  <script type="text/javascript" src="//maps.google.com/maps/api/js?v=3&key=AIzaSyBRUEbUSEYDDmFFlmySh-wJhXfzJNi9hrQ&callback=initialize&sensor=false&libraries=places"></script> -->

    <!--jvectormap-->
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/plugins/jvectormap/vectormap-script.js"></script>        
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/custom-script.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/plugins/data-tables/data-tables-script.js"></script>

    <!-- Toast Notification -->
   
    <script>
      $( document ).ready(function() {
        panggil();
      });
      function panggil()
      {
        <?php 
        $x=0;
        foreach($pieces as $pi){?>
          var kata = '<?php echo $pi?>';
          console.log(kata);
          setTimeout(suara,900*<?php echo $x?>,kata);     
        <?php 
        $x++;
        } ?>
      }
      function suara(kata) {document.getElementById(kata).play();}
    </script>
</body>

</html>