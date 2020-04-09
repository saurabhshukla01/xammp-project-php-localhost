<footer>
         <div class="copyright">
            Please Note***** GoGetScore will never ask you to make a payment anywhere outside the secure GoGetScore website. DO NOT make payment to any other bank account or wallet or divulge your bank/card details to fraudsters and imposters claiming to be operating on our behalf.
         </div>
         <div class="text-center">
            <ul class="ml-lg-auto">
               <li class="mr-3">
                  <a href="index.html">Home</a>
               </li>
               <li class="mr-3">
                  <a href="about-us.html">About Us</a>
               </li>
               <li class="mr-3">
                  <a href="term-and-condition.html">Terms & Conditions</a>
               </li>
               <li class="mr-3">
                  <a href="privacy-policy.html">Privacy Policy</a>
               </li>
               <li>
                  <a href="contact-us.html">Contact Us</a>
               </li>
            </ul>
         </div>
      </footer>
      <!-- pop up after submit -->
      <!-- pop up after submit -->
      <!--login form pop up-->
      <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header text-center">
                  <h4 class="modal-title w-100 font-weight-bold">Login</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body mx-3">
                  <div class="form-group">
                     <label class="form-label" for="verifyphone">Enter your Phone number</label>
                     <input type="text" id="verifyphone" class="form-input" name="verifyphone" />
                  </div>
               </div>
               <div class="modal-footer d-flex justify-content-center">
                  <div class="btn btn-primary submit-btn" data-dismiss="modal" data-toggle="modal" data-target="#modalLoginFormverify">Verify</div>
               </div>
            </div>
         </div>
      </div>
      <!--login form pop up-->
      <!--login form verify  pop up-->
      <div class="modal fade" id="modalLoginFormverify" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header text-center">
                  <h4 class="modal-title w-100 font-weight-bold">Enter OTP</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body mx-3 text-center">
                  <form method="get" class="digit-group" data-group-name="digits" data-autosubmit="false" autocomplete="off">
                     <input type="text" id="digit-1" name="digit-1" data-next="digit-2" />
                     <input type="text" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1" />
                     <span class="splitter">&ndash;</span>
                     <input type="text" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2" />
                     <input type="text" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3" />
                  </form>
               </div>
               <div class="modal-footer d-flex justify-content-center">
                  <div class="btn btn-primary submit-btn" data-toggle="modal" data-target="#modalLoginFormverify">Verify</div>
               </div>
            </div>
         </div>
      </div>
      <!--login form verify pop up-->
      <script src="http://gogetscore.sheenz.in/assets/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="http://gogetscore.sheenz.in/assets/css/jquery-ui.css" />
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script src="js/validation.js"></script>
      <!--<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
      <script src="js/jquery.slideform.js"></script>
      <script>
         $(function() {
              $( "#accordion,#subaccordion,#subaccordion2,#subaccordion3,#subaccordion4,#subaccordion5,#subaccordion6,#subaccordion7,#subaccordion8" ).accordion({ active: false, collapsible: true });
          });

      </script>
      <script>
         ( function ($) {
          jQuery.validator.addMethod("equals", function(value, element, param) {
         return this.optional(element) || value === param;
          });

          $(document).ready( function () {

           var $form = $('form');

           $form.slideform({
            validate: {
              rules: {
                group7: {
                  required: true,
                  equals: "valid"
                }
              },
              messages: {
                group7: {
                  required: 'Please select an option',
                  equals: 'You must select valid!'
                }
              }
            },
            submit: function (event, form) {
              $form.trigger('goForward');
            }
           });
          });
         }(jQuery))
      </script>
      <script>
         (function() {
          var formWrap = document.getElementById( 'fs-form-wrap' );

          [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
           new SelectFx( el, {
            stickyPlaceholder: false,
            onChange: function(val){
              document.querySelector('span.cs-placeholder').style.backgroundColor = val;
            }
           });
          } );


         })();
      </script>
      <script>
         $( function() {
           $( "#datepicker" ).datepicker();
         } );
      </script>
      <script>
         $('.effect-21').focus(function(){
           $(this).parents('.input-effect').addClass('focused');
         });

         $('.effect-21').blur(function(){
           var inputValue = $(this).val();
           if ( inputValue == "" ) {
             $(this).removeClass('filled');
             $(this).parents('.input-effect').removeClass('focused');
           } else {
             $(this).addClass('filled');
           }
         })

      </script>
      <script>
         $('#range').on("input", function() {
             $('.output').val(this.value + ",000" );
             }).trigger("change");

             $('.tab-content:first').css({'max-height','300px'});
      </script>
   </body>
</html>

