<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title><?=$judul?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/style-responsive.css" rel="stylesheet">

    <script src="<?=base_url()?>assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?=base_url('index.php/buku/dashboard')?>" class="logo"><b>SEPATU SUPER</b></a>
            <!--logo end-->
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li>
                    <a class="logout" href="<?=base_url('index.php/user/logout')?>" onclick="return confirm('Logout Akun ?')">
                    Logout
                    </a>
                    </li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="<?=base_url()?>assets/img/ui-sam1.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?=$this->session->userdata('nama_user')?></h5>
              	  	
                  <li class="mt">
                      <a class="active" href="<?=base_url('index.php/buku/dashboard')?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="<?=base_url('index.php/buku/toko')?>" >
                          <i class="fa fa-desktop"></i>
                          <span>Toko</span>
                      </a>
                  </li>
                  <?php if($this->session->userdata('level')=="Admin"):?>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Data Sepatu <i class="fa fa-chevron-down"></i></span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?=base_url('index.php/Buku')?>">Daftar Sepatu</a></li>
                          <li><a  href="<?=base_url('index.php/Kategori')?>">Kategori</a></li>
                      </ul>
                  </li>
                  <?php elseif($this->session->userdata('level')=="kasir"):?>
                  <li class="sub-menu">
                      <a href="<?=base_url('index.php/Transaksi')?>" >
                          <i class="fa fa-money"></i>
                          <span>Transaksi</span>
                      </a>
                  </li>
                  <?php endif?>
                  <li class="sub-menu">
                      <a href="<?=base_url('index.php/pesanan')?>" >
                          <i class="fa fa-bookmark"></i>
                          <span>History Pemesanan</span>
                      </a>
                  </li>
                
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          <?php
            $this->load->view($konten);
          ?>
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2019 - Hendik Endtato
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?=base_url()?>assets/js/jquery.js"></script>
    <script src="<?=base_url()?>assets/js/jquery-1.8.3.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?=base_url()?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?=base_url()?>assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="<?=base_url()?>assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="<?=base_url()?>assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="<?=base_url()?>assets/js/sparkline-chart.js"></script>    
	<script src="<?=base_url()?>assets/js/zabuto_calendar.js"></script>	
	
	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashgum!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: '<?=base_url()?>assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
