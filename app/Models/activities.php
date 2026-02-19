<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activities extends Model
{
    use HasFactory;
    protected $table = 'activities';
    protected $primaryKey  = 'id';
    protected $fillable = ['title', 'description', 'activity_date', 'categories_id', 'user_id'];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
