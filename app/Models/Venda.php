<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable = [
        'cliente_id',
        'veiculo_id',
        'vendedor_id',
    ];
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);  

    }
    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class);  

    }
    public function vendedor()
    {
        return $this->belongsTo(Vendedor::class);  

    }

}
