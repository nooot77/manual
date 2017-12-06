


<?php

if (is_null($this->request->session()->read('Auth.User.username'))) {
?>
<div class="loginContainer">
	<div id="login-box">
		<div class="logo">
			<img src="http://www.classera.com/wp-content/uploads/2017/03/60xNxClassera_Logo_370p-x-128p_Color_2.png.pagespeed.ic.-1fJsZg_Lh.png" class="img img-responsive  center-block"/>


			<h1 class="logo-caption"><span class="tweak">L</span>ogin</h1>
		</div><!-- /.logo -->
		<div class="controls">
			  <?= $this->Form->create() ?>

				<?= $this->Form->control('username',['type'=>'username','label'=>'','placeholder'=>'Username']) ?>
				<?= $this->Form->control('password',['type'=>'password','label'=>'','placeholder'=>'Password']) ?>
				<?= $this->Form->button('Login') ?>
				<?= $this->Form->end() ?>

		</div><!-- /.controls -->
	</div><!-- /#login-box -->

	<?php
	} else {

	    echo "You are Logged in As " . $this->request->session()->read('Auth.User.username');

	}

	?>
</div><!-- /.container -->
