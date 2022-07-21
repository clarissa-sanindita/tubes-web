<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    public function court(){
        return $this->hasMany(Court::class, 'pegawai_id');
    }

    public function user(){
        return $this->belongsTo(User::class, "user_id");
    }
    
}
