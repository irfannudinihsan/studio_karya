<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Karya extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ['judul', 'category_id', 'slug', 'media', 'ukuran', 'tahun', 'deskripsi', 'user_id', 'image'];


    //query scoope

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['cari'] ?? false, function ($query, $cari) {

            return $query->where('judul', 'like', '%' . $cari . '%');
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {

        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
}
