@extends('layouts.app')
@section('content')
    <div class="container my-3">
        <div class="row">
            <div class="col-6 offset-6">
                <div class="content">
                    <form action="{{ route('characters.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" for="name">Name</label>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text"
                                        name="name" id="name" autocomplete="off" value="{{ old('name') }}">
                                    @error('name')
                                        <div class="text-danger fs-6 small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" for="type_id">Class</label>
                                    <input class="form-control @error('type_id') is-invalid @enderror" type="number"
                                        name="type_id" id="type_id" autocomplete="off" value="{{ old('type_id') }}">
                                    @error('type_id')
                                        <div class="text-danger fs-6 small text-nowrap">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="description">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                                rows="10" cols="50" autocomplete="off">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="text-danger fs-6 small">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label class="form-label" for="strength">Strength</label>
                                    <input class="form-control @error('strength') is-invalid @enderror" type="number"
                                        name="strength" id="strength" autocomplete="off" value="{{ old('strength') }}">
                                    @error('strength')
                                        <div class="text-danger fs-6 small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label class="form-label" for="defence">Defence</label>
                                    <div class="input-group">
                                        <input class="form-control @error('defence') is-invalid @enderror" type="number"
                                            name="defence" id="defence" autocomplete="off" value="{{ old('defence') }}">
                                    </div>
                                    @error('defence')
                                        <div class="text-danger fs-6 small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="mb-3">
                                    <label class="form-label" for="speed">Speed</label>
                                    <input class="form-control @error('speed') is-invalid @enderror" type="number"
                                        name="speed" id="speed" autocomplete="off" value="{{ old('speed') }}">
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
                                        value="{{ old('intelligence') }}">
                                    @error('intelligence')
                                        <div class="text-danger fs-6 small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label class="form-label" for="life">Life</label>
                                    <input class="form-control @error('life') is-invalid @enderror" type="number"
                                        name="life" id="life" autocomplete="off" value="{{ old('life') }}">
                                    @error('life')
                                        <div class="text-danger fs-6 small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-color">Conferma</button>
                                </div>

                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <a class="btn btn-color reset" href="{{ Route('characters.index') }}">Cancella</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
