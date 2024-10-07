@extends('layouts.app')
@section('content')
    <div class="container my-3 d-flex justify-content-center">
        <div class="card character-card bg-dark text-light p-4 rounded-5">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h1 class="display-4">{{ $character->name }}</h1>
                </div>
                <div class="col-6">
                    <div class="d-felx">
                        <img id='character-img' src="{{ asset('images/barbarian.gif') }}" class="img-fluid rounded"
                            alt="Character Image">
                    </div>
                </div>
                <div class="col-5">
                    <div class="content">
                        <table class="table rounded-pill">
                            <tbody>
                                <tr>
                                    <th class="bg-dark text-light">Forza</th>
                                    <td class="bg-dark text-light">{{ $character->strength }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-dark text-light">Difesa</th>
                                    <td class="bg-dark text-light">{{ $character->defence }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-dark text-light">Velocità</th>
                                    <td class="bg-dark text-light">{{ $character->speed }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-dark text-light">Intelligenza</th>
                                    <td class="bg-dark text-light">{{ $character->intelligence }}</td>
                                </tr>
                                <tr>
                                    <th class="bg-dark text-light">Vita</th>
                                    <td class="bg-dark text-light">{{ $character->life }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-6 d-flex justify-content-center ms-5">
                    <h3>Classe</h3>
                </div>
                <div class="col-12 mt-5 text-center">
                    <div class="card-body">
                        <p class="mb-4">{{ $character->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-12 text-center">
            <a href="{{ route('characters.index') }}" class="text-decoration-none">
                <div class="d-flex justify-content-center align-items-center">
                    <i class="fa-solid fa-rotate-left fa-2xl"></i>
                    <h3 class="ms-3">Back</h3>
                </div>
            </a>
        </div>
    </div>
@endsection
