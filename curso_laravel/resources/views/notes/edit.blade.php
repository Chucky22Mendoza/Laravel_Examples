@extends('template')

@section('header')

<div class="col-md-6 offset-md-3 mt-5 pt-5">
    <div class="container">
        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="card bg-secondary text-center">
            <div class="card-header">
                <h3>Edit note {{ $note->name }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('notes.update', $note->id) }}" method="POST">
                    <!-- Cambiar el method a put para poder editar el registro-->
                    @method('PUT')
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

                    <input type="text" name="name" placeholder="Name" value="{{ $note->name }}" class="form-control mb-2">
                    <input type="text" name="description" placeholder="Description" class="form-control mb-2" value="{{ $note->description }}">
                    <button type="submit" class="btn btn-primary btn-block mt-4">Update note</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection