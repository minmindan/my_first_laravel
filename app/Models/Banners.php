<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property mixed $created_at
 * @property mixed $updated_at
 * @property string $image
 * @property integer $weight
 * @property float $opacity
 */
class Banners extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'banner';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = [ 'image', 'weight', 'opacity'];
}
