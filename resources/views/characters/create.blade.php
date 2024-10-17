<div class="offcanvas offcanvas-end w-75 bg-dark overflow-scroll @if ($errors->any()) show @endif"
    tabindex="-1" id="offcanvasCreate" aria-labelledby="offcanvasCreateLabel" data-bs-backdrop="static"
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
                        <label for="type_id" class="form-label">Class</label>
                        <select name="type_id" id="type_id"
                            class="form-control @error('type_id') is-invalid @enderror">
                            <option value="" disabled selected>-Select a Class-</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}" @selected($type->id == old('type_id'))>
                                    {{ $type->name }}
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
                            name="strength" id="strength" autocomplete="off" value="{{ old('strength') }}"
                            placeholder="(1-15)">
                        @error('strength')
                            <div class="text-danger fs-6 small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label" for="defense">Defense</label>
                        <input class="form-control @error('defense') is-invalid @enderror" type="number" name="defense"
                            id="defense" autocomplete="off" value="{{ old('defense') }}" placeholder="(1-15)">
                        @error('defense')
                            <div class="text-danger fs-6 small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label" for="speed">Speed</label>
                        <input class="form-control @error('speed') is-invalid @enderror" type="number" name="speed"
                            id="speed" autocomplete="off" value="{{ old('speed') }}"placeholder="(1-15)">
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
                            value="{{ old('intelligence') }}"placeholder="(1-15)">
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
                            value="{{ old('life') }}" placeholder="(50-150)">
                        @error('life')
                            <div class="text-danger fs-6 small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-12 my-2 mb-2">
                <label class="form-label mb-3" for="add-weapon">Take some Weapons</label>
                <div class="row">
                    @foreach ($items as $item)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="form-check my-1 d-flex align-items-baseline">
                                <input type="checkbox" class="form-check-input" name="items[]"
                                    id="item-{{ $item->id }}" value="{{ $item->id }}"
                                    {{ old('items') && in_array($item->id, old('items')) ? 'checked' : '' }}>
                                <label for="item-{{ $item->id }}"
                                    class="form-check-label ms-2 text-white">{{ $item->name }}</label>
                            </div>
                        </div>
                    @endforeach
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
