<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    public $fillable = [
        'Name',
        'useranme',
        'date_of_birth',
        'email',
        'teliphone-no',
        'nic-no',
        'gender',
        'password',
        'reenter_password'
    ];
}
