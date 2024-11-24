<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'long_desc',
        'short_desc',
        'seo_title',
        'seo_keywords',
        'seo_desc',
        'tags',
        'product_assets',
        'view_count',
        'status',
        'created_at',
        'updated_at'
    ];
}
