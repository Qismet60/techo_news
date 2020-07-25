<?php

namespace App;

use Illuminate\Database\Eloquent\Model;




class Post extends Model
{
    protected $fillable = ['category_id','title','body','status','is_like'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
