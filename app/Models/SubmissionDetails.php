<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubmissionDetails extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'submissions_type_id',
        'stage_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'submissions_type_id' => 'integer',
        'stage_id' => 'integer',
    ];

    public function submissionsType(): BelongsTo
    {
        return $this->belongsTo(\App\Models\SubmissionsTypes::class);
    }

    public function stage(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Stages::class);
    }
}
