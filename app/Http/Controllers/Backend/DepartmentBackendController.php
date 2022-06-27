<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Contracts\DepartmentRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\DepartmentRequest;
use App\Http\Requests\DepartmentStatusRequest;
use Flasher\SweetAlert\Prime\SweetAlertFactory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpFoundation\Response as SymfonyHttp;
use function Pest\Laravel\delete;

class DepartmentBackendController extends Controller
{
    public function __construct(
        protected readonly DepartmentRepositoryInterface $repository,
        protected readonly SweetAlertFactory $factory
    ) {
    }

    public function index(): Renderable
    {

        $departments = $this->repository->getDepartments();

        $this->authorize('Department-list', $departments);

        return view('backend.domain.academic.departments.index', compact('departments'));
    }

    public function show(string $key): Factory|View|Application
    {
        $department = $this->repository->showDepartment(key:  $key);

        return view('backend.domain.academic.departments.show', compact('department'));
    }

    public function create(): Renderable
    {
        return view('backend.domain.academic.departments.create');
    }

    public function store(DepartmentRequest $attributes): RedirectResponse
    {
        abort_if(Gate::denies('Department-create'), SymfonyHttp::HTTP_FORBIDDEN, '403 Forbidden');

        $this->repository->stored(attributes: $attributes, factory: $this->factory);

        return to_route('admins.academic.departments.index');
    }

    public function edit(string $key): Factory|View|Application
    {
        $department = $this->repository->showDepartment(key:  $key);

        return view('backend.domain.academic.departments.edit', compact('department'));
    }

    public function update(string $key, DepartmentRequest $attributes): RedirectResponse
    {
        abort_if(Gate::denies('Department-edit'), SymfonyHttp::HTTP_FORBIDDEN, '403 Forbidden');

        $this->repository->updated(key: $key, attributes: $attributes, factory: $this->factory);

        return Response::redirectToRoute('admins.academic.departments.index');
    }

    public function destroy(string $key): RedirectResponse
    {
        abort_if(Gate::denies('Department-delete'), SymfonyHttp::HTTP_FORBIDDEN, '403 Forbidden');

        $this->repository->deleted(key: $key, factory: $this->factory);

        return Response::redirectToRoute('admins.academic.departments.index');
    }

    public function activate(DepartmentStatusRequest $request): JsonResponse
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
