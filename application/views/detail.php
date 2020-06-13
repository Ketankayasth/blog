
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Blog Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/blog/">

    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.min.css">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url().'assets/css/blog.css' ?>" rel="stylesheet">
  </head>
  <body>
    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
     
      <div class="col-12">
        <a class="blog-header-logo text-dark" href="#">Simple Blog Application in Codeigniter</a>
      </div>
     
    </div>
  </header>
</div>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-12 blog-main mT1">
    	<?php
    	$msg = $this->session->userdata('msg');
    	if($msg!=""){
    	?>
    	<div class="alert alert-success"><?php echo $msg; ?></div>
    	<?php } ?>

      <h3 class="pb-4 mb-4 font-italic border-bottom">
       Blog Detail
      </h3>
      <div class="blog-post">
        <h2 class="blog-post-title"><?php echo $blog['title']; ?></h2>
        <p class="blog-post-meta"><?php echo $blog['created_at']; ?> by <a href="#"><?php echo $blog['author']; ?></a></p>

        <?php echo $blog['desc']; ?>
        
      </div><!-- /.blog-post -->
    </div><!-- /.blog-main -->

	
	    <div class="col-md-6 comment-box">
	    	<form method="post" name="commentForm">
	    	<h3 style="padding-bottom: 10px;">Please comment here!</h3>
		    	<div class="form-group">
		    		<label>Name</label>
		    		<input type="text" name="name" id="name" value="<?php echo set_value('name');?>" class="form-control">
		    		<p class="help-block"><?php echo form_error('name'); ?></p>
		    	</div>
		    	<div class="form-group">
		    		<label>Comment</label>
		    		<textarea rows="5" name="comment" id="comment" class="form-control"><?php echo set_value('comment');?></textarea>
		    		<p class="help-block"><?php echo form_error('comment'); ?></p>
		    	</div>
		    	<div class="form-group">
		    		<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		    	</div>
	    	</form>	
	    </div>

	    <div class="col-md-12 pB20">
	    	<h3 class="pB10 mT1">Comments</h3>
	    	<hr>
	    	<?php if(!empty($comments)){

	    		foreach($comments as $comment){
	    	 ?>
	    	<div class="wrapper">
		    	<div class="name"><?php echo $comment['name']; ?> <span><?php echo $comment['created_at']; ?></span></div>
		    	<div class="comment"><?php echo $comment['comment']; ?>
		    		
		    	</div>
	    	</div>
	    	<hr>
	    	<?php } }else{ ?>
	    	 No Comment Yet
	    	<?php } ?>

	    </div>
    

  </div><!-- /.row -->

</main><!-- /.container -->

<!-- <footer class="blog-footer">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer> -->
</body>
</html>
