<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LoggableInterface;

class Article extends Model implements LoggableInterface
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'author_id',
        'image',
        'published_at',
        'excerpt',
        'category_id',
        'seo_title',
        'seo_description',
    ];

    public function getImageUrlAttribute() {
        return \Illuminate\Support\Facades\Storage::url($this->image);
    }

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }

    public function tags()
    {
        return $this->belongsToMany(BlogTag::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function article()
    {
    return $this->hasMany(Comment::class);
    }

    public function convertToLoggableString():string
    {
        return "Article with id {$this->id}";
    }

    public function getData(): array
    {
        return [
            'id' => $this->id,
            'title' =>$this->title,
        ];
    }
}


