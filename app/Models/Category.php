<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
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
class Category extends Model
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
    public function Subcategories()
    {
        return $this->belongsToMany(Subcategory::class);
    }
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

    public function records()
    {
        return $this->morphMany('App\Models\Record', 'recordeable');
    }
    

}
