<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Teams extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'phone',
        'team_name',
        'stage_id',
        'verified_status',
        'category_id',
        'total_members',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'stage_id' => 'integer',
        'category_id' => 'integer',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function stage(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Stages::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Categories::class);
    }

    public function members()
    {
        return $this->hasMany(\App\Models\Members::class, 'team_id', 'id');
    }
    public function team_submission()
    {
        return $this->hasMany(\App\Models\TeamSubmissions::class, 'team_id','id');
    }
    public function payment()
    {
        return $this->hasMany(\App\Models\Payments::class, 'team_id','id');
    }
    public function scopeFilter(Builder $query):void
    {
        if(request('search')){
            $query->where('team_name','like','%'.request('search').'%');
        }
    }
    public function scopeCategory(Builder $query):void
    {
        if(request('category')){
            $query->where('category_id',request('category'));
        }
    }


}
