<?php

namespace App\Traits;

trait Sort
{

    protected $sortBy = 'id';
    protected $sortDirection = 'desc';

    public function sortBy()
    {
        if (request()->has('sortBy')) {
            $this->sortBy = request()->sortBy;
        }

        return $this->sortBy;
    }

    public function sortDirection()
    {
        if (request()->has('sortDirection')) {
            $this->sortDirection = request()->sortDirection;
        }

        return $this->sortDirection;
    }
}
