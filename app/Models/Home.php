<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $table = 'home'; // Specify the table name

    protected $fillable = [
        'profile_image',
        'your_name',
        'who_am_i',
        'personal_info',
        'my_expertise',
        'description',
    ];


}
