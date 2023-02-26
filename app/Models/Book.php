<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property $id
 * @property $title
 * @property $bookNumber
 * @property $description
 */
class Book extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'books';

    /**
     * @return BelongsToMany
     */
    public function author(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Author', 'books_authors', 'book_id', 'author_id');
    }
}
