<?php $title = 'Edit Category';?>
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
                <h2 style="color: #fff;">Edit Category</h2>

                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>

                <form action="<?=base_url('category/editCategory') ?>" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="category_name" placeholder="Category Name" value="<?php echo $user_data['category_name']; ?>" class="form-control" >
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="category_id" value="<?php echo $user_data["category_id"]; ?>" />
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>