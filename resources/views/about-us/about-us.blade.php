@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($team as $member)
                <div class="col-12 col-md-3 mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">{{ $member['name']}}</h5>
                            <p class="card-text"><strong>{{ $member['role']}}</strong></p>
                            <p class="card-text">{{ $member['quote']}}</p>
                            <p class="card-text">{{ $member['author']}}</p>
                            <a href="" class="text-decoration-none">{{ $member['email'] }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection