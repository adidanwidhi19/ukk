<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    //fillable artinya kolom apa saja yang boleh diisi
    //guarded artinya kolom apa saja yang tidak boleh diisi

    protected $guarded = [];
    //mass assignment 
    public function penjualan(){
        return $this->hasMany(Penjualan::class);
    }
}