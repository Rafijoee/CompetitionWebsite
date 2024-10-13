<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Certificates extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'member_id',
        'tempalate_id',
        'certificate_patch',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'member_id' => 'integer',
        'tempalate_id' => 'integer',
    ];

    public function member(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Members::class);
    }

    public function tempalate(): BelongsTo
    {
        return $this->belongsTo(Tempalate::class);
    }
}
