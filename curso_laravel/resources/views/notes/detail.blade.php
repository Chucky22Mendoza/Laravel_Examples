@extends('template')

@section('header')
    <h1>Detail of the note:</h1>
    <h4>ID: {{ $note->id }}</h4>
    <h4>Name: {{ $note->name }}</h4>
    <h4>Description: {{ $note->description }}</h4>
@endsection