<?php

namespace App\Models;

use App\Models\DetailTransaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = ["nama_produk", "harga", "stok"];
    protected $table = "produk";

    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class, "id_produk");
    }
}
