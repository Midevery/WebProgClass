<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    //kita bikin fillable biar bisa diisi ramean sama seeder

    protected $fillable = [
        'name',
        'slug'
    ];


    //kita akan define relase dengan fungsi
    public function portofolio(){
        return $this->hasMany(Portolio::class);
    }
}
