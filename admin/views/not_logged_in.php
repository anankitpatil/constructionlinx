<div class="container">
  <div class="row login">
    <div class="col-lg-4 col-md-4 col-sm-4"></div>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <h2>News Manager</h2>
      <div class="text-center msg">
      <?php
		if (isset($login)) {
			if ($login->errors) {
				foreach ($login->errors as $error) {
					echo $error;
				}
			}
			if ($login->messages) {
				foreach ($login->messages as $message) {
					echo $message;
				}
			}
		}
		?>
      </div>
      <form method="post" action="<?=$PHP_SELF?>" name="loginform" class="form-horizontal">
        <div class="form-group">
          <label for="login_input_username">Username</label>
          <input id="login_input_username" class="login_input form-control" type="text" name="user_name" placeholder="Enter Userame" required />
        </div>
        <div class="form-group">
          <label for="login_input_password">Password</label>
          <input id="login_input_password" class="login_input form-control" type="password" name="user_password" placeholder="Password" autocomplete="off" required />
        </div>
        <div class="form-group text-center">
          <input type="submit" name="login" value="Log in" class="btn btn-success" />
        </div>
        <div class="form-group text-center"> <a href="register.php" class="register">Register new account</a> </div>
      </form>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4"> </div>
  </div>
</div>
