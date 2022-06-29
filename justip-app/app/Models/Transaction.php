<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;  


class Transaction extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'nama_penitip',
        'nama_traveler',
        'pesanan_id',
        'transaction_total',
    ];

    protected $hidden = [
        
    ];

    public function details()
    {
        return $this->hasMany(TransactionDetail::class, 'transaction_id');
    }

    public function products()
    {
        return $this->belongsTo(Product::class,'pesanan_id','id');
    }

    public function penitip()
    {
        return $this->belongsTo(User::class,'penitip_id','id');
    }

    public function traveler()
    {
        return $this->belongsTo(User::class,'traveler_id','id');
    }
}
