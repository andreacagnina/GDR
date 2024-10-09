@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <h1>Characters</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="content text-center margin-t">
                    @foreach ($types as $type)
                        <a href="{{ route('characters.indexByType', ['type' => $type->name]) }}"
                            class="btn btn-outline-secondary text-{{ strtolower($type->name) }}">{{ $type->name }}</a>
                    @endforeach

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="content text-center margin-t"><a href="{{ route('characters.index') }}"
                                class="btn btn-outline-color">Show All</a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="content">

                        <h6><a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCreate"
                                aria-controls="offcanvasCreate" class="btn btn-sm btn-color-gray">
                                + Add More
                            </a></h6>

                        <table class="table table-dark table-striped-columns">
                            <thead>
                                <tr class="text-center">
                                    <th>Name</th>
                                    <th>Strength</th>
                                    <th>Defense</th>
                                    <th>Speed</th>
                                    <th>Intelligence</th>
                                    <th>Life</th>
                                    <th>Class</th>
                                    <th>Tools</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($characters as $character)
                                    <tr>
                                        <td><a
                                                href="{{ route('characters.show', ['character' => $character->id]) }}">{{ $character->name }}</a>
                                        </td>
                                        <td>{{ $character->strength }}
                                        </td>
                                        <td>{{ $character->defense }}
                                        </td>
                                        <td>{{ $character->speed }}
                                        </td>
                                        <td>{{ $character->intelligence }}
                                        </td>
                                        <td>{{ $character->life }}
                                        </td>
                                        <td>
                                            <span
                                                class="text-{{ strtolower($character->type->name) }}">{{ $character->type->name }}</span>
                                        </td>
                                        <td
                                            class="d-flex
                                        align-items-center justify-content-evenly">
                                            <a class="color"
                                                href="{{ route('characters.edit', ['character' => $character->id]) }}"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>

                                            <form
                                                action="{{ route('characters.destroy', ['character' => $character->id]) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm p-0 delete-character"
                                                    data-characterName="{{ $character->name }}"><i
                                                        class="fa-solid fa-trash text-danger"></i>
                                                </button>
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
        @include('characters.character_modal')
        @include('characters.create')
    @endsection
