<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Question extends Model
{
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($question) {
            $question->slug = str_slug($question->title);
        });
    }

    protected $fillable = ['title', 'slug', 'body', 'category_id', 'user_id'];
//    protected $guarded = [];

    // Fetch all replies data when load question model
    protected $with = ['replies'];
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function replies() {
        return $this->hasMany(Reply::class)->latest();
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function getPathAttribute() {
        return "/question/$this->slug";
    }
}
