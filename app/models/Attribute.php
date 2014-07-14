<?php
use LaravelBook\Ardent\Ardent;

class Attribute extends Ardent {

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

    public function defaults()
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
        
        if($this->getAttribute('defaults') !== NULL)
            $this->getAttribute('defaults')->each(function($param) use (&$titles) {
                $titles .= $param->title.'; ';
            });
        
        return trim($titles);
    }

    public function beforeSave()
    {
        $this->attributes['alias'] = $this->attributes['alias'] ? $this->attributes['alias'] : Slug::make($this->attributes['title']);
    }
}