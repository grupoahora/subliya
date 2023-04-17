<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Configuration
 *
 * @property $id
 * @property $email
 * @property $whatsapp
 * @property $logo
 * @property $facebook
 * @property $twitter
 * @property $youtube
 * @property $linkedin
 * @property $instagram
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Configuration extends Model
{
    
    static $rules = [
		'email' => 'required',
		'whatsapp' => 'required',
		'logo' => 'required',
		'facebook' => 'required',
		'twitter' => 'required',
		'youtube' => 'required',
		'linkedin' => 'required',
		'instagram' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['email','whatsapp','logo','facebook','twitter','youtube','linkedin','instagram'];



}
