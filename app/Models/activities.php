<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class activities extends Model
{
    protected $table = 'activities';
    protected $primary_key = 'id';
    protected $fillable = ['title', 'description', 'activity_date', 'category_id', 'user_id'];
}
