@extends('backend.layout.base')

@section('title')
    Campus Lists
@endsection

@section('content')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Campus Lists</h3>
                        </div>
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <div class="toggle-expand-content" data-content="more-options">
                                    <ul class="nk-block-tools g-3">
                                        @permission('campus-create')
                                        <li class="nk-block-tools-opt">
                                            <a class="btn btn-dim btn-primary btn-sm" href="{{ route('admins.academic.campus.create') }}">
                                                <em class="icon ni ni-plus"></em>
                                                <span>Create</span>
                                            </a>
                                        </li>
                                        <li class="nk-block-tools-opt">
                                            <a class="btn btn-dim btn-secondary btn-sm" href="{{ route('admins.campus.history') }}">
                                                <em class="icon ni ni-histroy"></em>
                                                <span>Corbeille</span>
                                            </a>
                                        </li>
                                        @endpermission
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <table class="datatable-init nowrap nk-tb-list is-separate" data-auto-responsive="false">
                        <thead>
                            <tr class="nk-tb-item nk-tb-head text-center">
                                <th class="nk-tb-col tb-col-sm">
                                    <span>IMAGE</span>
                                </th>
                                <th class="nk-tb-col">
                                    <span>NOM</span>
                                </th>
                                <th class="nk-tb-col">
                                    <span>RESPONSABLE</span>
                                </th>
                                <th class="nk-tb-col">
                                    <span>INSTITUTION</span>
                                </th>
                                <th class="nk-tb-col">
                                    <span>ACTIONS</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($campuses as $campus)
                                <tr class="nk-tb-item text-center">
                                    <td class="nk-tb-col">
                                        <span class="tb-product">
                                            <img
                                                src="{{ asset('storage/'. $campus->images) }}"
                                                alt="{{ $campus->name }}"
                                                class="thumb img-fluid rounded-circle">
                                        </span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-lead">{{ ucfirst($campus->name) ?? "-" }}</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <span class="tb-lead">{{ ucfirst($campus->user->name) ?? "-" }}</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-lead">{{ ucfirst($campus->institution->institution_name) ?? "-" }}</span>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <span class="tb-lead">
                                            <div class="d-flex justify-content-center">
                                                @permission('campus-read')
                                                    <a href="{{ route('admins.academic.campus.show', $campus->id) }}"
                                                       class="btn btn-dim btn-primary btn-sm ml-1">
                                                        <em class="icon ni ni-eye-alt"></em>
                                                    </a>
                                                @endpermission
                                                @permission('campus-update')
                                                    <a href="{{ route('admins.academic.campus.edit', $campus->id) }}"
                                                       class="btn btn-dim btn-primary btn-sm ml-1">
                                                        <em class="icon ni ni-edit-alt"></em>
                                                    </a>
                                                @endpermission
                                                @permission('campus-delete')
                                                    <form action="{{ route('admins.academic.campus.destroy', $campus->id) }}" method="POST" onsubmit="return confirm('Voulez vous supprimer');">
                                                        @method('DELETE')
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <button type="submit" class="btn btn-dim btn-danger btn-sm">
                                                            <em class="icon ni ni-trash"></em>
                                                        </button>
                                                    </form>
                                                @endpermission
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
