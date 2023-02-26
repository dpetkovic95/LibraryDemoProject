<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $image
 */
class Author extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'authors';

    /**
     * @return BelongsToMany
     */
    public function book(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Book', 'books_authors', 'author_id', 'book_id');
    }
}
