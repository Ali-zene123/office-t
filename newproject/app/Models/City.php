<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;

class City extends Model
{
    use HasFactory;
    protected $table = 'cities';

    protected $fillable =[
        'name',
        'location',
    ];

    public function tickets() {
        return $this->hasMany(Ticket::class);
    }
}
