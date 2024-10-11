@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <div class="content color">
                    <h2>Edit A Character</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{ route('characters.update', ['character' => $character->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text"
                                    name="name" id="name" autocomplete="off"
                                    value="{{ old('name', $character->name) }}">
                                @error('name')
                                    <div class="text-danger fs-6 small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="type_id" class="form-label">Class</label>
                                <select name="type_id" id="type_id"
                                    class="form-control @error('type_id') is-invalid @enderror">
                                    <option value="" disabled selected>-Select a Class-</option>
                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}" @selected($type->id == old('type_id', $character->type ? $character->type->id : ''))>{{ $type->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('type_id')
                                    <div class="text-danger fs-6 small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="description">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                            rows="5" cols="50" autocomplete="off">{{ old('description', $character->description) }}</textarea>
                        @error('description')
                            <div class="text-danger fs-6 small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label class="form-label" for="strength">Strength</label>
                                <input class="form-control @error('strength') is-invalid @enderror" type="number"
                                    name="strength" id="strength" autocomplete="off"
                                    value="{{ old('strength', $character->strength) }}">
                                @error('strength')
                                    <div class="text-danger fs-6 small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label class="form-label" for="defense">Defense</label>
                                <input class="form-control @error('defense') is-invalid @enderror" type="number"
                                    name="defense" id="defense" autocomplete="off"
                                    value="{{ old('defense', $character->defense) }}">
                                @error('defense')
                                    <div class="text-danger fs-6 small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label class="form-label" for="speed">Speed</label>
                                <input class="form-control @error('speed') is-invalid @enderror" type="number"
                                    name="speed" id="speed" autocomplete="off"
                                    value="{{ old('speed', $character->speed) }}">
                                @error('speed')
                                    <div class="text-danger fs-6 small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label class="form-label" for="intelligence">Intelligence</label>
                                <input class="form-control @error('intelligence') is-invalid @enderror" type="number"
                                    name="intelligence" id="intelligence" autocomplete="off"
                                    value="{{ old('intelligence', $character->intelligence) }}">
                                @error('intelligence')
                                    <div class="text-danger fs-6 small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label class="form-label" for="life">Life</label>
                                <input class="form-control @error('life') is-invalid @enderror" type="number"
                                    name="life" id="life" autocomplete="off"
                                    value="{{ old('life', $character->life) }}">
                                @error('life')
                                    <div class="text-danger fs-6 small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col">
                            <div class="mt-3">
                                <button type="submit" class="btn btn-color">Conferma</button>
                                <a class="btn btn-color reset" href="{{ route('characters.index') }}">Cancella</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
