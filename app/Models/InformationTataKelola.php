<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationTataKelola extends Model
{
    use HasFactory;

    protected $table = 'information_tata_kelola';
    
    protected $fillable = [
        'title',
        'images',
        'pdf',
    ];
}
