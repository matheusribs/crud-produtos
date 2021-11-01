<?php

namespace App\Models\Api;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable=['nome, descricao, categoria, preco, quantidade'];

}
