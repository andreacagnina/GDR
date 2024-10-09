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
                    <a href="{{ route('characters.barbarian') }}"
                        class="btn btn-outline-secondary text-barbarian">Barbarian</a>
                    <a href="{{ route('characters.bard') }}" class="btn btn-outline-secondary text-bard">Bard</a>
                    <a href="{{ route('characters.cleric') }}" class="btn btn-outline-secondary text-cleric">Cleric</a>
                    <a href="{{ route('characters.druid') }}" class="btn btn-outline-secondary text-druid">Druid</a>
                    <a href="{{ route('characters.fighter') }}" class="btn btn-outline-secondary text-fighter">Fighter</a>
                    <a href="{{ route('characters.monk') }}" class="btn btn-outline-secondary text-monk">Monk</a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="content text-center margin-t">
                        <a href="{{ route('characters.paladin') }}"
                            class="btn btn-outline-secondary text-paladin">Paladin</a>
                        <a href="{{ route('characters.ranger') }}" class="btn btn-outline-secondary text-ranger">Ranger</a>
                        <a href="{{ route('characters.rogue') }}" class="btn btn-outline-secondary text-rogue">Rogue</a>
                        <a href="{{ route('characters.sorcerer') }}"
                            class="btn btn-outline-secondary text-sorcerer">Sorcery</a>
                        <a href="{{ route('characters.warlock') }}"
                            class="btn btn-outline-secondary text-warlock ">Warlock</a>
                        <a href="{{ route('characters.wizard') }}" class="btn btn-outline-secondary text-wizard">Wizard</a>
                    </div>
                </div>
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
                                        @switch($character->type_id)
                                            @case(1)
                                                <span class="text-barbarian">Barbarian</span>
                                            @break

                                            @case(2)
                                                <span class="text-bard">Bard</span>
                                            @break

                                            @case(3)
                                                <span class="text-cleric">Cleric</span>
                                            @break

                                            @case(4)
                                                <span class="text-druid">Druid</span>
                                            @break

                                            @case(5)
                                                <span class="text-fighter">Fighter</span>
                                            @break

                                            @case(6)
                                                <span class="text-monk">Monk</span>
                                            @break

                                            @case(7)
                                                <span class="text-paladin">Paladin</span>
                                            @break

                                            @case(8)
                                                <span class="text-ranger">Ranger</span>
                                            @break

                                            @case(9)
                                                <span class="text-rogue">Rogue</span>
                                            @break

                                            @case(10)
                                                <span class="text-sorcerer">Sorcerer</span>
                                            @break

                                            @case(11)
                                                <span class="text-warlock">Warlock</span>
                                            @break

                                            @case(12)
                                                <span class="text-wizard">Wizard</span>
                                            @break
                                        @endswitch
                                    </td>
                                    <td class="d-flex align-items-center justify-content-evenly">
                                        <a class="color"
                                            href="{{ route('characters.edit', ['character' => $character->id]) }}"><i
                                                class="fa-solid fa-pen-to-square"></i></a>

                                        <form action="{{ route('characters.destroy', ['character' => $character->id]) }}"
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
