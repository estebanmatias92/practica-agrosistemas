<?php

use Laracasts\Presenter\PresentableTrait;

class Crop extends BaseModel
{
    use PresentableTrait;
    
    protected $table = 'crop';

    protected $primaryKey = 'ID';

    public $timestamps = false;

	// Don't forget to fill this array
	protected $fillable = [];

    protected $presenter = 'Agrosistemas\\Presenters\\CropPresenter';

    /**
     * Model relationship
     *
     * @return \Material
     */
    public function materials()
    {
        return $this->hasMany('Material', 'cropID');
    }

}