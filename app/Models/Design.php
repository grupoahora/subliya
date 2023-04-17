<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Design
 *
 * @property $id
 * @property $name
 * @property $reference
 * @property $category_id
 * @property $subcategory_id
 *
 * @property $created_at
 * @property $updated_at
 *
 * @property CatalogDesign[] $catalogDesigns
 * @property Category $category
 * @property Status $status
 * @property Subcategory $subcategory
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Design extends Model
{
  

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
    public function catalogs()
    {
        return $this->belongsToMany(Catalog::class);
    }
    
    
    public function get_ids()
    {
        $ids = [];
        foreach ($this as $key => $value) {
            $ids[] = $value->id;
        }
        return $ids;
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
  
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function subcategory()
    {
        return $this->hasOne('App\Models\Subcategory', 'id', 'subcategory_id');
    }

    public function records()
    {
        return $this->morphMany('App\Models\Record', 'recordeable');
    }
    public function attributes()
    {
        return $this->belongsToMany('App\Models\Attribute')->withPivot('attribute_id','attroptions');
    }
    public function labels()
    {
        return $this->belongsToMany('App\Models\Label');
    }


}
