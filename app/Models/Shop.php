<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $fillable =[
      'name',
      'owner',
      'opening_time',
      'closing_time'
    ];

    protected $appends = [
        'open_time',
        'close_time'
    ];

    public function products() {
       return $this->belongsToMany(Product::class, ShopProduct::class);
    }

    public function getOpenTimeAttribute() {
        return date('h:i A', strtotime($this->opening_time));
    }

    public function getCloseTimeAttribute() {
        return date('h:i A', strtotime($this->closing_time));
    }
}
