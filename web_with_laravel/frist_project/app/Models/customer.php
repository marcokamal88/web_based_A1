<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullName',
        'email',
        'password',
        'userName',
        'brithdate',
        'address',
        'userImg',
    'numberPhone',
    ];

}