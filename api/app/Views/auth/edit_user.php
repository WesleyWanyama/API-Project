<?php $title = 'Edit User';?>
<?php include ('admin_header.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<title></title>
</head>
<body style="background: #6A6A6A;">
	<div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-5" style="margin-top: 50px;">
                <h2 style="color: #fff;">Edit User</h2>

                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>

                <form action="<?=base_url('UserController/editUser') ?>" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="first_name" placeholder="First Name" value="<?php echo $user_data['first_name']; ?>" class="form-control" >
                    </div>
                     <div class="form-group mb-3">
                        <input type="text" name="last_name" placeholder="Last Name" value="<?php echo $user_data['last_name']; ?>" class="form-control" >
                    </div>
                     <div class="form-group mb-3">
                        <input type="text" name="email" placeholder="Email" value="<?php echo $user_data['email']; ?>" class="form-control" >
                    </div>
                     <div class="form-group mb-3">
                        <input type="text" name="password" placeholder="Password" value="<?php echo $user_data['password']; ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="gender" placeholder="Gender" value="<?php echo $user_data['gender']; ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="role" placeholder="Role" value="<?php echo $user_data['role']; ?>" class="form-control" >
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="user_id" value="<?php echo $user_data["user_id"]; ?>" />
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>