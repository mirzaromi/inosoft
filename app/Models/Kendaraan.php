<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use App\Models\Motor;
use App\Models\Mobil;

class Kendaraan extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'kendaraans';

    protected $guarded = ['_id'];

    public function motor()
    {
        return $this->embedsOne(Motor::class);
    }

    public function mobil()
    {
        return $this->embedsOne(Mobil::class);
    }
}
