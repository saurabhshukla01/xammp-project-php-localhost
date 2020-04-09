<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Nav Boot Arrow</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
      <style>
         nav > .nav.nav-tabs{
         border: none;
         color:#fff;
         background:#272e38;
         border-radius:0;
         }
         nav > div a.nav-item.nav-link,
         nav > div a.nav-item.nav-link.active
         {
         border: none;
         padding: 18px 25px;
         color:#fff;
         background:#272e38;
         border-radius:0;
         }
         nav > div a.nav-item.nav-link.active:after
         {
         content: "";
         position: relative;
         bottom: -60px;
         left: -10%;
         border: 15px solid transparent;
         border-top-color: #e74c3c ;
         }
         .tab-content{
         background: #fdfdfd;
         line-height: 25px;
         border: 1px solid #ddd;
         border-top:5px solid #e74c3c;
         border-bottom:5px solid #e74c3c;
         padding:30px 25px;
         }
         nav > div a.nav-item.nav-link:hover,
         nav > div a.nav-item.nav-link:focus
         {
         border: none;
         background: #e74c3c;
         color:#fff;
         border-radius:0;
         transition:background 0.20s linear;
         }
      </style>
   </head>
   <div class="container">
      <div class="row">
         <div class="col-xs-12 ">
            <nav>
               <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
                  <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">About</a>
               </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
               <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <p style="margin:30px;">
                     Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                  </p>
                  <div class="table-responsive">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th>1</th>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                  <p style="margin:30px;">
                     Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat 							veniam.Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit 						non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non 							minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in 						qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis 	   						reprehenderit occaecat anim ullamco ad duis occaecat ex.Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                  </p>
                  <div class="table-responsive">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th>1</th>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                  <p style="margin:30px;">
                     Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                     Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                  </p>
                  <div class="table-responsive">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th>1</th>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                  <p style="margin:30px;">
                     Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                  </p>
                  <div class="table-responsive">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                              <th>Heading</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th>1</th>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
   </body>
</html>

