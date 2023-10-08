<div class="container">
	<div class="text-center mt-5"><img src="<?php echo base_url('assets/icon/logo.png')?>" id="logoimg" alt=" Logo" />
	</div>
	<?php
			if(!empty($error))
			{
				echo $error;	
			}								
		?>
	<?php
			//Jika tombol Sign In ditekan, maka jalankan controller Login->function cekStatusLogin untuk validasi Login			
				echo form_open_multipart('Login/cekStatusLogin'); 									
			?>
	<form action="<?php echo site_url('Login/cekStatusLogin'); ?>">
		<div class="mb-3">
			<label for="exampleInputUsername1" class="form-label">Username</label>
			<input type="username" name="username" class="form-control" id="exampleInputUsername"
				aria-describedby="usernameHelp">
			<div id="usernameHelp" class="form-text">Example username unggar</div>
		</div>
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Password</label>
			<input type="password" name="password" class="form-control" id="exampleInputPassword1">
			<div class="form-text" for=" exampleCheck1">Example password Killerbee</div>
		</div>
		<button type="submit" class="btn btn-primary">Sign In</button>
	</form>
</div>
