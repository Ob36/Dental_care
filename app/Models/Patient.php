<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    // protected $fillable = ['lid', 'sid', 'photo', 'name',
    //                         'sex', 'date', 'nationality',
    //                         'placeofbirth','phone', 'hall',
    //                         'religion','prgramme'];

    protected $table = 'patient';
}
