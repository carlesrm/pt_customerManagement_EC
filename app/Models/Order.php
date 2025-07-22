<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    public $timestamps = false;

    protected $fillable = [
        'customer_id',
        'created_at',
        'delivery_date',
        'comment',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public static function createOrder(int $customer_id, string $delivery_date, string $comment)
    {
        return self::create([
            'customer_id' => $customer_id,
            'created_at' => now(),
            'delivery_date' => $delivery_date,
            'comment' => $comment,
        ]);
    }
}
