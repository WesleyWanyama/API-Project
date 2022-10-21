<?php $title = 'Add User';?>
<?php include ('admin_header.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
	<body style="background: #6A6A6A;">
<div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-5" style="margin-top: 50px;">
                <h2>Add User</h2>

                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>

                <form action="<?=base_url('UserController/processAddUser') ?>" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="first_name" placeholder="First Name" value="<?= set_value('first_name') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="last_name" placeholder="Last Name" value="<?= set_value('last_name') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="password" placeholder="Password" value="<?= set_value('password') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="gender" placeholder="Gender" value="<?= set_value('gender') ?>" class="form-control" >
                    </div>
                     <div class="form-group mb-3">
                        <input type="text" name="role" placeholder="Role" value="<?= set_value('role') ?>" class="form-control" >
                    </div>


                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
