<?php

namespace App\Models;

use CodeIgniter\Model;

class WalletModel extends Model{

	protected $table = 'wallet';
	protected $primaryKey = 'wallet_id';
	protected $allowedFields = ['customer_id','amount_available','created_at','updated_at','is_deleted'];

}
