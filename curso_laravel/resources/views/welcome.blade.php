@extends('template')

@section('header')

<div class="row mt-5">
    <div class="col-md-8">
        @if(session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <table class="table table-striped table-bordered table-hover bg-light">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notes as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>
                            <a href="{{ route('notes.detail', $item) }}">
                                {{ $item->name }}
                            </a>
                        </td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <a href="{{ route('notes.edit', $item) }}" class="btn btn-dark btn-sm">Edit</a>
                            <form action="{{ route('notes.delete', $item) }}" method="POST" class="d-inline">
                                <!-- Cambiar el method a put para poder editar el registro-->
                                @method('DELETE')
                                <!--csrf es un token de protección-->
                                @csrf
                                <button class="btn btn-primary btn-sm" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $notes->links() }}
    </div>
    <div class="col-md-4">
        <div class="container">
            <div class="card bg-secondary text-center">
                <div class="card-header bg-dark text-light">
                    <h3>New Note</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('notes.create') }}" method="POST">
                        <!--csrf es un token de protección-->
                        @csrf

                        @error('name')
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                Name is required
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror

                        @error('description')
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                Description is required
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @enderror

                        <input type="text" name="name" placeholder="Name" value="{{old('name')}}" class="form-control mb-2">
                        <input type="text" name="description" placeholder="Description" class="form-control mb-2" value="{{old('description')}}">
                        <button type="submit" class="btn btn-dark btn-block mt-4">Add note</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection