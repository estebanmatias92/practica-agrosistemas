<?php namespace Agrosistemas\Storage;


use Illuminate\Support\ServiceProvider;

/**
 * Allow bind the interfaces with their repositories when the interfaces are called.
 */
class StorageServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            'Agrosistemas\Storage\Crop\CropRepositoryInterface',
            'Agrosistemas\Storage\Crop\EloquentCropRepository'
        );
    }

}