<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Developer extends Model
{
    protected $fillable = ['full_name', 'position', 'email', 'contact_phone','project_id'];// 'project_id'

    public function project():BelongsTo
    {
        return $this->belongsTo(Project::class,"project_id")->withDefault();
    }

    public function full_name(): HasOne
    {
        return $this->hasOne(Developer::class);
    }
}

