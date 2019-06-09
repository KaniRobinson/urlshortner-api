<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'links';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'token', 'url',
    ];

    /**
     * Visit Has Many Relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function visits() : \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this
            ->hasMany(
                \App\Models\Visit::class,
                'link_id'
            );
    }
}
