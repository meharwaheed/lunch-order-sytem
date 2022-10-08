<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
      'user_id',
      'price',
      'discount',
      'product_id',
      'shop_id',
        'quantity',
        'ref_id',
    ];

    protected $appends = [
        'date'
    ];
    public function getDateAttribute() {
        return date('d M, Y', strtotime($this->created_at));
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function user()
    {
       return $this->belongsTo(User::class, 'user_id');
    }
    public function shop()
    {
       return $this->belongsTo(Shop::class, 'shop_id');
    }
}
