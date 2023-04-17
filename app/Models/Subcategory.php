<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Subcategory
 *
 * @property $id
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @property CategorySubcategory[] $categorySubcategories
 * @property Design[] $designs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Subcategory extends Model
{
    
    static $rules = [
		'name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $guarded = [];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Categories()
    {
        return $this->belongsToMany(Category::class);
    }
    
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function designs()
    {
        return $this->belongsTo(Design::class);
    }
    

}
