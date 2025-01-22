<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    use HasFactory;
    protected $fillable = ['name', 'email', 'password'];
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'role_member');
    }
}
