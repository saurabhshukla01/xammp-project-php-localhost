<main id="main">
   <section>
      <br><br>
    <div class="container">
      <div class="row">
         <div class="col-md-8">
          <strong><?php echo $petition['petition_title'];?></strong>
        </div>
        <div class="col-md-4">
          <!--<input type="button" value="Edit" class="btn btn-info">-->
		  <?php if(isset($petition['petition_status']) && $petition['petition_status']=='0') { ?>
          <input type="button" value="Awaiting For Approval" name="publish-petition-btn" class="btn btn-approve btn-primary">
		  <?php } ?>
        </div>
      </div>
    </div>
  </section>
  <section>
    <br><br>
    <div class="container">
			<?php echo $petition['petition_description'];?>
    </div>
  </section> 
  </main>
