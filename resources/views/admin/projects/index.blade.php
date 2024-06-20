@extends('layouts.admin')

@section('content')
    <div class="container p-5">
        <div class="d-flex justify-content-between mb-5">
            <h1>Projects</h1>
            <div>
                <a href="{{ route('admin.projects.create') }}">
                    <button class="btn btn-primary rounded-circle"><i class="fa-solid fa-plus"></i></button>
                </a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <hr>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Owner</th>
                    <th scope="col">Description</th>
                    <th scope="col">Utility</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->owner }}</td>
                        <td>{{ $item->description }}</td>
                        <td class="text-nowrap">
                            <a href=""><button class="btn btn-warning text-white"><i class="fa-solid fa-pen"></i></i></button></a>
                            <a href=""><button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
