<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
        return self::create([
            'name' => $name,
            'address' => $address,
            'email' => $email,
        ]);
    }
}
