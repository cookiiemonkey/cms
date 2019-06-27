<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'title', 'description', 'content', 'image', 'published_at', 'category_id'
    ];

    /**
     * Delete post image from storage
     * @return void
     */
    public function deleteImage() 
    {
        Storage::delete('image');
    }

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }
}
