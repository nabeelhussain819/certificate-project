<?php

namespace App\Models;

use App\Core\Base;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $alias
 * @property string $name
 * @property string $total_marks
 * @property boolean $has_module
 */
class CertificateType extends Base
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
    protected $fillable = ['alias', 'name', 'total_marks', 'has_module', 'guid','punkte'];
}
