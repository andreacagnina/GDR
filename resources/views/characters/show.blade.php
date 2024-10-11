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
    <div class="container d-flex card character-card bg-dark text-light p-4 rounded-5 d-flex h-100">
        <div class="row">
            <div class="col-12">
                <div class="content text-center ">
                    <h1>{{ $character->name }}</h1>
                    <h2 class="text-{{ strtolower($character->type->name) }}">{{ $character->type->name }}</h2>
                    <p class="mb-4">{{ $character->description }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 ">
                <div class="content d-flex">
                    <div class="col-md-3">
                        <img id='character-img' src="{{ asset($character->type->image) }}" class="img-fluid rounded d-none d-md-inline" alt="Character Image">
                    </div>
                    <div class=" col-12 col-md-3">
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
                    <div class="col-6 d-none d-md-table-cell">
                        <div class="content px-5">
                            <p class="overflow-auto lh-lg" style="max-height: 300px;">
                                {{ $character->type->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-12 col-md-6">
                <form action="{{ route('characters.store') }}" method="post">
                @csrf
                    <div class="content mb-3">
                        <label for="type_id" class="form-label">Equip:</label>
                            <select name="type_id" id="type_id"
                            class="form-control @error('') is-invalid @enderror">
                                <option value="" disabled selected>-Select an Item-</option>
                                <option value="1" disabled selected>-Item 1-</option>
                                <option value="2" disabled selected>-Item 2-</option>
                                @foreach ( as )
                                <option value="{{  }}" @selected( == old(''))>
                                    {{  }}
                                </option>
                                @endforeach
                            </select>
                            @error('')
                                <div class="text-danger fs-6 small">{{ $message }}</div>
                                @enderror
                            </select>
                        <button type="submit" class="btn btn-color">Conferma</button>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
