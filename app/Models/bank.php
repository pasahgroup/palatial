<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bank extends Model
{
    use HasFactory;
      protected $fillable = [
        'bank_name',
        'swift_code',
        'country',
        'account_name',
        'account_no',
        'intermediary_bank_name',
        'intermediary_swift_code',
        'intermediary_account_no',
         'status',
        'user_id'
    ];
}
