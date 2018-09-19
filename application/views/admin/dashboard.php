<!DOCTYPE html>
<html lang="en">
<head>
<title>Maruti Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" href="<?php echo base_url();?>assets/maruti/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/maruti/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/maruti/css/uniform.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/maruti/css/select2.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/maruti/css/maruti-style.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/maruti/css/maruti-media.css" class="skin-color" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css" rel="stylesheet">

</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="#">Zona Potensi Penangkapan Ikan</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="<?php echo site_url('Info/index')?>"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>

<!--close-top-Header-menu-->
<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th-list"></i> Tables</a>
  <ul>
    <li class="active"><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li><a href="#"><i class="icon icon-user"></i> <span>Manajemen Admin</span></a> </li>  
  </ul>
</div>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> </div>
    <h1>Dashboard</h1>
  </div>

  <div class="container-fluid">

    <div class="row-fluid">
      <div class="span2">

      <div class="widget-box">
        <div class="widget-title"><span class="icon"><i class="icon-tasks"></i></span>
          <h5>Upload File Zona Ikan</h5>
        </div>
        <div class="widget-content">
            <div class="row-fluid">
              <form action="<?php echo site_url('Admin/insert_koordinat') ?>" method="post" enctype="multipart/form-data">
                      <small>Upload FIle Koordinat :</small><br>
                      <input type="file" name="koordinat[]" multiple/>
                      <br><br>

                   
                      <small>Input Tanggal :</small><br>
                      <div id="sandbox-container">
                        <div class="input-group date">
                          <input type="text" name="tanggal" class="form-control">
                          <span class="input-group-addon">
                            <i class="glyphicon glyphicon-th"></i>
                          </span>
                        </div>
                      </div>

                      <br>
                      <button type="submit" class="btn btn-success"><i class="icon-ok"></i> Submit </button>
              </form>

            </div> 
          </div>
      </div>
      </div>

      <div class="span10">
        <div class="widget-box">
          <div class="widget-title">
             <span class="icon"><i class="icon-th"></i></span> 
            <h5>Tabel Data</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Latitude</th>
                  <th>Longitude</th>
                  <th>Zona</th>
                  <th>Tanggal</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no=1;
                foreach($zppi as $zp)
                {?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $zp["latitude"] ?></td>
                    <td><?php echo $zp["longitude"] ?></td>
                    <td><?php echo $zp["zona"] ?></td>
                    <td><?php echo $zp["tanggal"] ?></td>
                  </tr>
                <?php 
                $no++;
                }?>
              </tbody>
            </table>
          </div>
        </div>
        
      </div>
    </div>
  </div>


</div>
<div class="row-fluid">
  <div id="footer" class="span12"> 2018 Pemerintah Kota Manado </div>
</div>
<script src="<?php echo base_url();?>assets/maruti/js/jquery.min.js"></script> 
<script src="<?php echo base_url();?>assets/maruti/js/jquery.ui.custom.js"></script> 
<script src="<?php echo base_url();?>assets/maruti/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>assets/maruti/js/jquery.uniform.js"></script> 
<script src="<?php echo base_url();?>assets/maruti/js/select2.min.js"></script> 
<script src="<?php echo base_url();?>assets/maruti/js/jquery.dataTables.min.js"></script> 
<script src="<?php echo base_url();?>assets/maruti/js/maruti.js"></script> 
<script src="<?php echo base_url();?>assets/maruti/js/maruti.tables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>  


<script>
  
  $(document).ready(function() {
  $("#attach").fileinput({
    'showUpload': false
  });

    $('.js-example-basic-multiple').select2();
  });

$('#sandbox-container .input-group.date').datepicker({
  todayBtn: "linked",
  format: 'yyyy-mm-dd',
  //language: "pl",
  orientation: "auto",
  autoclose: true,
  todayHighlight: true
});

</script>

</body>
</html>
