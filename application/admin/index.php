<?php
require('top.inc.php');
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">DASHBOARD </h4>
				   <p>
 Selamat datang di halaman dashboard, <?php echo ucfirst($this->session->userdata('username')); ?>!
 Untuk logout dari sistem, silakan klik <?php echo
anchor('login/logout','di sini...'); ?>
 </p>
				</div>
			</div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>