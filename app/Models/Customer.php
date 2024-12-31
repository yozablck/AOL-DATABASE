<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{

    protected $table = 'customer';

    protected $primaryKey = 'Customer_ID';

    protected $guarded = [];

    protected $hidden = ['password', 'remember_token'];

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'customer_id', 'Customer_ID');
    }
}
