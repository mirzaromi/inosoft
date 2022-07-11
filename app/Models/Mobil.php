<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'motors';

    protected $guarded = '_id';
}