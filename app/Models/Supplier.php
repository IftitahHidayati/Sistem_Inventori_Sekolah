<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class Supplier extends Model
{
    use HasFactory;
    protected $table = "supplier"; // Eloquent akan membuat model Supplier menyimpan record di tabel supplier
    protected $primaryKey = 'id'; // Memanggil isi DB Dengan primarykey
    public $incrementing = false;

    protected $fillable = [
        'id',
        'kode_supplier',
        'nama_supplier',
        'alamat',
        'telp',
        'kota',
        'penyedia',
    ];
    public function barang()
    {
        return $this->hasMany(Barang::class);
    }
}