<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey  = 'id';
    protected $guarded = ['id'];

    public function activities()
    {
        return $this->hasMany(Activities::class);
    }
}
