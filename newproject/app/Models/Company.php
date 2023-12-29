<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;

class Company extends Model
{
    use HasFactory;
    // name
    // phone
    protected $table = 'companies';
    
    protected $fillable =[
        'name',
        'phone',
    ];
    
    protected $casts = [
        'name'=>'string',
        'phone'=>'string',
    ];

    public function tickets() {
        return $this->hasMany(Ticket::class);
    }

}
