<?php $title = 'Add Tokens';?>
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
                <h2>Add Token</h2>

                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>

                <form action="<?=base_url('Tokens/processAddTokens') ?>" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="api_token" placeholder="Api Token" value="<?= set_value('api_token') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="datetime-local" name="created_at" value="<?= set_value('created_at') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="datetime-local" name="expires_on" value="<?= set_value('expires_on') ?>" class="form-control" >
                    </div>
                    
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">Generate</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
