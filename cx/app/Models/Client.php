<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable =[
        'id',
        'branch',
        'name',
        'birth_date',
        'start_date',
        'end_date',
        'profession',
        'country',
        'contact_detials',
        'company_id'
    ];
}
