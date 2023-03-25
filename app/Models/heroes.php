<?php

namespace App\Models;
use app\Http\Controllers\heroesController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class heroes extends Model
{
    protected $table = 'heroes';
    protected $primaryKey = 'id';
    protected $fillable = ['Real_name','Super_hero_name','Decription'];
}
