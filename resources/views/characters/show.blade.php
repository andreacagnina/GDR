@extends('layouts.app')
@section('content')
    <div class="container mt-3 mb-2">
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
        <div class="container card character-card b-grey bg-dark text-light p-4 rounded-5 h-100">
            <div class="row">
                <div class="col-12">
                    <div class="content text-center">
                        <h1>{{ ucwords($character->name) }}</h1>
                        <div class="row">
                            <div class="col-6">
                                <h2 class="text-{{ strtolower($character->type->name) }}">{{ $character->type->name }}</h2>
                            </div>
                            <div class="col 6">
                                <div class="btn-group dropdown w-100">
                                    <button class="btn btn-secondary btn-lg dropdown-toggle w-100" type="button"
                                        data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
                                        Description
                                    </button>
                                    <div class="dropdown-menu w-100 m-0 p-1 bg-dark text-light text-center">
                                        <div>
                                            <h3 class="b-grey rounded-top-5 m-0 p-1">Class:</h3>
                                        </div>
                                        <div class="content text-center b-grey rounded-bottom-5">
                                            <p class="overflow-auto" style="max-height: 250px;">
                                                {{ $character->type->description }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="d-flex">
                    <div class="col-3">
                        <img id='character-img' src="{{ asset($character->type->image) }}" class="img-fluid rounded"
                            alt="Character Image">
                    </div>
                    <div class="col-2 offset-1">
                        <h4 class="pb-3">Weapons:</h4>
                        @forelse($character->items as $item)
                            <div class="d-flex align-items-center justify-content-between py-2">
                                <p class="mb-0 text-start flex-grow-1">{{ $item->name }}</p>
                                <img id='item-img' src="{{ url($item->image) }}" alt="Item Image"
                                    class="img-fluid rounded p-1" style="max-width: 50px; height: auto;">
                            </div>
                        @empty
                            <span class="text-danger">-nessuna item per il personaggio-</span>
                        @endforelse
                    </div>

                    <div class="col-5 offset-1">
                        <table class="table table-borderless text-light">
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
            <div class="row mt-4">
                <div class="col-12">
                    <div class="content text-center">
                        <p class="mb-4">{{ $character->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endsection
