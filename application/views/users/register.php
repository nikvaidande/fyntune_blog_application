<!-- <h3><?= $title ?></h3> -->

<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
	<h1 class="text-center"><?php echo $title; ?></h1>
	<div class="row justify-content-md-center">
		<div class="col-md-4">
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" name="name" placeholder="Name">
			</div>

			<div class="form-group">
				<label>Contact Number</label>
				<input type="tel" class="form-control" name="mobile" placeholder="Contact Number">
			</div>

			<div class="form-group">
				<label>email</label>
				<input type="email" class="form-control" name="email" placeholder="Email">
			</div>

			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="username" placeholder="Username">
			</div>

			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div>

			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
			</div>

			<button type="submit" class="btn btn-primary btn-block">Submit</button>			
		</div>
	</div>
<?php echo form_close(); ?>