<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Api;

use App\Http\Requests\ProfessorApiRequest;
use App\Repositories\Api\ProfessorApiRepository;
use Symfony\Component\HttpFoundation\Response;

class ProfessorApiController
{
    public function getInstitution(ProfessorApiRequest $apiRequest, ProfessorApiRepository $repository)
    {
        $campus = $repository->getProfessor($apiRequest);

        return response()->json([
            'professors' => $campus,
            'status' => 'success',
        ], Response::HTTP_OK);
    }
}
