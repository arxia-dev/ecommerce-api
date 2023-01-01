<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    use HasFactory;
    protected $fillable = ['key','system_role',"name"];

    public function users()
    {
        return $this->belongsToMany(User::class,'user_role');
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class,'role_permission');
    }
}