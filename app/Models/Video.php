<?php

namespace App\Models;

use App\Models\Category;
use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model{
    use HasFactory;

    protected $fillable = ['name','length','url','slug','thumbnail','description','category_id'];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function getLengthInHumanAttribute()
    {
        return gmdate("h:i:s" , $this->length);
    }

    public function getCreatedAtAttribute($value)
    {
        return (new Verta($value))->formatDifference();
    }

    public function relatedVideos(int $count = 6)
    {
        return $this->category->getrandomVideos();
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getCategoryNameAttribute()
    {
        return $this->category->name ?? null;
    }
}