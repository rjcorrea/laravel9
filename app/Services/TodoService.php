<?php

namespace App\Services;

use App\Repositories\Contracts\TodoRepositoryInterface;

class TodoService
{
    private $todo;

    public function __construct(TodoRepositoryInterface $todo)
    {
        $this->todo = $todo;
    }

    public function all()
    {
        return $this->todo->all();
    }

    public function show($id)
    {
        return $this->todo->find($id);
    }

    public function store($request)
    {
        $data = $request->validated();
        return $this->todo->create($data);
    }

    public function update($request, $id)
    {
        $data = $request->validated();
        return $this->todo->update($data, $id);
    }

    public function delete($id)
    {
        return $this->todo->delete($id);
    }
}
