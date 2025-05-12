<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSermonRequest;
use App\Http\Requests\UpdateSermonRequest;
use App\Repositories\SermonRepository;

class SermonController extends Controller
{
    protected $sermonRepository;

    public function __construct(SermonRepository $sermonRepository)
    {
        $this->sermonRepository = $sermonRepository;
    }

    public function store(StoreSermonRequest $request)
    {
        $sermon = $this->sermonRepository->create($request->validated());

        return response()->json($sermon, 201);
    }

    public function update(UpdateSermonRequest $request, $id)
    {
        $sermon = $this->sermonRepository->findById($id);

        if (!$sermon) {
            return response()->json(['message' => 'Sermon not found'], 404);
        }

        $this->sermonRepository->update($sermon, $request->validated());

        return response()->json($sermon);
    }

    public function destroy($id)
    {
        $sermon = $this->sermonRepository->findById($id);

        if (!$sermon) {
            return response()->json(['message' => 'Sermon not found'], 404);
        }

        $this->sermonRepository->delete($sermon);

        return response()->json(['message' => 'Sermon deleted successfully']);
    }
}
