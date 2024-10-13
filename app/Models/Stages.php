<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stages extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'closed_at',
        'file_type',
        'category_id'  // Pastikan ini adalah category_id, bukan categories_id
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    public function category(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Categories::class);
    }
    public function team()
    {
        return $this->belongsTo(Teams::class);
    }
}
