<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Hrshadhin\Userstamps\UserstampsTrait;

class Skills extends Model
{
    use HasFactory, SoftDeletes, UserstampsTrait;

    protected $fillable = ['name', 'created_by', 'updated_by', 'deleted_by'];
    protected $dates = ['deleted_at'];

    public function skills()
    {
        return $this->belongsToMany(Skill_set::class, 'skill_id');
    }
}
