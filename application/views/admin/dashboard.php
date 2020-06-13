
<?php $this->load->view('admin/header'); ?>
	
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>
      <h4 class="text-center" style="padding-top: 100px;">Welcome <?php echo $this->session->username; ?></h4>
      <p class="text-center" style="padding-top: 30px; font-size: 16px;">Please choose your options from sidebar</p>
    </main>
 
<?php $this->load->view('admin/footer'); ?>