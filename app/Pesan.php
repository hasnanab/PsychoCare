<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $table = 'pesan';
    protected $fillable = ['pesan', 'to', 'from', 'is_read'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
