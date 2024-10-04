@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mb-3" style="max-width: 1200px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('images/barbarian.gif') }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $character->name }}</h5>
                                <p class="card-text">{{ $character->description }}</p>

                                <table class="table table-striped">
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
