<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dead;

class Client extends Model
{

    use HasFactory;

    protected $table = 'client';

    public function deads()
    {
        return $this->hasMany(Dead::class);
    }

}
