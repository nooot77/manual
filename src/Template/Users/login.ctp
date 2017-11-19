<h1>Login</h1>


<?php

if (is_null($this->request->session()->read('Auth.User.username'))) {
?>
<div class="login_page">
  <?= $this->Form->create() ?>
  <?= $this->Form->control('username') ?>
  <?= $this->Form->control('password') ?>
  <?= $this->Form->button('Login') ?>
  <?= $this->Form->end() ?>
</div>

<?php
} else {

    echo "You are Logged in As " . $this->request->session()->read('Auth.User.username');

}

?>
