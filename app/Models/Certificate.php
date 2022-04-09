<?php

namespace App\Models;

use App\Core\Base;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $student_id
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $type
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property User $updatedBy
 * @property Student $student
 */
class Certificate extends Base
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
    protected $fillable = ['student_id', 'guid', 'created_by', 'updated_by', 'type', 'created_at', 'updated_at'];

    const TYPE = [
        ['id' => 1, 'alias' => 'a1', 'name' => 'A1', 'has_language' => false],
        ['id' => 2, 'alias' => 'a2', 'name' => 'A2', 'has_language' => false],
        ['id' => 3, 'alias' => 'b1', 'name' => 'B1', 'has_language' => true],
        ['id' => 4, 'alias' => 'b2', 'name' => 'B2', 'has_language' => true],
        ['id' => 5, 'alias' => 'c1', 'name' => 'C1', 'has_language' => true],
    ];

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo('App\Models\Student');
    }
}
