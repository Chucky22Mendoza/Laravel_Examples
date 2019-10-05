@extends('template')

@section('header')

    <h1>Teammates</h1>

    @foreach($team as $teammate)
        <a href="{{ route('about_us', $teammate)}}" class="h4 text-dark">{{$teammate}}</a> <br>
    @endforeach

    @if(!empty($name))
        @switch($name)
            @case($name == 'Jesús Mendoza')
                <h2 class="mt-5">{{ $name }}:</h2>
                <p class="text-dark">{{ $name }} Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, distinctio tempora. Rerum doloremque dicta eaque illo officia deserunt necessitatibus, saepe laboriosam pariatur facilis voluptatem et harum maxime dolore officiis ratione?</p>
                <div class="d-flex justify-content-center">
                    <img src="{{asset('img/Jesus.jpeg')}}" width="450">
                </div>
                @break
            @case($name == 'Daniel Mendoza')
                <h2 class="mt-5">{{ $name }}:</h2>
                <p class="text-dark">{{ $name }} Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, distinctio tempora. Rerum doloremque dicta eaque illo officia deserunt necessitatibus, saepe laboriosam pariatur facilis voluptatem et harum maxime dolore officiis ratione?</p>
                <div class="d-flex justify-content-center">
                    <img src="{{asset('img/Daniel.jpg')}}" width="450">
                </div>
                @break
            @case($name == 'Carlos Mendoza')
                <h2 class="mt-5">{{ $name }}:</h2>
                <p class="text-dark">{{ $name }} Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, distinctio tempora. Rerum doloremque dicta eaque illo officia deserunt necessitatibus, saepe laboriosam pariatur facilis voluptatem et harum maxime dolore officiis ratione?</p>
                <div class="d-flex justify-content-center">
                    <img src="{{asset('img/Dkoppa.jpg')}}" width="450">
                </div>
                @break
            @default
        @endswitch
    @endif
@endsection