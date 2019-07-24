@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>List of Notes for: {{auth()->user()->name}}</span>
                    <a href="/notes/create" class="btn btn-primary btn-sm">New Note</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notes as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->description }}</td>
                                <td>Action</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$notes->links()}}
                {{-- fin card body --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection