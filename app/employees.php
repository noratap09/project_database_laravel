<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    public $table = 'employees';
	public $key = 'employeeNumber';
	public function offices()
    {
        return $this->hasOne('App\offices','officeCode','officeCode');
    }
}
