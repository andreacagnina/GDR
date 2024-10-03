@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($team as $member)
                <div class="col-12 col-md-4">
                    <div class="card text-center mb-4">
                        <img src="{{ $member['image'] }}" class="card-img-top" alt="img {{ $member['name'] }}">
                        <div class="card-body">
                            <h4 class="card-title">{{ $member['name'] }}</h4>
                            <p class="card-text p-2 color bg-dark"><strong>{{ $member['role'] }}</strong></p>
                            <figure class="text-center">
                                <blockquote class="blockquote">
                                    <p class="card-text p-2">"{{ $member['quote'] }}"</p>
                                </blockquote>
                                <figcaption class="blockquote-footer text-end">
                                    {{ $member['author'] }}
                                </figcaption>
                            </figure>
                            <p></p>
                            <p class="card-text"></p>
                            <a href="#" class="text-decoration-none text-dark"> {{ $member['email'] }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
