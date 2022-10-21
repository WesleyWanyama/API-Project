<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/assets/css/login.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<title>API Login</title>
</head>
<style type="text/css">
	form{
    margin-top: 30px;
    max-width: 500px;
    margin: 50px auto 0;
    background: #fff;
    padding: 4em 4em 2em;
    border-style: inset;
    border-color: black;
    border-radius: 5px;
}
</style>
    <!-- FORM -->
    <form action="<?= base_url('auth/processAPILogin') ?>" method="post">
      <?php if(!empty(session()-> getFlashdata('fail'))) : ?>
      <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
    <?php endif ?>
    	<h3>User Login</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Username</label>
    <input type="text" name="username" class="form-control"  aria-describedby="emailHelp">
    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'username') : '' ?></span>
  </div><br>
  
  <button type="submit" name="login" class="btn btn-primary">Log In</button>
  <div class="text-right">
    <a href="<?= site_url('auth/registerAPI'); ?>">Don't have an account yet?</a>
  </div>
</form>

</body>
</html>