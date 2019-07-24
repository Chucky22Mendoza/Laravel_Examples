@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Add Note</span>
                    <a href="/notes" class="btn btn-primary btn-sm">Go back to list of notes...</a>
                </div>
                <div class="card-body">
                    @if ( session('message') )
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif
                    <form method="POST" action="/notes">
                        @csrf
                        <input type="text" name="name" placeholder="Name" class="form-control mb-2"/>
                        <input type="text" name="description" placeholder="Description" class="form-control mb-2"/>
                        <button class="btn btn-primary btn-block" type="submit">ADD</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection