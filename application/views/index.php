<html>
	<head>
		<link href="<?php echo base_url(); ?>css/layout.css" rel="stylesheet" type="text/css" />
		<!-- -->
		<!-- Attach CSS files -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/layout-opt.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/awesomebuttons.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/buttons.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/orbit.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/post.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/tabs.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/form-opt.css"/>
		<!-- Attach JavaScript files -->
		<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
		<script src="js/jquery.orbit.js" type="text/javascript"></script>
	</head>
	<body>
		<?php $this->load->view('banner');?>

		<section class="message">
			<?php echo $form; ?>
		</section>
		<section class="login">
			<section class="form-title">
				<section class="title-text">
					Facility Identification
				</section>
			</section>
			<form class="form-login" method="post" accept-charset="utf-8">

				<input name="username" type="text" placeholder="Your MFC Code" required="MFC Code Required"/>
				<p></p>
				<button type="submit" class="awesome myblue large" formaction="<?php echo base_url().'c_auth/index'?>" />
				Continue</button>
			</form>
		</section>
	</body>
</html>