<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Product extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'imagen',
        'descripcion',
        'unidades',
        'nombre',
        'precio',
        'tamaño',
    ];
}