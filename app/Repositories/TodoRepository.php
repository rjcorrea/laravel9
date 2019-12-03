<?php

namespace App\Repositories;

use App\Repositories\Contracts\TodoRepositoryInterface;
use App\Todo;
use App\Traits\Sort;

class TodoRepository implements TodoRepositoryInterface
{
    use Sort;

    private $model;

    public function __construct(Todo $model)
    {
        $this->model = $model;
    }

    /**
     * Get All
     *
     * @return void
     */
    public function all()
    {
        $sortBy = $this->sortBy();
        $sortDirection = $this->sortDirection();
        return $this->model->orderBy($sortBy, $sortDirection)->paginate(10);
    }

    /**
     * Create
     *
     * @return void
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * Find
     *
     * @param int $id
     * @return void
     */
    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Update
     *
     * @param int $id
     * @return void
     */
    public function update(array $data, $id)
    {
        return $this->model->findOrFail($id)->update($data);
    }

    /**
     * Delete
     *
     * @param int $id
     * @return void
     */
    public function delete($id)
    {
        return $this->model->findOrFail($id)->delete();
    }
}
