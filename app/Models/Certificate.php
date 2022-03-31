<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $first
 * @property string $last
 * @property string $date_of_birth
 * @property string $place_of_birth
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 */
class Certificate extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_by', 'updated_by', 'first', 'last', 'date_of_birth', 'place_of_birth', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'created_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function updatedBy()
    {
        return $this->belongsTo('App\Models\User', 'updated_by');
    }
}
