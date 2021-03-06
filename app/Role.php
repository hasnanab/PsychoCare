<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table= 'role';
    protected $fillable = ['nama_role'];

    public function user(){
        return $this->hasMany(User::class);
    }
}
