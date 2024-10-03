@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <div class="content text-center d-flex justify-content-between align-items-baseline">
                    <h1>Characters</h1>
                    <h6><a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCreate"
                            aria-controls="offcanvasCreate">
                            + Add More
                        </a></h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <table class="table table-dark table-striped-columns">
                        <thead>
                            <tr class="text-center">
                                <th>Name</th>
                                <th>Strength</th>
                                <th>Defence</th>
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
                                    <td>{{ $character->defence }}
                                    </td>
                                    <td>{{ $character->speed }}
                                    </td>
                                    <td>{{ $character->intelligence }}
                                    </td>
                                    <td>{{ $character->life }}
                                    </td>
                                    <td>
                                        @switch($character->type_id)
                                            @case(1)
                                                Barbarian
                                            @break

                                            @case(2)
                                                Bard
                                            @break

                                            @case(3)
                                                Cleric
                                            @break

                                            @case(4)
                                                Druid
                                            @break

                                            @case(5)
                                                Fighter
                                            @break

                                            @case(6)
                                                Monk
                                            @break

                                            @case(7)
                                                Paladin
                                            @break

                                            @case(8)
                                                Ranger
                                            @break

                                            @case(9)
                                                Rogue
                                            @break

                                            @case(10)
                                                Sorcerer
                                            @break

                                            @case(11)
                                                Warlock
                                            @break

                                            @case(12)
                                                Wizard
                                            @break
                                        @endswitch

                                        {{ $character->type_id }}
                                    </td>
                                    <td class="d-flex align-items-center justify-content-evenly">
                                        <a class="color"
                                            href="{{ route('characters.edit', ['character' => $character->id]) }}"><i
                                                class="fa-solid fa-pen-to-square"></i></a>

                                        <form action="{{ route('characters.destroy', ['character' => $character->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm p-0 delete"
                                                onclick="return confirm('vuoi cancellare questo personaggio?')"
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
    @include('characters.create')
    @include('characters.partials.modal_delete')
@endsection
