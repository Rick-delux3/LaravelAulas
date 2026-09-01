<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContatoModel extends Model
{
    use HasFactory;

    protected $table = 'table_contato';

    protected $fillable = [
        'nome',
        'email'
    ];
}
