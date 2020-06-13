
<?php $this->load->view('admin/header'); ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Blog</h1>
      </div>
      
      <form name="blogform" id="blogform" action="<?php echo base_url().'blog/edit/'.$blogs['blog_id']; ?>" method="post">
        	<div class="form-group">
        		<label>Title</label>
        		<input type="text" name="title" id="title" value="<?php echo set_value('title',$blogs['title']); ?>" class="form-control">
        		<p class="help-block"><?php echo form_error('title'); ?></p>
        	</div>
        	<div class="form-group">
        		<label>Description</label>
        		<textarea name="desc" id="desc" class="form-control" rows="5"><?php echo set_value('desc',$blogs['desc']); ?></textarea>
        		<p class="help-block"><?php echo form_error('desc'); ?></p>
        	</div>
        	<div class="form-group">
        		<label>Author</label>
        		<input type="text" name="author" id="author" value="<?php echo set_value('author',$blogs['author']); ?>" class="form-control">
        		<p class="help-block"><?php echo form_error('author'); ?></p>
        	</div>
            <div class="form-group">
                <label>Special</label>
                <select name="special" class="form-control">
                    <option value="">---Select a value---</option>
                    <option value="featured" <?php echo ($blogs['special'] =='featured') ? 'selected' : '' ?>>Featured</option>
                    <option value="promo" <?php echo ($blogs['special'] =='promo') ? 'selected' : '' ?>>Promotional</option>
                </select>
                <p class="help-block"><?php echo form_error('author'); ?></p>
            </div>
        	<div class="form-group">
        		<button class="btn btn-primary">Update</button>
                <a href="<?php echo base_url().'blog/index'; ?>" class="btn btn-secondary">Cancel</a>
        	</div>
        </form>
    </main>
 
<?php $this->load->view('admin/footer'); ?>