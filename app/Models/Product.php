<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'product_id';
    public function protypes()
    {
        return $this->belongsTo(Protype::class,'type_id');
    }
    public function manufactures()
    {
        return $this->belongsTo(Manufacture::class,'manu_id');
    }
    public function sales()
    {
        return $this->belongsTo(Manufacture::class,'sale_id');
    }
}
