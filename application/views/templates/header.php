<!DOCTYPE html>
<html>
<head>
	<title>Fyntune Blog Application</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">
	<script src="http://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <div class="container">
		  <a class="navbar-brand" href="<?php echo base_url(); ?>posts">Fyntune Blog Application</a>
		  
		  <div class="collapse navbar-collapse" id="navbarColor01">
		    <ul class="nav navbar-nav  ml-auto">
		    	<?php if(!$this->session->userdata('logged_in')): ?>
			    	<li class="nav-item">
				        <a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a>
				    </li>
			    	<li class="nav-item">
				        <a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a>
				    </li>
				<?php endif;?>
				<?php if($this->session->userdata('logged_in')): ?>
			    	<li class="nav-item">
				        <a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a>
				    </li>
				    <li class="nav-item">
				        <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a>
				    </li>
				<?php endif;?>
		    </ul>
		  </div>
	  </div>
	</nav>

	<div class="container" style="padding-top: 50px;">

		<?php if($this->session->flashdata('user_registered')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('post_created')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('post_updated')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('post_deleted')): ?>
			<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('post_deleted').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('login_failed')): ?>
			<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('user_loggedin')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
		<?php endif; ?>

		<?php if($this->session->flashdata('user_loggedout')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
		<?php endif; ?>

