<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TeamSubmissionsDetails extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team_submissions_id',
        'submission_type_id',
        'path',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'team_submissions_id' => 'integer',
        'submission_type_id' => 'integer',
    ];

    public function teamSubmissions(): BelongsTo
    {
        return $this->belongsTo(TeamSubmissions::class,'team_submission_detail');
    }

    public function submissionType(): BelongsTo
    {
        return $this->belongsTo(SubmissionsTypes::class);
    }
}
