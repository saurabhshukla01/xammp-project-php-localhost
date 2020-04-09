<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Codeigniter page scroll load more </title>
      <!-- Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <div class="container">
         <div class="alert alert-info" style="position: fixed; width: 1140px";>
            <h1 style="color: #000000;">Load More Records On Button Click Using Codeigniter</h1>
            <small>By <a href="http://Trycatchclasses.com" style="color:red";>Trycatchclasses.com</a> </small>
         </div>
      </div>
      <div class="container" style="margin-top: 120px;">
         <h3>Ajax country list</h3>
         <table class="table">
            <thead>
               <tr>
                  <th>SN</th>
                  <th>Country name</th>
                  <th>Country code</th>
               </tr>
            </thead>
            <tbody id="ajax_table">
            </tbody>
         </table>
         <div class="container" style="text-align: center"><button class="btn" id="load_more" data-val = "0">Load more..<img style="display: none" id="loader" src="http://www.trycatchclasses.com/code/demo/load-more-records-ci/asset/loader.GIF"> </button></div>
      </div>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <script>
         $(document).ready(function(){
             getcountry(0);
         
             $("#load_more").click(function(e){
                 e.preventDefault();
                 var page = $(this).data('val');
                 getcountry(page);
         
             });
             //getcountry();
         });
         
         var getcountry = function(page){
             $("#loader").show();
             $.ajax({
                 url:"<?php echo base_url() ?>welcome/getCountry",
                 type:'GET',
                 data: {page:page}
             }).done(function(response){
                 $("#ajax_table").append(response);
                 $("#loader").hide();
                 $('#load_more').data('val', ($('#load_more').data('val')+1));
                 scroll();
             });
         };
         
         var scroll  = function(){
             $('html, body').animate({
                 scrollTop: $('#load_more').offset().top
             }, 1000);
         };
         
         
      </script>
      <style>
         #response{display: none}
         div #fb, div #gp, div #tw{display: inline-block;}
         #fb{width: 180px;}
         #gp{width:  100px;}
         #tw{width: 180px;}
      </style>
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) return;
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
         fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));
      </script>
      <div>
         <div id="tw">
            <a href="https://twitter.com/trycatchclasses" class="twitter-follow-button" data-show-count="false" data-size="medium">Follow @trycatchclasses</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
         </div>
         <div id="gp">
            <!-- Place this tag in your head or just before your close body tag. -->
            <script src="https://apis.google.com/js/platform.js" async defer></script>
            <!-- Place this tag where you want the +1 button to render. -->
            <div class="g-plusone" data-href="https://plus.google.com/+TryCatchClassesMumbai"></div>
         </div>
         <div id="fb">
            <div class="fb-like" data-href="https://www.facebook.com/TryCatchClasses/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
         </div>
      </div>
   </body>
</html>