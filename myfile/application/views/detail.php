<main id="main">
   <section id="about" class="pt-5">
      <div class="container">
         <div class="row">
            <div class="leftcolumn">
               <div class="card">
                  <h2><?php echo $petition['petition_title'] ?></h2>
                  <h5><?php ?></h5>
                  <div class="card-img text-center"><img src="/assets/petition_images/<?php echo $petition['petition_image']; ?>" alt="" class="img-fluid img-responsive"></div>
                  
                  <p><?php echo $petition['petition_description'] ?></p>

               </div>
            </div>
            <div class="rightcolumn">
              <div class="card">
                  <div class="progress mb-2">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $percentage_petition?>%" aria-valuenow="<?php echo $percentage_petition?>" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div>
                  <strong><?php echo $petition_signed_count ?> signed</strong>
                  <span class="type-weak">of <?php echo $petition['petition_goal']  ?> goal</span>
                </div>
               </div>
               <?php if($petition_signed == 0) {?>
               <div class="card">
                <?php if(!empty($this->session->flashdata('message'))) { ?>
                  <span>
                       <p><span class="alert alert-primary" role="alert"><?php echo $this->session->flashdata('message');
?></span></p> 
                  </span>
                  <?php } ?>
                  <span class="mb-2"><b><?php echo !empty($user_name) ? $user_name : '' ?></b></span>
                    <span>
                       <textarea class="form-control z-depth-1" id="petition_comment" name="petition_comment" rows="3" placeholder="Write yor comment..."></textarea>
                    </span>
                    <span class="pl-4 pt-2 pb-2">
                       <input type="checkbox" class="custom-control-input" id="display_name" name="display_name" value="1">
                       <label class="custom-control-label" for="display_name">Display my name and comment on this petiition</label>
                    </span>
                    <span><button type="button" class="btn btn-danger submit-signed-petition" data-petition-id="<?php echo $petition['petition_id'] ?>" data-petition-uid="<?php echo $petition['petition_uid']; ?>">Sign this Petition</button></span>
                  
               </div>
             <?php } ?>
             <?php if($user_id > 0 && $petition_signed == 1) { ?>
               <div class="card">
                  <?php if(!empty($this->session->flashdata('message'))) { ?>
                  <p><span class="alert alert-primary p-1" role="alert"><?php echo $this->session->flashdata('message');
?></span></p> 
                  <?php } ?>
                  <p class="mb-2 btn btn-primary p-2"> <i class="fa fa-facebook"></i><a href="javascript:void(0);" class="text-white" onclick="javascript:post_on_facebook();"> Share on Facebook</a></p>
                  <!--<p><a href="javascript:poptastic('<?php echo $twitter_url; ?>');">Tweet to your followers</a></p>-->
                  <p class="mb-2 btn btn-primary p-2"><i class="fa fa-twitter"></i><a href="javascript:void(0);" class="text-white" onclick="javascript:post_on_twitter('<?php echo $twitter_url; ?>');"> Tweet to your followers</a></p>
                  <p class="mb-2 btn btn-default border"><i class="fa fa-link"></i><a href="javascript:void(0);" onclick="javascript:copyLink();" class="text-dark"> Copy Link</a></p>
                
               </div>
             <?php } ?>
             <input type="hidden" name="petition_url" id="petition_url" value="<?php echo $petition['petition_url']; ?>">
            </div>
         </div>
      </div>
   </section>
</main>
<script type="text/javascript">

 function copyLink() {

        var copyLink = document.getElementById("petition_url");
        var copyText = copyLink.value;
        var textarea = document.createElement('textarea');
        textarea.textContent = copyText;
        document.body.appendChild(textarea);

        var selection = document.getSelection();
        var range = document.createRange();
        //  range.selectNodeContents(textarea);
        range.selectNode(textarea);
        selection.removeAllRanges();
        selection.addRange(range);

        document.execCommand('copy');
        selection.removeAllRanges();

        document.body.removeChild(textarea);
        copyLink.select();
    }

   function post_on_facebook() {

      $.ajax({
              url:"/social/post-facebook",
              type:'post',
              dataType:"json",
              data:{"petition_url":"<?php echo $petition['petition_url']; ?>","petition_uid":"<?php echo $petition['petition_uid']; ?>","petition_title":"<?php echo $petition['petition_title']; ?>","petition_image":"<?php echo $petition['petition_image']; ?>","petition_id":"<?php echo $petition['petition_id']; ?>","petition_description":""},
              success:function(response) {

                  if(response.status == 2) {

                      var fb_login_url = response.fb_login_url;
                      window.location.href = fb_login_url;
                  }
                
              },
              error: function() {
                
              }
        });
   }

   function post_on_twitter(twitter_url) {

      $.ajax({
              url:"/social/post-twitter",
              type:'post',
              dataType:"json",
              data:{"twitter_url":twitter_url,"short_url":"<?php echo $petition['petition_url']; ?>","petition_uid":"<?php echo $petition['petition_uid']; ?>",'petition_title':"<?php echo $petition['petition_title']; ?>",'petition_image':"<?php echo $petition['petition_image']; ?>","petition_id":"<?php echo $petition['petition_id']; ?>"},
              success:function(response) {
                  window.location.href = response.twitter_url;
              },
              error: function() {
                
              }
        });
   }

   $(".submit-signed-petition").on("click", function (e) {

      e.preventDefault();

      var petition_id = $(this).attr("data-petition-id");
      var petition_uid = $(this).attr("data-petition-uid");
      var petition_comment = $("#petition_comment").val()
      var display_name = $("#display_name").is(":checked") ? 1 : 0;

      console.log("petition_id" +petition_id);
      console.log("petition_uid" +petition_uid);

      $.ajax({
              url:"/petition/signed-petition",
              type:'post',
              dataType:"json",
              data:{"petition_id":petition_id,"petition_uid": petition_uid,"petition_comment":petition_comment,"display_name":display_name},
              success:function(response) {

                   if(response.status == 2) {
                       openLoginModal();
                   }

                   if(response.status == 1) {

                      window.location.href = '<?php echo base_url();?>/petition/petition-details/'+petition_uid;
                   }

                   if(response.status == 0) {

                    
                   }

              },
              error: function() {
                
              }
        });
   });
    
</script>
