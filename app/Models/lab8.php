<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lab8 extends Model
{
    use HasFactory;
    protected $table="lab8s";
    protected $fillable = ['name', 'surname', 'email', 'image'];
}
