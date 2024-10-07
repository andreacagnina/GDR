@extends('layouts.app')
@section('content')
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <h1>{{ $character->name }}</h1>
            </div>
            <div class="col-12">
                <a href="{{ route('characters.index') }}" class="color">
                    <div class="d-flex align-items-center">
                        <div>
                            <i class="fa-solid fa-rotate-left fa-2xl align-top"></i>
                        </div>
                        <h3 class="m-2">Back</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card bg-dark-gray border-0 mt-2">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('images/barbarian.gif') }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body text-center">
                                <p class="card-text text-secondary">{{ $character->description }}</p>
                                <table class="table table-striped table-dark">
                                    <thead>
                                        <tr>
                                            <th>Forza</th>
                                            <th>Difesa</th>
                                            <th>Velocità</th>
                                            <th>Intelligenza</th>
                                            <th>Vita</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $character->strength }}</td>
                                            <td>{{ $character->defence }}</td>
                                            <td>{{ $character->speed }}</td>
                                            <td>{{ $character->intelligence }}</td>
                                            <td>{{ $character->life }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
