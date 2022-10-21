<?php $title = 'Add Money';?>
<?php include ('header.php'); ?>
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
                <h2>Add Money</h2>

                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>

                <form action="<?=base_url('Wallet/processAddMoney') ?>" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="customer_id" placeholder="Customer ID" value="<?= set_value('customer_id') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" name="amount_available" min="0" step=".01" placeholder="Amount" value="<?= set_value('amount_available') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="datetime-local" name="created_at" value="<?= set_value('created_at') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="datetime-local" name="updated_at" value="<?= set_value('updated_at') ?>" class="form-control" >
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
