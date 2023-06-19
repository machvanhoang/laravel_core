<?php

namespace App\Repositories\Admin;

use App\Models\Admin;
use App\Repositories\BaseRepository;

class AdminRepository extends BaseRepository implements AdminRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel()
    {
        return Admin::class;
    }
}
