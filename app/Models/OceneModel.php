<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OceneModel extends Model
{
    use HasFactory;
    protected $table = "ocene";
    protected $fillable = ["imePredmeta","ocena","imeProfesora"];
}
