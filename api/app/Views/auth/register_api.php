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
                <h2>Register API User</h2>

                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>

                <form action="<?=base_url('auth/processAPIRegistration') ?>" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="username" placeholder="Username" value="<?= set_value('username') ?>" class="form-control" >
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" name="key" placeholder="Key" value="<?= set_value('key') ?>" class="form-control" >
                    </div>

                    
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="added_by">
                        <option selected>Added By</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>

                    <div class="form-group mb-3">
                        <input type="datetime-local" name="created_at" value="<?= set_value('created_at') ?>" class="form-control" >
                    </div>

                    <div class="form-group mb-3">
                        <input type="datetime-local" name="updated_on" value="<?= set_value('updated_on') ?>" class="form-control" >
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