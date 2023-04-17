<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Catalog
 *
 * @property $id
 * @property $name
 * @property $description
 * @property $ownerscategories
 * @property $ownerssubcategories
 * @property $created_at
 * @property $updated_at
 *
 * @property CatalogDesign[] $catalogDesigns
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Catalog extends Model
{

  static $rules = [
    'name' => 'required',
    'description' => 'required',
    /* 'ownerscategories' => 'required',
		'ownerssubcategories' => 'required', */
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 'description', 'ownerscategories', 'ownerssubcategories'];


  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function designs()
  {
    return $this->belongsToMany(Design::class);
  }
  public function get_category_name_by_design_and_catalog($id)
  {
    if ($id == null) {
      return null;
    } else {
      $category = Category::find($id);
      return $category->name;
    }
    
   
  }
  public function get_subcategory_name_by_design_and_catalog($id)
  {
    if ($id == null) {
      return null;
    } else {
      $subcategory = Subcategory::find($id);
      return $subcategory->name;
    }
    
   
  }
  public function get_ids()
  {
    $ids = array();
    foreach ($this->designs as $key => $value) {
      $ids = array_merge($ids, [$value->id]);
    }
    return $ids;
  }
}
