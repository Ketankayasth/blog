
<?php $this->load->view('admin/header'); ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">List Blog</h1>
      </div>
      
       <?php $success = $this->session->userdata('success'); ?>
        <?php if(!empty($success)) { ?>
        <div class="alert alert-success" role="alert">
             <?php echo $success; ?>
        </div>
        <?php } ?>

        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Author</th>
                    <th>Special</th>
                    <th width="200">Action</th>
                </tr>
                <?php 
                if(!empty($blogs)) {
                    foreach ($blogs as $blog) {
                    
                ?>
                <tr>
                    <td><?php echo $blog['blog_id']; ?></td>
                    <td><?php echo $blog['title']; ?></td>
                    <td><?php echo $blog['desc']; ?></td>
                    <td><?php echo $blog['author']; ?></td>
                    <td>
                      <?php
                      if($blog['special'] == 'featured'){
                          echo 'Featured';
                      }else if($blog['special'] == 'promo'){
                          echo 'Promotional';
                      }else{
                          echo 'N/A';
                      }

                      ?>
                    </td>
                    <td>
                        <a href="<?php echo base_url().'blog/edit/'.$blog['blog_id']; ?>" class="btn btn-primary">Edit</a>
                        <a href="#" onclick="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php 
                   }
                    }else{
                 ?>
                 <tr>
                     <td colspan="4">Records Not Found</td>
                 </tr>
             <?php } ?>
            </table>


        </div>
      
    </main>
 
<?php $this->load->view('admin/footer'); ?>

