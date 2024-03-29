<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\City;

class Ticket extends Model
{
    use HasFactory;
      
    protected $table = 'tickets';
    
    protected $fillable =[
        'city_id',
        'company_id',
        'date_start',
        'date_end',
    ];
    
    protected $casts = [
        'city_id'=>'integer',
        'company_id'=>'integer',
        'date_start'=>'datetime',
        'date_end'=>'datetime',
    ];

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }
}
