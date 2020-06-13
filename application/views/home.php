
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



  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-12 px-0">
      <h1 class="display-4 font-italic"><?php echo $PromoBlog['title']; ?></h1>
      <p class="lead my-3"><?php echo $PromoBlog['desc']; ?></p>
      <p class="lead mb-0"><a href="<?php echo base_url().'home/blogDetail/'.$PromoBlog['blog_id']; ?>" class="text-white font-weight-bold">Read More...</a></p>
    </div>
  </div>

  <div class="row mb-2">
    <?php foreach($FeaturedBlogs as $featuredBlog){ ?>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0"><?php echo $featuredBlog['title']; ?></h3>
          <div class="mb-1 text-muted"><?php echo $featuredBlog['created_at']; ?></div>
          <p class="card-text mb-auto"><?php echo word_limiter($featuredBlog['desc'],30) ?></p>
          <a href="<?php echo base_url().'home/blogDetail/'.$featuredBlog['blog_id']; ?>" class="stretched-link">Read More...</a>
        </div>
      </div>
    </div>
    <?php } ?>
    
  </div>
</div>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-12 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        Our Blog
      </h3>
      
      <?php foreach($allBlogs as $allBlog){ ?>
      <div class="blog-post">
        <h2 class="blog-post-title"><?php echo $allBlog['title']; ?></h2>
        <p class="blog-post-meta"><?php echo $allBlog['created_at']; ?> by <a href="#"><?php echo $allBlog['author']; ?></a></p>

        <?php echo $allBlog['desc']; ?>
        <a href="<?php echo base_url().'home/blogDetail/'.$featuredBlog['blog_id']; ?>" class="stretched-link">Read More...</a>
        
      </div><!-- /.blog-post -->
      <?php } ?>

      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>

    </div><!-- /.blog-main -->

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
