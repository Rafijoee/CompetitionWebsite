<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CertificateTemplates extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'stage_id',
        'template_patch',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'stage_id' => 'integer',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Categories::class);
    }

    public function stage(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Stages::class);
    }
}
