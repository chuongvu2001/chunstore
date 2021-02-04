<?php
 namespace App\Models;
 use Illuminate\Database\Eloquent\Model;
 class Category extends Model{
    protected $table = "categories";
    public function get_child(){
        return $this->hasMany(Category::class,'id');
    }
 }
