<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Post extends Model
{
    use HasFactory,Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // cái này để chỉ cho thuộc tính title vào trong database thôi.
    protected $fillable = [
        'title',
        'image',
        'user_id'
    ];
    public function scopeUser(Builder $builder){
        
    }
    public static function boot(){
        parent::boot();
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
