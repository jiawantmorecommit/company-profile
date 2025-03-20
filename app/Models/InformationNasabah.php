<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationNasabah extends Model
{
    use HasFactory;

    protected $table = 'information_nasabah';
    
    protected $fillable = [
        'title',
        'images',
        'pdf',
    ];
}
