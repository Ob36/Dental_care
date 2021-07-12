<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class smh extends Model
{
    use HasFactory;

    protected $table = 'smh';

    protected $primaryKey = 'lid';

    protected $perPage = 100;
}

