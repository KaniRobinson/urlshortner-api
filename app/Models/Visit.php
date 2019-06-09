<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'visits';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'link_id', 'ip_address', 'country',
        'refereer_url',
    ];

    /**
     * Link Belongs To Relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function link() : \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this
            ->belongsTo(
                \App\Models\Link::class,
                'link_id'
            );
    }
}
