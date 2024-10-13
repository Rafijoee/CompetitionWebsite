<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Members extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team_id',
        'full_name',
        'universitas',
        'active_certificate',
        'member_role',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'team_id' => 'integer',
        'university_id' => 'integer',
    ];

    public function team(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Teams::class);
    }

    public function university(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Universities::class, 'university_id', 'id');
    }
}
