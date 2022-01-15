<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hekmatinasser\Verta\Verta;

class Video extends Model{
    use HasFactory;

    protected $fillable = ['name','length','url','slug','thumbnail','description'];
    
    public function getLengthAttribute($value)
    {
        return gmdate("h:i:s" , $value);
    }

    public function getCreatedAtAttribute($value)
    {
        return (new Verta($value))->formatDifference();
    }
}