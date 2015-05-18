<?php namespace Agrosistemas\Storage;

use Illuminate\Container\Container;

trait RepositableTrait
{
    protected $model;

    protected $modelClassName;

    public function __construct(Container $app)
    {
        $this->model = $app->make($this->modelClassName);
    }

}