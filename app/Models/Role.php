<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    use HasFactory;
    protected $fillable = ['name'];
    public function members(): BelongsToMany
    {
        return $this->belongsToMany(Member::class, 'role_member');
    }
}
