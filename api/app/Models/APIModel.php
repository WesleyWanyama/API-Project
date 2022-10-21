<?php

namespace App\Models;

use CodeIgniter\Model;

class APIModel extends Model{

	protected $table = 'apiusers';
	protected $primaryKey = 'apiuser_id';
	protected $allowedFields = ['username','key','created_at','updated_on','is_deleted'];

}
