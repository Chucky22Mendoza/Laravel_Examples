@extends('template')

@section('header')

    <h1>This is our teammates</h1>

    @foreach($team as $teammate)
        <a href="{{ route('about_us', $teammate)}}" class="h4 text-danger">{{$teammate}}</a> <br>
    @endforeach

    @if(!empty($name))
        @switch($name)
            @case($name == 'Jesús Mendoza')
                <h2 class="mt-5">El nombre es {{ $name }}:</h2>
                <p>{{ $name }} Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, distinctio tempora. Rerum doloremque dicta eaque illo officia deserunt necessitatibus, saepe laboriosam pariatur facilis voluptatem et harum maxime dolore officiis ratione?</p>
                @break
            @case($name == 'Daniel Mendoza')
                <h2 class="mt-5">El nombre es {{ $name }}:</h2>
                <p>{{ $name }} Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, distinctio tempora. Rerum doloremque dicta eaque illo officia deserunt necessitatibus, saepe laboriosam pariatur facilis voluptatem et harum maxime dolore officiis ratione?</p>
                @break
            @case($name == 'Carlos Mendoza')
                <h2 class="mt-5">El nombre es {{ $name }}:</h2>
                <p>{{ $name }} Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, distinctio tempora. Rerum doloremque dicta eaque illo officia deserunt necessitatibus, saepe laboriosam pariatur facilis voluptatem et harum maxime dolore officiis ratione?</p>
                @break
            @default
                
        @endswitch
    @endif
@endsection