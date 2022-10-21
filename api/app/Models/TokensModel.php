<?php

namespace App\Models;

use CodeIgniter\Model;

class TokensModel extends Model{

	protected $table = 'apitokens';
	protected $primaryKey = 'apitoken_id';
	protected $allowedFields = ['api_userid','api_productid','api_token','created_at','expires_on','is_deleted'];

}
