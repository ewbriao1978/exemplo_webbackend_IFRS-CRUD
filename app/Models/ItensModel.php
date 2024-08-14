<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'descricao',
        'quantidade',
        'preco'
    ];

    protected $table = 'itens';
    public $incrementing = true;
    public $timestamps = false;
    

}
