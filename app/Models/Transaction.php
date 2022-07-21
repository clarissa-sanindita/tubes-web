<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function customer(){
        return $this->belongsTo(Customer::class, "pelanggan_id");
    }

    public function employee(){
        return $this->belongsTo(Employee::class, "pegawai_id");
    }

    public function court(){
        return $this->belongsTo(Court::class, "lapangan_id");
    }
}
