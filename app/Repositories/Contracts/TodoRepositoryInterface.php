<?php

namespace App\Repositories\Contracts;

interface TodoRepositoryInterface
{

    /**
     * Get All
     *
     * @return void
     */
    public function all();

    /**
     * Create
     *
     * @param $data
     * @return void
     */
    public function create(array $data);

    /**
     * Find
     *
     * @param int $id
     * @return void
     */
    public function find($id);

    /**
     * Update
     *
     * @param array $data
     * @param int $id
     * @return void
     */
    public function update(array $data, $id);

    /**
     * Delete
     *
     * @param int $id
     * @return void
     */
    public function delete($id);
}
