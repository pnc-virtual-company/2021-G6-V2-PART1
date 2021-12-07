<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyEvent extends Model
{
    use HasFactory;
    protected $fillable = ["image","title","description","city","start_date", "end_date"];

    protected $hidden = [
        "created_at",
        "updated_at"
    ];
    
    public function category(){
        return $this.belongsTo(Category::class);
    }
}
