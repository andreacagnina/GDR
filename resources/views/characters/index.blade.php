@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="content text-center d-flex justify-content-between align-items-center">
                    <div>
                        <h1>Characters</h1>
                    </div>
                    <div>
                        <a href="{{ Route('characters.create') }}"><i class="fa-solid fa-plus"></i> Add</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Descritpion</th>
                                <th>Strength</th>
                                <th>Defence</th>
                                <th>Speed</th>
                                <th>Intelligence</th>
                                <th>Life</th>
                                <th>Type ID</th>
                                <th>Strumenti</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($characters as $character)
                                <tr>
                                    <td>{{ $character->id }}</td>
                                    <td>{{ $character->name }}</td>
                                    <td>{{ $character->descritpion }}</td>
                                    <td>{{ $character->strength }}</td>
                                    <td>{{ $character->defence }}</td>
                                    <td>{{ $character->speed }}</td>
                                    <td>{{ $character->intelligence }}</td>
                                    <td>{{ $character->life }}</td>
                                    <td>{{ $character->type_id }}</td>
                                    <td class="d-flex justify-content-between align-items-center"><a class="text-success"
                                            href="{{ route('characters.show', ['character' => $character->id]) }}"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a class="text-warning"
                                            href="{{ route('characters.edit', ['character' => $character->id]) }}"><i
                                                class="fa-solid fa-pen-to-square"></i></a>

                                        <form action="{{ route('characters.destroy', ['character' => $character->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm p-0 delete"
                                                data-charactertitle="{{ $character->title }}"><i
                                                    class="fa-solid fa-trash text-danger"></i>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
