<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _post extends Model
{
    protected $fillable=["Descripation","posted_by","year"];
    use HasFactory;
}
