<div><?php
include 'header.php';

?></div>


<section>
	
	<div class="container">
		<div class="row" style="height: 80vh;background-repeat: no-repeat;">
			<div class="col-sm-12 col-md-9 col-lg-9 text-center" style="color: black;overflow: hidden;">
				<h3>Welcome Back </h3>
					<img src="<?php echo base_url();?>image/ima.jpg" >
			</div>
			<div class="col-sm-12 col-md-3 col-lg-3 " style="color: black;margin-top: 10%;">
				<h3>Welcome Message</h3>
						<p>your message</p>
			</div>
		</div>
	</div>
</section></div>

<div id="about" class="section wb" style="text-align: center;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<h3>About Us</h3>
						<p>About sports management system</p>
					</div><!-- end title -->
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9 col-md-6 col-lg-6" >
					<h2>Our Strength as a team </h2>
						<p>"what makes you feel your are fit to undertake any game."</p>
				</div>
				<div class="col-sm-9 col-md-6 col-lg-6" >
					<h2>How To Join Us </h2>
						<p>"joining instructions."</p>
				</div>
			</div> 
			
			
		</div>
		<div id="more">
			<div class="container">
				<div class="row">
				<div class="col-sm-9 col-md-6 col-lg-6">
					
				</div>
				<div class="col-sm-9 col-md-6 col-lg-6">
					<h2>Our Location</h2>
					<p style="text-align: center;vertical-align: center;">
						descrption of ur current location
					</p>
				</div>
				
			</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="login"> 
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-head">
			<button class="close" data-dismiss="modal" ><span>&times</span></button>
			<h3 style="text-align: center;">Login</h3>
		</div>
		<div class="modal-body">
			<form method="post" action="login">  
<div class="form-group">
<label >Username</label>
<input class="form-control" type="text" class="form-group" name="username">

</div>
<div class="form-group">
<label >Password</label>
<input class="form-control" type="password" class="form-group" name="password">

</div>
<div class="form-group">
				<input type="submit" name="Login" value="submit" class="btn btn-success" style="margin: auto;display: block;">
			</div></form>
		</div>
	</div>
</div>
</div>
<div class="modal fade" id="signup" style="margin-top: 20px;">
	<div class="modal-dialog" >
		<div class="modal-content">
		<div class="modal-head">
			<button class="close" data-dismiss="modal"><span>&times</span></button>
		</div>
		<div class="modal-body">
			<?php validation_errors();?>
		<form action="add_user" method="post" onsubmit="return checkuser();">
<h3 class="modal-title" style="text-align: center;">Signup Today</h3>
<div class="form-group">
<label >Username</label>
<span><?php echo form_error("username");?></span>
<input class="form-control" type="text" id="username" class="form-group" name="username">

</div>
<div class="form-group">
<label >Password</label>
<span><?php echo form_error("password");?></span>
<input class="form-control" type="password" class="form-group" name="password">

</div>
<div class="form-group">
<label >Confirm Password</label>
<span><?php echo form_error("confirm_password");?></span>
<input class="form-control" type="password" class="form-group" name="confirm_password">

			</div>
			<div class="form-group">
				<input type="submit" name="register" value="submit" class="btn btn-success" style="margin: auto;display: block;">
			</div>
			</form>
		</div>
		</div>
		
	</div>
	
<style type="text/css">
	span{
		color: red;
	}
</style>
<?php

if (isset($data)) {
	if ($data) {
		if ($data=="login") {
			?><script type="text/javascript">
		$("#login").modal("show");
	</script><?php
		}
		else{
	?><script type="text/javascript">
		$("#signup").modal("show");
	</script><?php
}}

}
?>