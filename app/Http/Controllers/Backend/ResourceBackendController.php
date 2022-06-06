<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Contracts\ResourceRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\LessonRequest;
use Flasher\SweetAlert\Prime\SweetAlertFactory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Response;

class ResourceBackendController extends Controller
{
    public function __construct(
        protected readonly ResourceRepositoryInterface $repository,
        protected readonly SweetAlertFactory $factory
    ) {
    }

    public function index(): Renderable
    {
        $resources = $this->repository->resources();

        return view('backend.domain.academic.resource.index', compact('resources'));
    }

    public function show($course, $chapter, string $key): Factory|View|Application
    {
        $chapter = $this->repository->showResource(key:  $key);

        return view('backend.domain.academic.resource.show');
    }

    public function create(): Renderable
    {
        $chapters = [];

        return view('backend.domain.academic.resource.create', compact('chapters'));
    }

    public function store(LessonRequest $attributes): RedirectResponse
    {
        $this->repository->stored(attributes: $attributes, factory: $this->factory);

        return to_route('admins.academic.resource.index');
    }

    public function edit(string $key): HttpResponse
    {
        $lesson = $this->repository->showResource(key:  $key);

        return Response::view('backend.domain.academic.resource.edit', compact('lesson'));
    }

    public function update(string $key, LessonRequest $attributes): RedirectResponse
    {
        $this->repository->updated(key: $key, attributes: $attributes, factory: $this->factory);

        return to_route('admins.academic.resource.index');
    }

    public function destroy(string $key): RedirectResponse
    {
        $this->repository->deleted(key: $key, factory: $this->factory);

        return back();
    }
}