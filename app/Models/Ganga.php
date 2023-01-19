<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ganga extends Model
{
    use HasFactory;
    protected $table = 'ganga';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
