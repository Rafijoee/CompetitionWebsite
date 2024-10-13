<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payments extends Model
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
        'payment_path',
        'status',
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
        return $this->belongsTo(\App\Models\Teams::class);
    }

    public function stage(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Stages::class);
    }
}
