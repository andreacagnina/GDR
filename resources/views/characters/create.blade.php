<div class="offcanvas offcanvas-end w-50 bg-dark @if ($errors->any()) show @endif" tabindex="-1"
    id="offcanvasCreate" aria-labelledby="offcanvasCreateLabel"
    @if ($errors->any()) style="display: block;" @endif>>
    <div class="offcanvas-header color">
        <h5 id="offcanvasCreateLabel">Add A New Character</h5>
    </div>
    <div class="offcanvas-body">
        <form action="{{ route('characters.store') }}" method="post">
            @csrf



            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                            id="name" autocomplete="off" value="{{ old('name') }}">
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
                        <select class="form-control @error('type_id') is-invalid @enderror" name="type_id"
                            id="type_id">
                            <option value="" disabled selected>Select A Class</option>
                            <option value="1" {{ old('type_id') == 1 ? 'selected' : '' }}>Barbarian</option>
                            <option value="2" {{ old('type_id') == 2 ? 'selected' : '' }}>Bard</option>
                            <option value="3" {{ old('type_id') == 3 ? 'selected' : '' }}>Cleric</option>
                            <option value="4" {{ old('type_id') == 4 ? 'selected' : '' }}>Druid</option>
                            <option value="5" {{ old('type_id') == 5 ? 'selected' : '' }}>Fighter</option>
                            <option value="6" {{ old('type_id') == 6 ? 'selected' : '' }}>Monk</option>
                            <option value="7" {{ old('type_id') == 7 ? 'selected' : '' }}>Paladin</option>
                            <option value="8" {{ old('type_id') == 8 ? 'selected' : '' }}>Ranger</option>
                            <option value="9" {{ old('type_id') == 9 ? 'selected' : '' }}>Rogue</option>
                            <option value="10" {{ old('type_id') == 10 ? 'selected' : '' }}>Sorcerer</option>
                            <option value="11" {{ old('type_id') == 11 ? 'selected' : '' }}>Warlock</option>
                            <option value="12" {{ old('type_id') == 12 ? 'selected' : '' }}>Wizard</option>
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
                    rows="5" cols="50" autocomplete="off">{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-danger fs-6 small">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label" for="strength">Strength</label>
                        <input class="form-control @error('strength') is-invalid @enderror" type="number"
                            min="1" max="15" name="strength" id="strength" autocomplete="off"
                            value="{{ old('strength') }}">
                        @error('strength')
                            <div class="text-danger fs-6 small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label" for="defense">Defense</label>
                        <input class="form-control @error('defense') is-invalid @enderror" type="number" min="1"
                            max="15" name="defense" id="defense" autocomplete="off"
                            value="{{ old('defense') }}">
                        @error('defense')
                            <div class="text-danger fs-6 small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label" for="speed">Speed</label>
                        <input class="form-control @error('speed') is-invalid @enderror" type="number" min="1"
                            max="15" name="speed" id="speed" autocomplete="off"
                            value="{{ old('speed') }}">
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
                            min="1" max="15" name="intelligence" id="intelligence" autocomplete="off"
                            value="{{ old('intelligence') }}">
                        @error('intelligence')
                            <div class="text-danger fs-6 small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label" for="life">Life</label>
                        <input class="form-control @error('life') is-invalid @enderror" type="number" name="life"
                            min="50" max="150" id="life" autocomplete="off"
                            value="{{ old('life') }}">
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
                    </div>
                </div>
                <div class="col">
                    <div class="mt-3">
                        <a class="btn btn-color reset" href="{{ route('characters.index') }}">Cancella</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
