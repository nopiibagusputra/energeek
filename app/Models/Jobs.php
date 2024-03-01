<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Hrshadhin\Userstamps\UserstampsTrait;

class Jobs extends Model
{
    use HasFactory, SoftDeletes, UserstampsTrait;

    protected $fillable = ['name', 'created_by', 'updated_by', 'deleted_by'];
    protected $dates = ['deleted_at'];

    public function candidates()
    {
        return $this->hasMany(Candidates::class, 'jobs_id');
    }
}
