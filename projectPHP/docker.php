<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>callupon.org</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="" name="keywords">
      <meta content="" name="description">
      <!-- Favicons -->
      <link href="http://petition.sheenz.in//assets/img/callupon_icon.png" rel="icon">
      <link href="http://petition.sheenz.in//assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i" rel="stylesheet">
      <!-- Bootstrap CSS File -->
      <link href="http://petition.sheenz.in/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Libraries CSS Files -->
      <link href="http://petition.sheenz.in/assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="http://petition.sheenz.in/assets/lib/animate/animate.min.css" rel="stylesheet">
      <link href="http://petition.sheenz.in/assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
      <link href="http://petition.sheenz.in/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
      <link href="http://petition.sheenz.in/assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
      <!-- Main Stylesheet File -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <link href="http://petition.sheenz.in/assets/css/style.css?.rnd=564" rel="stylesheet">
      <script src="http://petition.sheenz.in/assets/lib/jquery/jquery.min.js"></script>
      <script src="http://petition.sheenz.in/assets/js/model.js?.rnd=3444" type="text/javascript"></script>
       <script src="http://petition.sheenz.in/assets/js/common.js?.rnd=3234" type="text/javascript"></script>
      <!-- =======================================================
         Theme Name: Rapid
         Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
         Author: BootstrapMade.com
         License: https://bootstrapmade.com/license/
         ======================================================= -->
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
               
             <a href="/" class="scrollto"><img src="http://petition.sheenz.in/assets/img/callupon_logo.png" alt="" class="img-fluid"></a>
            </div>
            <nav class="main-nav float-right d-none d-lg-block">
               <ul>
                  <li class="active"><a href="/">Home</a></li>
                  <li><a href="javascript:void(0);" onclick="javascript:start_petition();">Start Petition</a></li>
                  <li><a href="javascript:void(0);" onclick="javascript:my_petition();">My Petition</a></li>
                  <li><a href="http://petition.sheenz.in//petition/petition-list">Browse</a></li>
                                    <li class="dropdown">
                     <a href="#" class="dropdown-toggle p-1" role="button" data-toggle="dropdown">
                        <img class="pic img-rounded img-circle" src="http://petition.sheenz.in/assets/img/profile-icon.png" alt="...">
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
                           <a href="http://petition.sheenz.in/user-registration/logout" class="text-lowercase font-weight-normal">
                              <i class="fa fa-sign-out mr-2" aria-hidden="true"></i> Logout
                           </a>
                        </li>
                     </ul>
                  </li>
                 
               </ul>
            </nav>
            <!-- .main-nav -->
         </div>
      </header>
      <!-- #header -->
      <!--==========================
         Intro Section
         ============================-->
      <section id="intro" class="clearfix" style="background:url('http://petition.sheenz.in/assets/img/banner-bg.jpg')">
         <div class="container d-flex h-100">
            <div class="row justify-content-center align-self-center text-center w-100">
               <div class="col-md-12 intro-info order-md-first order-last">
                  <h2 class="text-white">360 PETITION FILING<br> <span>Solutions</span></h2>
                  <div>
                     <a href="#about" class="btn-get-started scrollto">Get Started</a>
                  </div>
               </div>
               <!--<div class="col-md-6 intro-img order-md-last order-first">
                  <img src="http://petition.sheenz.in/assets/img/intro-img.svg" alt="" class="img-fluid">
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
                           <a id="google_login" class="circle google" href="http://petition.sheenz.in/user-registration/user-google-login">
                           <i class="fa fa-google-plus fa-fw text-white"></i>
                           </a>
                           <a id="facebook_login" class="circle facebook" href="http://petition.sheenz.in/user-registration/user-facebook-login">
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
                              <span class="w-100 d-block p-2 text-right"><small><a href="http://petition.sheenz.in/user-registration/forgot-password" >Forgot Password?</a></small></span>

                             <!-- <span class="w-100 d-block p-2 text-right"><small><a href="#" data-toggle="modal" data-target="#forgotpassword" class="forgot-password-pop-up" >Forgot Password?</a></small></span>-->
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
                     <span>By joining, or logging in via Facebook, you accept callupon.org <a href="http://petition.sheenz.in/information/term-and-condition">Terms of Service </a> and <a href="http://petition.sheenz.in/information/privacy-policy"> Privacy Policy.</a>
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
      
      <!--<li class="nav-item">
         <div class="nav-login btn" onclick="javascript:user_login();" data-toggle="modal" data-target="#modalLoginForm">
            Login
         </div>
      </li>-->
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

                      window.location.href = 'http://petition.sheenz.in/petition/my_petition_list'
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

                      window.location.href = 'http://petition.sheenz.in/petition/start-petition';
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
               window.location.href = 'http://petition.sheenz.in/petition/start_petition'
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

<script>



   </script>

<!-- forgot passaword pop up -->
<div id="forgotpassword" class="modal fade sec-popup"  role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal">&times;</button>

            <form>
               <div class="row">
               <div class="col-lg-12">
      <h4 class="text-center pt-4">Forgot Password</h4>
      <p class="mb-3">Enter your email address here, then check your inbox for a link to reset your password.</p>
      <div class="row p-3 mb-3 white text-dark">
      <div class="col-md-12">
      <div class="alert alert-danger" role="alert">
                        <small>
                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error Box
                        </small>
                     </div>
      </div>
               <div class="col-md-12">
                  <form action="#">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group form-group-sm">
                              <label for="firstname" class="control-label">Enter your Email</label>
                              <input type="text" class="form-control" id="" placeholder="Enter you E-mail">
                           </div>
                        </div>
</div>
                     <div class="row">
                        <div class="col-xs-12 mt-2 pl-3">
                           <button type="submit" class="btn btn-primary">Reset Password</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
   </div>
                  </div>
               </form>
          </div>
        </div>
      </div>
    </div>

    <main id="main">
<section class="pt-3">
         <div class="container">
               <h1>Docker</h1>
               <p><strong><a href="#"><i class="fa fa-bars" aria-hidden="true"></i> Menu</a></strong>&nbsp;&nbsp;&nbsp;<strong><a href="#"><i class="fa fa-eye" aria-hidden="true"></i> View petition</a></strong></p>
         </div>
      </section>
      <hr>
      <section>
         <div class="container" style="margin-top:30px">
            <div class="row">
               <div class="col-sm-8">
                  <div class="bg-light border p-4">
                     <h2>Share your petition</h2>
                     <p>Successful petition starters share their petition about 12 times. Try to share on as many different platforms as you can, and be sure to ask others to sign and share your petition to build momentum!</p>
                     <label class="w-100">
                     <input type="text" class="m-2 form-control d-inline w-75" alt="url_path" placeholder="http://chng.it/zLJvCv4c">
                     <a href="#" class="text-dark btn border bg-white m-2"><i class="fa fa-link" aria-hidden="true"></i> Copy link</a>
                     </label>
                     <hr>
                     <!--<div>
                        <button  class="col-m-4 rounded" type="btn btn-info"><a href="#">Facebook</a></button>
                        <button  class="col-m-4 rounded" type="btn btn-info"><a href="#">Gmail</a></button>
                        <button  class="col-m-4 rounded" type="btn btn-info"><a href="#">Tweet</a></button>
                        <button  class="col-m-4 rounded" type="btn btn-info"><a href="#">Email</a></button>
                        <button  class="col-m-4 rounded" type="btn btn-info"><a href="#">WhatsApp</a></button>
                     </div>-->
                     <div class="bg-light border">
                           <a href="#" class="text-dark btn border bg-white m-2 mr-3"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a>
                           <a href="#" class="text-dark btn border bg-white mr-3"><i class="fa fa-google" aria-hidden="true"></i> Gamil</a>
                           <a href="#" class="text-dark btn border bg-white mr-3"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</a>
                           <a href="#" class="text-dark btn border bg-white mr-3"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email</a>
                           <a href="#" class="text-dark btn border bg-white"><i class="fa fa-whatsapp" aria-hidden="true"></i> Whatsapp</a>
                        </div>
                     
                  </div>
               </div>
               <div class="col-sm-4 float-right">
                     <div class="border">
                           <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
                        <div class="supporters-container text-center mt-3">
                           <h5 class="label ">Only <strong>30 more</strong> Supporters to the next Goal!</h5>
                        </div>
                        <hr>
                        <div class="row pb-4">
                           <div class="col text-center"><strong>18 Views</strong></div>
                           <div class="col text-center"><strong>| </strong></div>
                           <div class="col text-center"><strong>20 Shares</strong></div>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
      </section>
      <section>
         <div class="container" style="margin-top:30px">
            <div class="row">
               <div class="col-sm-8">
                  <div class="light-bg border p-4">
                     <h2>Update your supporters</h2>
                     <p>
                        Send an update to share news and developments on your petition, media coverage, to say thanks, or ask for help you need to win! Updates that you post will appear on your petition and be emailed to your supporters.
                     </p>
                     <!--<label>
                     <button  class="col-m-8 rounded" type="btn btn-info"><a href="#">Post an Update</a></button>
                     </label>-->
                     <div class="btn btn-info col-md-4">
                        <a href="#" class="text-white"><strong>Post an Update</strong></a>
                     </div>

                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="bg-light border p-4">
                     <div class="text-left">
                        <strong>Recent Supporters</strong>
                     </div>
                     <hr>
                     <div class="text-left">
                        <p><strong><i class="fa fa-user-circle-o" aria-hidden="true"></i> Sachin Sharma </strong><span>signed 6 days ago</span></p>
                        <p><strong><i class="fa fa-user-circle-o" aria-hidden="true"></i> love love </strong><span>signed 1 week ago</span></p>
                        <p><strong><i class="fa fa-user-circle-o" aria-hidden="true"></i> Nelson Kumar </strong><span>signed 1 week ago</span></p>
                     </div>
                     <br>
                     <hr>
                     <div class="text-left">
                        <h4>Full supporter list</h4>
                        <p>Get a full list of your supporters' signatures and comments emailed to you.</p>
                        <div class="dropdown col-md-12">
                           <button type="button" class="btn btn-primary dropdown-toggle col-md-6 mb-2" data-toggle="dropdown">
                           Signatures(PDF)
                           </button>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Signatures(PDF)</a>
                              <a class="dropdown-item" href="#">Commnets(PDF)</a>
                              <a class="dropdown-item" href="#">Signatures(SpredSheet)</a>
                              <a class="dropdown-item" href="#">Commnets(SpredSheet)</a>
                           </div>
                           <!--<button class="rounded" type="btn-primary">Get list</button>-->
                           <div class="btn btn-info col-md-4">
                              <a href="#" class="text-white">Get list</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="container">
            <h3 class="ml-2 mt-3">Petition checklist</h3>
            <ul class="list-group docker">
               <li class="list-group-item rounded">
                  <h5>How to Add a Picture to an Android Phone Contact</h5>
                  <p>To add a picture to a contact on your Android, you can snap a picture and save it, grab a picture from the Internet, or use any image already stored in the phone’s Gallery app. The image doesn’t even have to be a picture of the contact — any image will do</p>
               </li>
               <li class="list-group-item rounded">
                  <h5>How to Add a Picture to an Android Phone Contact</h5>
                  <p>To add a picture to a contact on your Android, you can snap a picture and save it, grab a picture from the Internet, or use any image already stored in the phone’s Gallery app. The image doesn’t even have to be a picture of the contact — any image will do</p>
               </li>
               <li class="list-group-item rounded">
                  <h5>How to Add a Picture to an Android Phone Contact</h5>
                  <p>To add a picture to a contact on your Android, you can snap a picture and save it, grab a picture from the Internet, or use any image already stored in the phone’s Gallery app. The image doesn’t even have to be a picture of the contact — any image will do</p>
               </li>
               <li class="list-group-item rounded">
                  <h5>How to Add a Picture to an Android Phone Contact</h5>
                  <p>To add a picture to a contact on your Android, you can snap a picture and save it, grab a picture from the Internet, or use any image already stored in the phone’s Gallery app. The image doesn’t even have to be a picture of the contact — any image will do</p>
               </li>
               <li class="list-group-item rounded">
                  <h5>How to Add a Picture to an Android Phone Contact</h5>
                  <p>To add a picture to a contact on your Android, you can snap a picture and save it, grab a picture from the Internet, or use any image already stored in the phone’s Gallery app. The image doesn’t even have to be a picture of the contact — any image will do</p>
               </li>
               <li class="list-group-item rounded">
                  <h5>How to Add a Picture to an Android Phone Contact</h5>
                  <p>To add a picture to a contact on your Android, you can snap a picture and save it, grab a picture from the Internet, or use any image already stored in the phone’s Gallery app. The image doesn’t even have to be a picture of the contact — any image will do</p>
               </li>
               <li class="list-group-item rounded">
                  <h5>How to Add a Picture to an Android Phone Contact</h5>
                  <p>To add a picture to a contact on your Android, you can snap a picture and save it, grab a picture from the Internet, or use any image already stored in the phone’s Gallery app. The image doesn’t even have to be a picture of the contact — any image will do</p>
               </li>
               <li class="list-group-item rounded pt-4 pb-4">
                  <h6 class="d-inline">Explain the problem you want to solve</h6>
                  <i class="fa fa-check float-right" aria-hidden="true"></i>
               </li>
               <li class="list-group-item rounded pt-4 pb-4">
                  <h6 class="d-inline">Choose a decision maker</h6>
                  <i class="fa fa-check float-right" aria-hidden="true"></i>
               </li>
               <li class="list-group-item rounded pt-4 pb-4">
                  <h6 class="d-inline">Write a title</h6>
                  <i class="fa fa-check float-right" aria-hidden="true"></i>
               </li>
            </ul>
         </div>
      </section>
      <br><br>
      <section>
         <div class="container">
         <div class="row">
         <div class="col-md-8">
            <h3>Petition guide</h3>
            <p><i class="fa fa-file-text-o fa-4x pr-3 float-left pt-3 pb-3" aria-hidden="true"></i> Our petition guide has resources to help you start a petition, build your <br>campaign, and reach your goal
            </p>
            <div class="row">
               <div class="col-sm-4">
                  <ol type="1">
                     <li>
                        <a href="#"><u>Create your petition</u></a>
                     </li>
                     <li>
                        <a href="#"><u>Share your petition</u></a>
                     </li>
                     <li>
                        <a href="#"><u>Build momentum</u></a>
                     </li>
                  </ol>
               </div>
               <div class="col-sm-4">
                  <ol type="1">
                     <li>
                        <a href="#"><u>Reach out to the media</u></a>
                     </li>
                     <li>
                        <a href="#"><u>Engage your decision maker</u></a>
                     </li>
                     <li>
                        <a href="#"><u>Declare victory</u></a>
                     </li>
                  </ol>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <h3>Manage petition</h3>
            <p>Did you come to an agreement with your decision maker? Declare your petition a victory and let your supporters know how they helped make it happen.</p>
            <div class="row">
               <div class="btn btn-info col-md-6 mb-3 mr-5">
                  <a href="#" class="text-white">Declare victory</a>
               </div>
               <div class="btn btn-default bg-light border mb-2 col-md-6">
                  <a href="#" class="text-underline"><u>Close petition</u></a>
               </div>
            </div>
            <!--<lebel>
               <button type="button" class="btn btn-info">Declare victory</button></a>&nbsp;&nbsp;&nbsp;
               <a href="#"><u>Close petition</u></a>
            </lebel>-->
            <div>
            </div>
         </div>
      </section>
</main>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script>
         Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: 0,
        plotShadow: false
    },
    title: {
        text: '1000<br>Supporters<br>',
        align: 'center',
        verticalAlign: 'middle',
        y: 60
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            dataLabels: {
                enabled: true,
                distance: -50,
                style: {
                    fontWeight: 'bold',
                    color: 'white'
                }
            },
            startAngle: -90,
            endAngle: 90,
            center: ['50%', '75%'],
            size: '110%'
        }
    },
    series: [{
        type: 'pie',
        name: 'Supporters',
        innerSize: '90%',
        data: [
            ['', 70],
            {
                name: 'Remaining',
                y: 30,
                dataLabels: {
                    enabled: false
                }
            }
        ]
    }]
});

      </script><!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-12">

            <div class="row">

                <div class="col-sm-6">

                  <div class="footer-info">
                    <h3>Petition</h3>
                    <p>The Forts in Maharashtra depict the valour of great leaders like Chhatrapati Shivaji Maharaj and our glorious history. However the Government of Maharashtra has decided to convert these forts Heritage Hotels and Wedding Venue.</p>
                  </div>

                  <div class="footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>To subscribe our newsletter, Enter your E-mail id.</p>
                    <form action="" method="post">
                      <input type="email" name="email"><input type="submit"  value="Subscribe">
                    </form>
                  </div>

                </div>

                <div class="col-sm-3">
                  <div class="footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                      <li><a href="http://petition.sheenz.in/information/index">Home</a></li>
                      <li><a href="http://petition.sheenz.in/information/about-us">About us</a></li>
                      <!--<li><a href="#">Services</a></li>-->
                      <li><a href="http://petition.sheenz.in/information/term-and-condition">Terms of service</a></li>
                      <li><a href="http://petition.sheenz.in/information/privacy-policy">Privacy policy</a></li>
                    </ul>
                  </div>
                </div>
                  <div class="col-sm-3">
                  <div class="footer-links">
                    <h4>Contact Us</h4>
                    <p>
                <!-- Pru Digital Media<br>
                 Noida One, Sector 62, Noida<br>
                      <strong>Phone:</strong> +1 5589 55488 55<br>-->
                      <strong>Email:</strong> info@callupon.org<br>
                    </p>
                  </div>

                  <div class="social-links">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  </div>

                </div>

            </div>

          </div>

        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Petition</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
        -->
        Designed by <a href="">Prudigital Media Pvt Ltd</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->
<script>
  $(function () {
  $(document).scroll(function () {
     var $nav = $("#header");
     $nav.toggleClass('header-scrolled', $(this).scrollTop() > $nav.height());
   });
});
  </script>
  <!-- JavaScript Libraries -->
  <script src="https://petition.sheenz.in/assets/lib/jquery/jquery-migrate.min.js"></script>
  <script src="https://petition.sheenz.in/assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://petition.sheenz.in/assets/lib/easing/easing.min.js"></script>
  <script src="https://petition.sheenz.in/assets/lib/mobile-nav/mobile-nav.js"></script>
  <script src="https://petition.sheenz.in/assets/lib/wow/wow.min.js"></script>
  <script src="https://petition.sheenz.in/assets/lib/waypoints/waypoints.min.js"></script>
  <script src="https://petition.sheenz.in/assets/lib/counterup/counterup.min.js"></script>
  <script src="https://petition.sheenz.in/assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="https://petition.sheenz.in/assets/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="https://petition.sheenz.in/assets/lib/lightbox/js/lightbox.min.js"></script>
</body>
</html>
