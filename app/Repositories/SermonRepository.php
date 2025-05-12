<?php

namespace App\Repositories;

use App\Models\Sermon;

class SermonRepository
{
    public function create(array $data): Sermon
    {
        return Sermon::create($data);
    }

    public function update(Sermon $sermon, array $data): bool
    {
        return $sermon->update($data);
    }

    public function delete(Sermon $sermon): bool
    {
        return $sermon->delete();
    }

    public function findById(int $id): ?Sermon
    {
        return Sermon::find($id);
    }

    public function all()
    {
        return Sermon::all();
    }
}