<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $table = 'veiculos';
    protected $fillable = ['modelo', 'kmrodado', 'valor', 'marca_id']; // Adicione 'marca_id'

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
}