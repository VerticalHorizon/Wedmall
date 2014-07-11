<?php

class Attribute extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'attributes';

    public $timestamps = false;

	//protected $fillable = array('alias', 'title');

    public function category()
    {
        return $this->belongsToMany('Category', 'categories_attributes', 'attribute_id', 'category_id');
    }

    public function defaultValue()
    {
        return $this->belongsToMany('DefaultValue', 'attributes_defaults', 'value_id', 'attribute_id');
    }

    public function products()
    {
        return $this->belongsToMany('Product', 'values', 'param_id', 'product_id')->withPivot('param_value');
    }

    /**
     * For frozennode/administrator
     */
    public function getDefaultTitlesAttribute()
    {
        $titles = NULL;
        
        if($this->getAttribute('defaultValue') !== NULL)
            $this->getAttribute('defaultValue')->each(function($param) use (&$titles) {
                $titles .= $param->title.'; ';
            });
        
        return trim($titles);
    }
    public function getCategoryTitlesAttribute()
    {
        $titles = NULL;

        if($this->getAttribute('category') !== NULL)
            $this->getAttribute('category')->each(function($param) use (&$titles) {
                $titles .= $param->title.'; ';
            });
        
        return trim($titles);
    }
}