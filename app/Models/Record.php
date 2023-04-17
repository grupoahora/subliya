<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Record
 *
 * @property $id
 * @property $url
 * @property $recordeable_type
 * @property $recordeable_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Record extends Model
{
    
    static $rules = [
		'url' => 'required',
		'recordeable_type' => 'required',
		'recordeable_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['url','recordeable_type','recordeable_id'];
    public function recordeable()
    {
        return $this->morphTo();
    }


}
