<?php

class Material extends BaseModel
{
    protected $table = 'material';

    protected $primaryKey = 'ID';

    protected $foreignKey = 'cropID'

    public $timestamps = false;

    // Don't forget to fill this array
    protected $fillable = [];

    /**
     * Model relationship
     *
     * @return \Crop
     */
    public function crop()
    {
        return $this->belongsTo('Crop', 'cropID');
    }

}