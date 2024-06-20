<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class book extends Model
{
    use HasFactory;
    use Sluggable;
    use SoftDeletes;
    protected $fillable = ['title', 'kode_book', 'cover', 'slug'];

    // protected static function boot()
    // {
    //     parent::boot();

    //     // Event creating untuk menetapkan nilai default
    //     static::creating(function ($model) {
    //         if (empty($model->book_code)) {
    //             $model->book_code = ''; // Ganti 'DEFAULT_CODE' dengan nilai default yang Anda inginkan
    //         }
    //     });
    // }
    // public function setBookCodeAttribute($value)
    // {
    //     $this->attributes['book_code'] = $value ?: '';
    // }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'book_category', 'book_id', 'category_id');
    }
}
