<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Hrshadhin\Userstamps\UserstampsTrait;

class Candidates extends Model
{
    use HasFactory, SoftDeletes, UserstampsTrait;

    protected $fillable = ['jobs_id', 'name', 'email', 'phone', 'year', 'created_by', 'updated_by', 'deleted_by'];
    protected $dates = ['deleted_at'];

    public function job()
    {
        return $this->belongsTo(Jobs::class, 'jobs_id');
    }

    public function skills()
    {
        return $this->belongsToMany(Skill_set::class, 'candidate_id');
    }
}
