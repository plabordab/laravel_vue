<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Factura extends Model
{
    use HasFactory;
    protected $hidden=['created_at','updated_at'];
    protected $fillable=['pedido','producto','cliente','unidades','precio_base','total'];
}
