<?php $title = 'Edit Item';?>
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
                <h2 style="color: #fff;">Edit Item</h2>

                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>

                <form action="<?=base_url('Items/editItem') ?>" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="product_name" placeholder="Product Name" value="<?php echo $user_data['product_name']; ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="product_description" placeholder="Product Description" value="<?php echo $user_data['product_description']; ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="product_image" placeholder="Product Image" value="<?php echo $user_data['product_image']; ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" name="product_price" min="0" step=".01" placeholder="Product Price" value="<?= set_value('product_price') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" name="available_quantity" min="0" placeholder="Available Quantity" value="<?= set_value('available_quantity') ?>" class="form-control" >
                    </div>
                   <div class="form-group mb-3">
                        <input type="datetime-local" name="created_at" value="<?= set_value('created_at') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="datetime-local" name="updated_at" value="<?= set_value('updated_at') ?>" class="form-control" >
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="product_id" value="<?php echo $user_data["product_id"]; ?>" />
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>