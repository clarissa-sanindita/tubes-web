<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function employees(){
        return $this->belongsTo(Employee::class, 'pegawai_id');
     }

     public function transactions(){
        return $this->hasMany(Transaction::class);
     }
}
