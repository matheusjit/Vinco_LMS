<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Contracts\StudentRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\ConfirmerProfessorRequest;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\StudentUpdateRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

class StudentBackendController extends Controller
{
    public function __construct(
        protected readonly StudentRepositoryInterface $repository
    ) {
    }

    public function index(): Renderable
    {
        $students = $this->repository->students();

        return view('backend.domain.users.student.index', compact('students'));
    }

    public function create(): Renderable
    {
        return view('backend.domain.users.student.create');
    }

    public function store(StudentRequest $attributes): RedirectResponse
    {
        $this->repository->stored(attributes: $attributes);

        return to_route('admins.users.student.index');
    }

    public function show(string $key): Factory|View|Application
    {
        $student = $this->repository->showStudent($key);

        return view('backend.domain.users.student.show', compact('student'));
    }

    public function edit(string $key): Factory|View|Application
    {
        $student = $this->repository->showStudent($key);

        return view('backend.domain.users.student.edit', compact('student'));
    }

    public function update(StudentUpdateRequest $attributes, string $key): RedirectResponse
    {
        $this->repository->updated(key: $key, attributes: $attributes);

        return to_route('admins.users.student.index');
    }

    public function destroy(string $key): RedirectResponse
    {
        $this->repository->deleted(key: $key);

        return back();
    }

    public function activate(ConfirmerProfessorRequest $request): JsonResponse
    {
        $employee = $this->repository->changeStatus(attributes: $request);
        if ($employee) {
            return response()->json([
                'message' => 'The status has been successfully updated',
            ]);
        }

        return response()->json([
            'message' => 'Desoler',
        ]);
    }
}
