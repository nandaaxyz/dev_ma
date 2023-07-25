

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	
    <title>199512132020121006</title>

    <link
        rel="icon"
        type="image/png"
        sizes="32x32"
        href="<?php echo base_url(); ?>asset/logo.png"
    />
    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="<?php echo base_url(); ?>asset/logo.png"
    />
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>asset/gentelella/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>asset/gentelella/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(); ?>asset/gentelella/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>asset/gentelella/build/css/custom.css" rel="stylesheet">
    
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/js/jquery/jquery-ui.css" />
  </head>


  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a class="site_title"><img src="<?php echo base_url(); ?>asset/img/logo.png" alt="..." style="height : 40px"><span>Rekrutmen</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url(); ?>asset/img/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Yth, </span>
                <h2>Pengguna</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">

                  <li><a><i class="fa fa-edit"></i> Base <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>">Base</a></li>
                    </ul>
                  </li>

                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="background-color : rgba(97, 128, 95, 0.58);">
                    <img src="<?php echo base_url(); ?>asset/img/user.png" alt=""><span style="color:white">
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a><i class="fa fa-user pull-left"></i>Level User : You</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
            <?php $this->load->view('admin/'.$page); ?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <br><br>
        <footer>
          <div class="pull-right">
            Copyright &#169;<?php echo date("Y"); ?> <a href="https://pa-cilegon.go.id">Pengadilan Agama Cilegon</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>asset/gentelella/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>asset/gentelella/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>asset/gentelella/fastclick/lib/fastclick.js"></script>

    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url(); ?>asset/gentelella/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/gentelella/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- jQuery Tags Input -->
    <script src="<?php echo base_url(); ?>asset/gentelella/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>asset/gentelella/build/js/custom.js"></script>

	  <script src="<?php echo base_url(); ?>asset/js/jquery/jquery-ui.js"></script>
  </body>

<style>
    .pagination > li.disabled > a
    {
        border-color: #000;
    }
    .pagination > li > a
    {
        border-color: #000;
        background-color: #26b99a;
        color: white;
    }
</style>
  