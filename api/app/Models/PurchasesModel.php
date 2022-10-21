<?php

namespace App\Models;

use CodeIgniter\Model;

class PurchasesModel extends Model{

	protected $table = 'purchases';
	protected $primaryKey = 'purchase_id';
	protected $allowedFields = ['product_name','product_price','purchased_on','category_id','subcategory_id',];

}
