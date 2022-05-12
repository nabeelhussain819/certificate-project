<?php

namespace App\Models;

use App\Core\Base;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Guid\Guid;

/**
 * @property integer $id
 * @property integer $student_id
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $type
 * @property string $created_at
 * @property string $updated_at
 * @property Guid guid
 * @property int $certificate_type_id
 * @property string listening
 * @property string reading
 * @property string language_module
 * @property string writing
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
    protected $fillable = ['student_id', 'certificate_type_id', 'Hörverstehen', 'Leseverstehen', 'Geburtsort', 'Schriftlicher_Ausdruck', 'guid', 'Mündlicher_Ausdruck', 'created_by', 'updated_by', 'type', 'created_at', 'updated_at'];

    const QR_FORMAT = "png";

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function types()
    {
        return $this->belongsTo('App\Models\CertificateType', 'certificate_type_id');
    }


}
