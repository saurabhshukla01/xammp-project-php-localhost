<?php echo validation_errors(); ?>
<section class="jumbotron py-2">
   <h2 class="text-center pb-2 text-primary font-weight-bold"><?php echo $post['title']; ?></h2>
   <div class="container col-md-6 p-4 text-dark font-weight-bold">
      <?php echo form_open('posts/update'); ?>
      	  <input type="hidden" name="id" value="<?php echo $post['id']; ?>"
		  <div class="form-group">
			<label>Title</label>
			<input type="text" class="form-control" name="title" value="<?php echo $post['title']; ?>">
		  </div>
		  <div class="form-group">
			<label>Body</label>
			<textarea class="form-control" name="body" placeholder="Add Body"> <?php echo $post['body']; ?> </textarea>
		  </div>
		  <button type="submit" class="btn btn-primary">Update</button>
	  </form>
   </div>
</section>
