<?php

namespace App\Models;

use App\Models\DetailTransaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = "transaksi";
    protected $fillable = ["tanggal_transaksi", "total_pembelian"];

    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class, "id_transaksi");
    }
}
