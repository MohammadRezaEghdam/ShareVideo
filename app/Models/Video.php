<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\Traits\Likeable;
use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model{
    use HasFactory, Likeable;

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
        return $this->category->getRandomVideos($count);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getCategoryNameAttribute()
    {
        return $this->category?->name;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getOwnerNameAttribute()
    {
        return $this->user->name ?? '';
    }
    public function getOwnerGravatarAttribute()
    {
        return $this->user->gravatar ?? '';
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->orderBy('created_at', 'desc');
    }
}