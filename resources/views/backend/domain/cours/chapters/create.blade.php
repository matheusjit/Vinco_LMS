@extends('backend.layout.base')

@section('title', "Administration")

@section('content')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Creation des chapitre</h3>
                        </div>
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <div class="toggle-expand-content" data-content="more-options">
                                    <ul class="nk-block-tools g-3">
                                        <li class="nk-block-tools-opt">
                                            <a class="btn btn-dim btn-primary btn-sm" href="{{ route('admins.course.show', ['course' => $course->key]) }}">
                                                <em class="icon ni ni-arrow-left"></em>
                                                <span>Back</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <div class="card">
                        <div class="card-inner">
                            <form action="{{ route('admins.chapters.store') }}" method="post" class="form-validate" novalidate="novalidate" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-gs">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label" for="name">Titre du chapitre</label>
                                            <div class="form-control-wrap">
                                                <input
                                                    type="text"
                                                    class="form-control @error('name') error @enderror"
                                                    id="name"
                                                    name="name"
                                                    value="{{ old('name') }}"
                                                    placeholder="Saisir le nom du cours"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label" for="course">Nom du cours</label>
                                            <div class="form-control-wrap">
                                                <input
                                                    type="text"
                                                    class="form-control @error('course') error @enderror"
                                                    id="course"
                                                    name="course"
                                                    readonly
                                                    value="{{ old('course') ?? $course->name }}"
                                                    placeholder="Nom du cours"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label" for="displayType">Type d'affichage</label>
                                            <div class="form-control-wrap">
                                                <input
                                                    type="text"
                                                    class="form-control @error('displayType') error @enderror"
                                                    id="displayType"
                                                    name="displayType"
                                                    value="{{ old('displayType') }}"
                                                    placeholder="type d'affichage"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="description">Description</label>
                                            <div class="form-control-wrap">
                                                <textarea
                                                    class="form-control form-control-sm @error('description') error @enderror"
                                                    id="description"
                                                    name="description"
                                                    placeholder="Write the description"
                                                >{{ old('description') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-md btn-primary">Create chapter</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection