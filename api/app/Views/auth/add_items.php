<?php $title = 'Add Items';?>
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
                <h2>Add Item</h2>

                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>

                <form action="<?=base_url('Items/processAddItem') ?>" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="product_name" placeholder="Product Name" value="<?= set_value('product_name') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="product_description" placeholder="Product Description" value="<?= set_value('product_description') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="product_image" placeholder="Product Image" value="<?= set_value('product_image') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" name="product_price" min="0" step=".01" placeholder="Product Price" value="<?= set_value('product_price') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" name="available_quantity" min="0" placeholder="Available Quantity" value="<?= set_value('available_quantity') ?>" class="form-control" >
                    </div>
                     <select class="form-select" aria-label="Default select example" name="subcategory_id">
                        <option selected>Subcategory ID</option>
                        <option value="1" name="subcategory_id">1</option>
                        <option value="2" name="subcategory_id">2</option>
                        <option value="3" name="subcategory_id">3</option>
                        <option value="4" name="subcategory_id">4</option>
                        
                    </select>
                    <div class="form-group mb-3" style="margin-top: 10px;">
                        <input type="datetime-local" name="created_at" value="<?= set_value('created_at') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="datetime-local" name="updated_at" value="<?= set_value('updated_at') ?>" class="form-control" >
                    </div>
                    <select class="form-select" aria-label="Default select example" name="added_by">
                        <option selected>Added by</option>
                        <option value="1" name="added_by">1</option>
                        <option value="2" name="added_by">2</option>
                        
                    </select>
                    
                    <div class="d-grid" style="margin-top:10px;">
                        <button type="submit" class="btn btn-dark">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
