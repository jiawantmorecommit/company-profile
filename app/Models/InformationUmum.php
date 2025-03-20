<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationUmum extends Model
{
    use HasFactory;

    protected $table = 'information_umum';
    
    protected $fillable = [
        'title',
        'images',
        'pdf',
    ];
}
