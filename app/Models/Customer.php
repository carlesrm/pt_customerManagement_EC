<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Tests\Integration\Queue\Order;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = [
        'name',
        'address',
        'email',
    ];
    public $timestamps = false;

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public static function createCustomer(string $name, string $address, string $email)
    {
        $newCustomer = new Customer();
        $newCustomer->name = $name;
        $newCustomer->address = $address;
        $newCustomer->email = $email;
        return $newCustomer->save();
    }
}
