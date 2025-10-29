<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


use Illuminate\Database\Eloquent\Factories\HasFactory;
class Portofolio extends Model
{
    use HasFactory;
    //

    protected $fillable = [
        'category_id',
        'title',
        'description',
        'image'
    ];
    
    //reverese access ke parent table
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
