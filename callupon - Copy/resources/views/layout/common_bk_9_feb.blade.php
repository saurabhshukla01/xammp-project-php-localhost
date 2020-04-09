<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Callupon.org</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Tajawal:300,400,500,700,800,900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="http://localhost/callupon/assets/css/bootstrap.min.css">
      <!-- Main Stylesheet File -->
      <link href="http://localhost/callupon/assets/css/style.css" rel="stylesheet">
   </head>
   <body>
      <header class="header-bg">
         <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
               <a href="http://localhost/callupon/" class="navbar-brand"><img src="http://localhost/callupon/assets/images/callupon_logo.png" alt="" style="width:250px;" /></a>
               <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarCollapse">
                  <div class="navbar-nav ml-auto">
                     <a href="http://localhost/callupon/" class="nav-item nav-link p-3 active">HOME</a>
                     <a href="http://localhost/callupon/petition/start_petition" class="nav-item nav-link p-3">START PETITION</a>
                     <a href="http://localhost/callupon/petition/my_petition_list" class="nav-item nav-link p-3">MY PETITION</a>
                     <a href="http://localhost/callupon/petition/petition-list" class="nav-item nav-link p-3">BROWSE</a>
                  </div>
                  <div class="navbar-nav">
                     <a href="#" class="nav-item nav-link p-2 btn btn-primary callupon-btn mr-2" class="btn btn-primary" data-toggle="modal" data-target="#LoginModal">Login</a>
                     <!--<a href="#" class="nav-item nav-link p-2 btn btn-primary callupon-btn" class="btn btn-primary" data-toggle="modal" data-target="#SignupModal">Sign up</a>-->
                  </div>
               </div>
            </nav>
         </div>
      </header>
      <section class="text-center pt-5 pb-5" style="background:url('http://localhost/callupon/assets/images/banner-bg.jpg')">
         <div class="container pt-5">
            <span class="text-center p-5 mt-5 text-white b-font">The world’s platform for change</span>
            <br />
            <span class="s-font text-white pb-5">294,313,275 people taking action.<a href="" class="text-danger"> Victories every day.</a></span>
         </div>
         <div class="btn callupon-btn mt-5 mb-5"><a href="http://localhost/callupon/petition/start_petition">Start a Petition</a></div>
         </div>
      </section>
      <div class="container">
         @yield('main')
      </div>
      <footer class="footer">
         <div class="container bottom_border">
            <div class="row">
               <div class=" col-sm-4 col-md col-sm-4  col-12 col">
                  <h5 class="headin5_amrc col_white_amrc pt2">PETITION</h5>
                  <!--headin5_amrc-->
                  <p class="mb10 word-break">The Forts in Maharashtra depict the valour of great leaders like Chhatrapati Shivaji Maharaj
                  and our glorious history. However the Government of Maharashtra has decided to convert these forts Heritage
                  Hotels and Wedding Venue.</p>
               </div>
               <div class=" col-sm-4 col-md  col-6 col">
                  <h5 class="headin5_amrc col_white_amrc pt2">Contact Us</h5>
                  <!--headin5_amrc-->
                  <p><i class="fa fa-location-arrow"></i> c-410 sec 62 Noida </p>
                  <p><i class="fa fa-phone"></i> +91-9999999999 </p>
                  <p><i class="fa fa fa-envelope"></i> prudigital.media@gmail.com </p>
                  <!--footer_ul_amrc ends here-->
               </div>
               <div class=" col-sm-4 col-md  col-6 col">
                  <h5 class="headin5_amrc col_white_amrc pt2">Uses Links</h5>
                  <!--headin5_amrc-->
                  <ul class="footer_ul_amrc">
                     <li><a href="http://localhost/callupon/">Home</a></li>
                     <li><a href="#">About us</a></li>
                     <li><a href="#">Terms of service</a></li>
                     <li><a href="#">Privacy policy</a></li>
                  </ul>
                  <!--footer_ul_amrc ends here-->
               </div>
               <div class=" col-sm-4 col-md  col-12 col">
                  <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
                  <!--headin5_amrc ends here-->
                  <ul class="footer_ul2_amrc">
                     <li>
                        <a href=""><i class="fa fa-twitter fleft padding-right text-white"></i> </a>
                        <p>On-Screen Violence Against Women And Girls Need Statutory Warnings Too <a href="https://localhost/callupon" class="text-primary">https://localhost/callupon</a></p>
                     </li>
                     <li>
                        <a href=""><i class="fa fa-twitter fleft padding-right text-white"></i> </a>
                        <p>On-Screen Violence Against Women And Girls Need Statutory Warnings Too <a href="https://localhost/callupon" class="text-primary">https://localhost/callupon</a></p>
                     </li>
                  </ul>
                  <!--footer_ul2_amrc ends here-->
               </div>
            </div>
         </div>
         <div class="container">
            <span class="copyright text-white text-center"><small>Copyright @2019 | Designed by <a href="" class="text-primary">callupon.org</a></small></span>
            <ul class="social_footer_ul">
               <li><a href=""><i class="fa fa-facebook"></i></a></li>
               <li><a href=""><i class="fa fa-twitter"></i></a></li>
               <li><a href=""><i class="fa fa-linkedin"></i></a></li>
               <li><a href=""><i class="fa fa-instagram"></i></a></li>
            </ul>
            <!--social_footer_ul ends here-->
         </div>
      </footer>
      <!-- login pop up -->
      <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h4 class="modal-title" id="exampleModalLabel">Login</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <article id="form-container">
                     <form>
                        <p><a href="#" title="Login with facebook" class="social-btn fb-btn"><span class="divider divider-fb"></span><i class="fa fa-facebook"></i>Login with Facebook</a></p>
                        <p><a href="#" title="Login with google" class="social-btn gp-btn"><span class="divider divider-gp"></span><i class="fa fa-google-plus"></i>Login with Google</a></p>
                        <div class="or-divider">OR</div>
                        <input type="email" placeholder="email" name="email" class="form-control mb-3">
                        <input type="password" placeholder="password" name="pwd" class="form-control mb-3">
                        <input type="submit" value="Sign in" class="form-control">
                        <div id="recover-new-account">
                           <a href="#"> Forget Password</a>
                           <span>|</span>
                           <a href="#">Create an account</a>
                        </div>
                     </form>
                  </article>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <!--login pop up-->
      <!-- sign up  pop up -->
      <div class="modal fade" id="SignupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <article id="form-container">
                     <form>
                        <p><a href="#" title="Sign Up with facebook" class="social-btn fb-btn"><span class="divider divider-fb"></span><i class="fa fa-facebook"></i>Sign Up with Facebook</a></p>
                        <p><a href="#" title="Sign Up with google" class="social-btn gp-btn"><span class="divider divider-gp"></span><i class="fa fa-google-plus"></i>Sign Up with Google</a></p>
                        <div class="or-divider">OR</div>
                        <input type="text" placeholder="First Name" name="firstname" class="form-control mb-3">
                        <input type="text" placeholder="Last Name" name="lastname" class="form-control mb-3">
                        <input type="email" placeholder="E-mail" name="email" class="form-control mb-3">
                        <input type="password" placeholder="Password" name="pwd" class="form-control mb-3">
                        <input type="submit" value="Sign up" class="form-control">
                     </form>
                  </article>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <!-- JavaScript Libraries -->
      <script src="http://localhost/callupon/assets/js/jquery.min.js"></script>
      <script src="http://localhost/callupon/assets/js/bootstrap.min.js"></script>
      <!-- ckeditor js -->
      <script src="http://localhost/callupon/assets/ckeditor/ckeditor.js"></script>
      <script type="text/javascript">
            $(document).ready(function() {
                CKEDITOR.replace(
                    'petition_description',
                    {
                        toolbar: [
                            ['Font','FontSize', 'Bold','Italic','Underline','NumberedList','BulletedList']
                        ],
                        width:['1100px'],
                        height :['150px']
                    },
                );
            });
      </script>
      <!--sign up pop up-->
      <script>
         $(document).ready(function() {
             $('#carousel-one, #carousel-two').carousel();
         })
      </script>
      <script>
         $(document).ready(function() {
             $(".load-content").slice(0, 2).show();
             $(".loadMore").on("click", function(e) {
                 e.preventDefault();
                 $(".load-content:hidden").slice(0, 2).slideDown();
                 if ($(".load-content:hidden").length == 0) {
                     $(".loadMore").text("No more petition").addClass("no-more-petition");
                 }
             });
         })
      </script>
      <!-- JavaScript Libraries -->
   </body>
</html>
