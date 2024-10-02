<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostBody extends Model
{
      use HasFactory;
      protected $fillable = [
       'category',
       'category_aboutus',
        'title',     
        'body',
        'introduction',
        'mission',
        'vission',
        'objectives',
        'address',
        'phone',
        'email',
        'website',
        'status',
        'user_id'
       ];
}
