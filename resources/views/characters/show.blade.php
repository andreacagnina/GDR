@extends('layouts.app')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-6">
                <a href="{{ route('characters.index') }}" class="text-decoration-none">
                    <div class="d-flex align-items-center color">
                        <i class="fa-solid fa-rotate-left fa-2xl"></i>
                        <h3 class="ms-3">Back</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container  d-flex">
        <div class="row">
            <div class="col-12">
                <div class=" content card character-card bg-dark text-light p-4 rounded-5 d-flex">
                    <div class="col-12 text-center">
                        <h1>{{ $character->name }}</h1>
                    </div>
                    <div class="col-12 text-center text-{{ strtolower($character->type->name) }}">
                        <h2>{{ $character->type->name }}</h2>
                    </div>
                    <div class="col-12 text-center">
                        <div class="card-body">
                            <p class="mb-4">{{ $character->description }}</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex">
                            <img id='character-img' src="{{ asset($character->type->image) }}" class="img-fluid rounded"
                                alt="Character Image">
                            <table class="table rounded-pill align-middle">
                                <tbody>
                                    <tr>
                                        <th class="bg-dark text-light">Forza</th>
                                        <td class="bg-dark text-light">{{ $character->strength }}</td>
                                    </tr>
                                    <tr>
                                        <th class="bg-dark text-light">Difesa</th>
                                        <td class="bg-dark text-light">{{ $character->defense }}</td>
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
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 gx-5">
                <div class="card character-card bg-dark text-light p-4 rounded-5">
                    <div class="row h-100">
                        <div class="col-12 h-100">
                            <div class="content text-center h-100">
                                <p class="overflow-auto h-100 lh-lg">
                                    {{ $character->type->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
