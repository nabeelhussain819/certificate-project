<?php

namespace App\Models;

use App\Core\Base;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $first_name
 * @property string $last_name
 * @property string $date_of_birth
 * @property string $place_of_birth
 * @property string $created_at
 * @property string $updated_at
 * @property Certificate[] $certificates
 * @property User $user
 * @property User updatedBy
 */
class Student extends Base
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
    protected $fillable = ['created_by', 'guid', 'updated_by', 'first_name', 'last_name', 'date_of_birth', 'place_of_birth', 'created_at', 'updated_at'];

    protected $casts = [
        'date_of_birth' => 'date',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function certificates()
    {
        return $this->hasMany('App\Models\Certificate');
    }

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
