<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemsModel extends Model{

	protected $table = 'product';
	protected $primaryKey = 'product_id';
	protected $allowedFields = ['product_name','product_description','product_image','product_price','available_quantity','subcategory_id','created_at','updated_at','added_by','is_deleted'];

}
