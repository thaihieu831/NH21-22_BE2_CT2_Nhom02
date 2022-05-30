<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protype extends Model
{
    use HasFactory;
    protected $primaryKey = 'type_id';
    public function product()
    {
        return $this->hasMany(Product::class,'type_id','type_id');
    }
}
