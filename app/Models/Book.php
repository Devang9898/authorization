<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    use HasFactory;
    protected $fillable = ['title', 'author_id', 'publisher_id'];
    protected $with = ['author', 'publisher']; // Eager load by default
    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
    public function publisher(): BelongsTo
    {
        return $this->belongsTo(Publisher::class);
    }
}
