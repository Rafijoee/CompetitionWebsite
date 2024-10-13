<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TeamSubmissions extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team_id',
        'stage_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'team_id' => 'integer',
        'stage_id' => 'integer',
    ];

    public function team(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Teams::class,'team_id');
    }
    public function team_submission_detail(): HasMany
    {
        return $this->hasMany(\App\Models\TeamSubmissionsDetails::class,'team_submissions_id');
    }

    public function stage(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Stages::class);
    }
}
