@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card bg-dark-gray border-0">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('images/barbarian.gif') }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body ">
                                <h3 class="card-title text-center text-white">{{ $character->name }}</h3>
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
