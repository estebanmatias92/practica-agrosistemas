<?php namespace Agrosistemas\Storage;

interface RepositoryInterface
{
    public function all($columns = ['*']);
    public function create(array $attributes);
    public function update(array $attributes = []);
    public function delete();
    
}