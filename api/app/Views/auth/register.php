<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

	<title>Register</title>
</head>
<body style="background: #EDEAEA;">
<div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <h2>Register User</h2>

                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>

                <form action="<?=base_url('auth/processRegistration') ?>" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="first_name" placeholder="First Name" value="<?= set_value('first_name') ?>" class="form-control" >
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" name="last_name" placeholder="Last Name" value="<?= set_value('last_name') ?>" class="form-control" >
                    </div>

                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                    </div>

                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control" >
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" name="gender" placeholder="Gender" value="<?= set_value('gender') ?>" class="form-control" >
                    </div> 

                    <div class="form-group mb-3">
                        <input type="text" name="role" placeholder="Role" value="<?= set_value('role') ?>" class="form-control" >
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">Signup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>