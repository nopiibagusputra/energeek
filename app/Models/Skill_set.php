<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill_set extends Model
{
    use HasFactory;

    protected $fillable = ['candidate_id', 'skill_id'];
}
