<?php namespace Agrosistemas\Storage;

abstract class EloquentRepository implements RepositoryInterface
{
    use RepositableTrait;

    public function all($columns = ['*'])
    {
        return $this->model->all($columns);
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function update(array $attributes = [])
    {
        return $this->model->update($attributes);
    }

    public function delete()
    {
        return $this->model->delete();
    }  

}