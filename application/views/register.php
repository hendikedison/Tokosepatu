<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
     
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <style type="text/css">
    body {
        color: #999;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
	}
	.form-control {
		box-shadow: none;
		border-color: #ddd;
	}
	.form-control:focus {
		border-color: #0975D4; 
	}
	.login-form {
        width: 350px;
		margin: 0 auto;
		padding: 30px 0;
	}
    .login-form form {
        color: #434343;
		border-radius: 1px;
    	margin-bottom: 15px;
        background: #fff;
		border: 1px solid #f3f3f3;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
	}
	.login-form h4 {
		text-align: center;
		font-size: 22px;
        margin-bottom: 20px;
	}
    .login-form .avatar {
        color: #fff;
		margin: 0 auto 30px;
        text-align: center;
		width: 100px;
		height: 100px;
		border-radius: 50%;
		z-index: 9;
		background: #0975D4;
		padding: 15px;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
    .login-form .avatar i {
        font-size: 62px;
    }
    .login-form .form-group {
        margin-bottom: 20px;
    }
	.login-form .form-control, .login-form .btn {
		min-height: 40px;
		border-radius: 2px; 
        transition: all 0.5s;
	}
	.login-form .close {
        position: absolute;
		top: 15px;
		right: 15px;
	}
	.login-form .btn {
		background: #0975D4;
		border: none;
		line-height: normal;
	}
	.login-form .btn:hover, .login-form .btn:focus {
		background: #42ae68;
	}
    .login-form .checkbox-inline {
        float: left;
    }
    .login-form input[type="checkbox"] {
        margin-top: 2px;
    }
    .login-form .forgot-link {
        float: right;
    }
    .login-form .small {
        font-size: 13px;
    }
    .login-form a {
        color: #0975D4;
    }  
</style>
    <title>SIGN UP | Toko Sepatu Online</title>

  </head>

  <body>
      <div class="login-form">    
          <form action="<?=base_url('index.php/user/simpan')?>" method="post">
		        <div class="avatar"><i class="material-icons">lock</i></div>
    	        <h4 class="modal-title">Sign In Account</h4>

          <div class="form-group">
            <input name ="nama_user" id ="nama_user" type="text" class="form-control" placeholder="Nama Lengkap" required="required">
          </div>
          <div class="form-group">
            <input name ="username" id ="username" type="text" class="form-control" placeholder="Username" required="required">
          </div>
          <div class="form-group">
            <input name ="password" id="password" type="password" class="form-control" placeholder="Password" required="required">
          </div>
          <div class="form-group small clearfix">
            <input type="checkbox" name="level"> Saya Menyetujui Persyaratan sebagai Kasir
          </div> 
        
          <input name="daftar" type="submit" class="btn btn-primary btn-block btn-lg" value="Register">              
        <?php
          if($this->session->flashdata('pesan')!= null){
            echo"<div class='alert alert-success' style='width:300px'>".$this->session->flashdata('pesan')."</div";
          }?>
        </form>			
        <div class="text-center small">Already have account yet? <a href="<?=base_url('index.php/user')?>">Login now !</a></div>
  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?=base_url()?>assets/js/jquery.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?=base_url()?>assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
