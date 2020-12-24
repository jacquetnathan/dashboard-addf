<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Dead extends Model
{
    use HasFactory;
    protected $table = 'dead';

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
