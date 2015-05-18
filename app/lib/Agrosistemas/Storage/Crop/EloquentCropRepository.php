<?php namespace Agrosistemas\Storage\Crop;

use Agrosistemas\Storage\EloquentRepository;

class EloquentCropRepository extends EloquentRepository implements CropRepositoryInterface
{
    protected $modelClassName = 'Crop';

    public function presenter()
    {
        return $this->model->presenter();
    }
}