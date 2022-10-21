<?php $title = 'Items Catalogue';?>
<?php include ('admin_header.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/6b18a8acf7.js" crossorigin="anonymous"></script>
	<title></title>
</head>
<body style="background-color: #6A6A6A;">

	<div class="container" style="margin-top: 100px;">
        
        <h2 class="text-center mt-4 mb-4" style="color: #fff;">Items</h2>

        <?php
        

        $session = \Config\Services::session();

        if($session->getFlashdata('success'))
        {
            echo '
            <div class="alert alert-success">'.$session->getFlashdata("success").'</div>
            ';
        }
        

        ?>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">Sample Data</div>
                    <div class="col text-right">
                        <a href="<?php echo base_url("/Items/add")?>" class="btn btn-success btn-sm">Add Item</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Product Description</th>
                            <th>Product Image</th>
                            <th>Product Price</th>
                            <th>Available Quantity</th>
                            <th>Subcategory ID</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Added by</th>
                            <th>Is Deleted</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                        

                        if($user_data)
                        {
                            foreach($user_data as $user)
                            {
                                echo '
                                <tr>
                                    <td>'.$user["product_id"].'</td>
                                    <td>'.$user["product_name"].'</td>
                                    <td>'.$user["product_description"].'</td>
                                    <td>'.$user["product_image"].'</td>
                                    <td>'.$user["product_price"].'</td>
                                    <td>'.$user["available_quantity"].'</td>
                                    <td>'.$user["subcategory_id"].'</td>
                                    <td>'.$user["created_at"].'</td>
                                    <td>'.$user["updated_at"].'</td>
                                    <td>'.$user["added_by"].'</td>
                                    <td>'.$user["is_deleted"].'</td>
                                    <td><a href="'.base_url().'/Items/fetch_single_data/'.$user["product_id"].'" class="btn btn-sm btn-warning">Edit</a></td>
                                    <td><button type="button" onclick="delete_data('.$user["product_id"].')" class="btn btn-danger btn-sm">Delete</button></td>
                                </tr>';
                            }
                        }
                        

                        ?>
                    </table>
                </div>
                <div>
                    <?php
                    

                    if($pagination_link)
                    {
                        $pagination_link->setPath('Items');

                        echo $pagination_link->links();
                    }
                    
                    
                    ?>

                </div>
            </div>
        </div>

    </div>
    <style type="text/css">
    	.pagination li a
{
    position: relative;
    display: block;
    padding: .5rem .75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #007bff;
    background-color: #fff;
    border: 1px solid #dee2e6;
}

.pagination li.active a {
    z-index: 1;
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}
    </style>

</body>
<script>
function delete_data(product_id)
{
    if(confirm("Are you sure you want to remove it?"))
    {
        window.location.href="<?php echo base_url(); ?>/Items/delete/"+product_id;
    }
    return false;
}
</script>
</html>
