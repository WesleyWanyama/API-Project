<?php $title = 'Add Category';?>
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
                <h2>Add Category</h2>

                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>

                <form action="<?=base_url('category/processAddCategory') ?>" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="category_name" placeholder="Category Name" value="<?= set_value('category_name') ?>" class="form-control" >
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
