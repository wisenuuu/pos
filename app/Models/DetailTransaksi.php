<?php

namespace App\Models;

use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailTransaksi extends Model
{
    use HasFactory;
    protected $table = "detail_transaksi";
    protected $fillable = ["id_transaksi", "id_produk", "jumlah_produk", "subtotal"];

    public function produk()
    {
        return $this->belongsTo(Produk::class, "id_produk");
    }

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, "id_transaksi");
    }
}
