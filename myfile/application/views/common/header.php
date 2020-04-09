<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>callupon.org</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="" name="keywords">
      <meta content="" name="description">
      <!-- Favicons -->
      <link href="<?php echo base_url();?>/assets/img/callupon_icon.png" rel="icon">
      <link href="<?php echo base_url();?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i" rel="stylesheet">
      <!-- Bootstrap CSS File -->
      <link href="<?php echo base_url();?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Libraries CSS Files -->
      <link href="<?php echo base_url();?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="<?php echo base_url();?>assets/lib/animate/animate.min.css" rel="stylesheet">
      <link href="<?php echo base_url();?>assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
      <link href="<?php echo base_url();?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
      <link href="<?php echo base_url();?>assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
      <!-- Main Stylesheet File -->
      <link href="<?php echo base_url();?>assets/css/style.css?.rnd=564" rel="stylesheet">
      <script src="<?php echo base_url();?>assets/lib/jquery/jquery.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/model.js?.rnd=3444" type="text/javascript"></script>
       <script src="<?php echo base_url();?>assets/js/common.js?.rnd=3234" type="text/javascript"></script>
      <!-- =======================================================
         Theme Name: Rapid
         Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
         Author: BootstrapMade.com
         License: https://bootstrapmade.com/license/
         ======================================================= -->
		<script data-ad-client="ca-pub-1332140303177404" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150473039-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'UA-150473039-1');
		</script>
		
   </head>
   <body>
      <!--==========================
         Header
         ============================-->
      <header id="header">
         <!--<div id="topbar">
            <div class="container">
               <div class="social-links">
                  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
               </div>
            </div>
         </div>-->
         <div class="container">
            <div class="logo float-left">
               <!-- Uncomment below if you prefer to use an image logo -->
               
             <a href="/" class="scrollto"><img src="<?php base_url();?>/assets/img/callupon_logo.png" alt="" class="img-fluid"></a>
            </div>
            <nav class="main-nav float-right d-none d-lg-block">
               <ul>
                  <li class="active"><a href="/">Home</a></li>
                  <li><a href="javascript:void(0);" onclick="javascript:start_petition();">Start Petition</a></li>
                  <li><a href="javascript:void(0);" onclick="javascript:my_petition();">My Petition</a></li>
                  <li><a href="<?php echo base_url();?>/petition/petition-list">Browse</a></li>
                  <?php 
                   if(empty($this->session->userdata('petition')) && $this->session->userdata('petition')['user_session_id']=='') { ?>
                  		<li><a class="btn big-login ml-4" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();"><i class="fa fa-sign-in mr-2" aria-hidden="true"></i> Login</a></li>
                 <?php } else {?>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle p-1" role="button" data-toggle="dropdown">
                        <img class="pic img-rounded img-circle" src="<?php base_url();?>/assets/img/profile-icon.png" alt="...">
                        <span class="caret"></span>
                     </a>
                     <ul class="dropdown-menu">
                       <!-- <li>
                           <a href="#" class="text-lowercase font-weight-normal">
                           <i class="fa fa-file-text-o mr-2" aria-hidden="true"></i> My Petitions
                           </a>
                        </li>
                        <li>
                           <a href="#" class="text-lowercase font-weight-normal">
                              <i class="fa fa-cogs mr-2" aria-hidden="true"></i> Settings
                           </a>
                        </li>
                        <li>
                           <a href="#" class="text-lowercase font-weight-normal">
                              <i class="fa fa-user-circle-o mr-2" aria-hidden="true"></i> Username
                           </a>
                        </li>-->
                        <li>
                           <a href="/user-registration/logout" class="text-lowercase font-weight-normal">
                              <i class="fa fa-sign-out mr-2" aria-hidden="true"></i> Logout
                           </a>
                        </li>
                     </ul>
                  </li>
                 <?php } ?>

               </ul>
            </nav>
            <!-- .main-nav -->
         </div>
      </header>
      <!-- #header -->
      <!--==========================
         Intro Section
         ============================-->
      <section id="intro" class="clearfix" style="background:url('<?php base_url();?>/assets/img/banner-bg.jpg')">
         <div class="container d-flex h-100">
            <div class="row justify-content-center align-self-center text-center w-100">
               <div class="col-md-12 intro-info order-md-first order-last">
                  <h2 class="text-white">360 PETITION FILING<br> <span>Solutions</span></h2>
                  <div>
                     <a href="#about" class="btn-get-started scrollto">Get Started</a>
                  </div>
               </div>
               <!--<div class="col-md-6 intro-img order-md-last order-first">
                  <img src="<?php base_url();?>/assets/img/intro-img.svg" alt="" class="img-fluid">
               </div>-->
            </div>
         </div>
      </section>
      <!-- #intro -->
      <!-- Model -->
      <div class="modal fade login" id="loginModal">
         <div class="modal-dialog login animated">
            <div class="modal-content">
               <div class="modal-header">
                  <h4 class="modal-title">Login From</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               </div>
               <div class="forgot login-footer">
                     <span>Don't have an account <a href="javascript:showRegisterForm();">Sign up</a>
                     ?</span>
                  </div>
                  <div class="forgot register-footer" style="display:none">
                     <span>Already have an account?</span>
                     <a href="javascript: showLoginForm();">Login</a>
               </div>
               <div class="modal-body">
                  <div class="box">
                     <div class="content">
                        <div class="alert alert-danger" style="display:none" id="user-login-message"></div>
                        <div class="social">
                           <a id="google_login" class="circle google" href="/user-registration/user-google-login">
                           <i class="fa fa-google-plus fa-fw text-white"></i>
                           </a>
                           <a id="facebook_login" class="circle facebook" href="/user-registration/user-facebook-login">
                           <i class="fa fa-facebook fa-fw text-white"></i>
                           </a>
                        </div>
                        <div class="division">
                           <div class="line l"></div>
                           <span>or</span>
                           <div class="line r"></div>
                        </div>
                        <div class="error"></div>
                        <div class="form loginBox">
                           <form method="" action="" accept-charset="UTF-8">
                              <input id="user_login_email_param" class="form-control" type="text" placeholder="Email" name="user_login_email_param" required>
                              <input id="user_login_password_param" class="form-control" type="password" placeholder="Password" name="user_login_password_param" required>
                              <span class="w-100 d-block p-2 text-right"><small><a href="#" >Forgot Password?</a></small></span>
                              <input class="btn btn-default btn-login" type="button" value="Login" onclick="login()">
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="box">
                     <div class="content registerBox" style="display:none;">
                        <div class="alert alert-danger" style="display:none" id="user-param-message"></div>
                        <div class="form">
                           <form method="" html="{:multipart=>true}" data-remote="true" action="" accept-charset="UTF-8">
                              <input id="user_name_param" class="form-control" type="text" placeholder="Name" name="user_name_param" required>
                              <input id="user_email_param" class="form-control" type="text" placeholder="Email" name="user_email_param" required>
                              <input id="user_mobile_param" class="form-control" type="text" placeholder="Mobile" name="user_mobile_param" required>
                              <input id="user_password_param" class="form-control" type="password" placeholder="Password" name="user_password_param" required>
                              <input id="user_confirm_password_param" class="form-control" type="password" placeholder="Confirm Password" name="user_confirm_password_param" required>
                              <input class="btn btn-default btn-register" type="button" value="Create account" name="commit" onclick="user_registration();">
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <div class="forgot login-footer">
                     <span>By joining, or logging in via Facebook, you accept callupon.org <a href="<?php echo base_url();?>information/term-and-condition">Terms of Service </a> and <a href="<?php echo base_url();?>information/privacy-policy"> Privacy Policy.</a>
                    </span>
                  </div>
               </div>
            </div>
         </div>
      </div>

         <div class="collapse navbar-collapse" id="navbarCollapse">
                  <div class="navbar-nav ml-auto">
                     <a href="" class="nav-item nav-link p-3 active">Home</a>
                     <a href="" class="nav-item nav-link p-3">About Us</a>
                     <a href="" class="nav-item nav-link p-3">Services</a>
                     <a href="" class="nav-item nav-link p-3">Contact Us</a>
                  </div>
               </div>
      <?php if($this->session->userdata('user') && isset($this->session->userdata('user')['user_session_id'])) {?>
         <li class="nav-item dropdown mr-3">
            <a class="nav-link dropdown-toggle profile-tab" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Profile
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="#"><?php echo $this->session->userdata('user')['full_name'] ?> </a>
               <?php if($this->session->userdata('user') && isset($this->session->userdata('user')['user_session_id'])) {?>
               <a class="dropdown-item" href="<?php echo base_url()?>/user_registration/logout">Logout</a>
         <?php } ?>
            </div>
         </li>


      <?php } //else { ?>

     	<!--<li class="nav-item">
   		<div class="nav-login btn" onclick="javascript:user_login();" data-toggle="modal" data-target="#modalLoginForm">
   			Login
   		</div>
   	</li>-->
   	<?php //} ?>
<script type="text/javascript">

   function login() {

      var user_email = $("#user_login_email_param").val();
      var user_password = $("#user_login_password_param").val();
      $.ajax({
               url:"/user_registration/user_login",
               type:'post',
               dataType:"json",
               data:{"user_email":user_email,"user_password":user_password},

               success:function(response) {

                  if(response.status == '1') {

                      window.location.href = '/petition/my_petition_list'
                  }
                  else {
                     
                     $("#user-login-message").html(response.message);
                     $("#user-login-message").show();
                  }
               },
               error: function() {

                  $("#user-login-message").html("Server side error try again");
                  $("#user-login-message").show();
                  
               }
       });
   }

   function user_registration() {

      var user_name = $("#user_name_param").val();
      var user_email = $("#user_email_param").val();
      var user_mobile = $("#user_mobile_param").val();
      var user_password = $("#user_password_param").val();
      var user_confirm_password = $("#user_confirm_password_param").val();
       
      $.ajax({
               url:"/user-registration/user-signup",
               type:'post',
               dataType:"json",
               data:{"user_name":user_name,"user_email":user_email,"user_mobile":user_mobile,"user_password":user_password,"user_confirm_password":user_confirm_password},
                  success:function(response) {

                  if(response.status == "1") {

                      window.location.href = '/petition/start-petition';
                  }
                  else {
                     $("#user-param-message").html(response.message);
                     $("#user-param-message").show();
                  }
               },
              
               error: function() {

                 $("#user-param-message").html(response.message);
                 $("#user-param-message").show();

               }
             });
      }

   function start_petition() {

      $.ajax({
         url:"/user_registration/get_session",
         type:'post',
         dataType:"json",
         success:function(response) {

            if(response.status == '0') {
                openLoginModal();
            }
            else {
               window.location.href = '/petition/start_petition'
            }
         },
         error: function() {
            
         }
       });
   }

   function my_petition() {

      $.ajax({
         url:"/user_registration/get_session",
         type:'post',
         dataType:"json",
         success:function(response) {

            if(response.status == '0') {
                openLoginModal();
            }
            else {
               window.location.href = '/petition/my_petition_list'
            }
         },
         error: function() {
            
         }
       });
   }
</script>
