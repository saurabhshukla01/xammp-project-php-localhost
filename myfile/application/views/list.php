<main id="main">
   <section id="about">
      <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="blog-list clearfix">
               <div class="section-title">
                  <h3 class="pb-2 mb-4 border-bottom font-weight-normal"><a href="#" title="">Petitions</a></h3>
               </div>
               <!-- end title -->
               <?php if(count($petitions) > 0 ) { 

                        foreach ($petitions as $petition) { 

                            $petition_title = $petition['petition_title'];
                            $petition_image = $petition['petition_image'];
                            $petition_description = $petition['petition_description'];
                            $petiton_created = $petition['created_date'];
                            $petition_uid = $petition['petition_uid'];
                            $petition_goal = $petition['petition_goal'];
                            $petition_signed_count = $petition['petition_signed_count'];
                            //$petition_signed_count = 2000;
                            $percentage_petition = ($petition_signed_count/$petition_goal) * 100;

                            //echo "Start ( ".$petition_description ." ) END <br />";

                        ?>

                            <div class="blog-box row border-bottom mb-4">
                              <div class="col-md-4">
                                 <div class="post-media border p-2">
                                    <a href="/petition/petition-details/<?php echo $petition_uid ?>" title="">
                                       <img src="/assets/petition_images/<?php echo $petition_image ?>" alt="" class="img-fluid img-responsive">
                                       <div class="hovereffect"></div>
                                    </a>
                                 </div>
                                 <!-- end media -->
                              </div>
                              <!-- end col -->
                              <div class="blog-meta big-meta col-md-8 font-weight-normal">
                                 <h5 class="mb-3"><a href="/petition/petition-details/<?php echo $petition_uid ?>" title=""><?php echo $petition_title ?></a></h5>
                                 <div class=""><?php echo substr($petition_description, 0,300)?>&nbsp;<span class="link type-weak font-weight-bold"><a href="/petition/petition-details/<?php echo $petition_uid ?>">Read more...</a></span></div>
                                 <!-- <small><a href="#" title="">Travel</a></small>-->
                                 <!-- <small></small>-->
                                 <div>
                                    <div class="progress mt-3">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $percentage_petition?>%" aria-valuenow="<?php echo $percentage_petition?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="pb-3 pt-2">
                                    <strong><?php echo $petition_signed_count?> signed</strong>
                                    <span class="type-weak">of <?php echo $petition_goal ?> goal </span>
                                </div>
                              </div>
                        <!-- end meta -->
                        </div>
                        </div>
                        <!-- end blog-box -->
                       <!-- <hr class="invis">-->
   
                     <?php   
                            }
                      ?>
                   
                <?php } ?>
               <!-- end blog-box -->
            </div>
            <!-- end blog-list -->
         </div>
         <!-- end col -->
      </div>
   </section>
</main>

<script type="text/javascript">
    
    $(".post-on-facebook").on('click', function () {

        location.href = "facebook/post-facebook"

    });
</script>