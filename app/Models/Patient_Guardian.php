<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient_Guardian extends Model
{
    use HasFactory;

    protected $table = 'guardian_and_treatment';
}
