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
                <div class="content text-center my-10">
                    @foreach ($types as $type)
                        <a href="{{ route('characters.indexByType', ['type' => $type->name]) }}"
                            class="btn btn-outline-secondary text-{{ strtolower($type->name) }}">{{ $type->name }}</a>
                    @endforeach

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="content text-center my-10"><a href="{{ route('characters.index') }}"
                                class="btn btn-outline-color">Show All</a></div>
                    </div>
                </div>
            </div>

            @if (session('success'))
                <div class="row">
                    <div class="col-12">
                        <div class="content mt-3 text-center">
                            <div id="success-alert" class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        </div>
                    </div>
                </div>
            @endif

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
                                    <th class="d-none d-md-table-cell">Strength</th>
                                    <th class="d-none d-md-table-cell">Defense</th>
                                    <th class="d-none d-md-table-cell">Speed</th>
                                    <th class="d-none d-md-table-cell">Intelligence</th>
                                    <th class="d-none d-md-table-cell">Life</th>
                                    <th>Class</th>
                                    <th>Tools</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($characters as $character)
                                    <tr>
                                        <td><a
                                                href="{{ route('characters.show', ['character' => $character->id]) }}">{{ ucwords($character->name) }}</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">{{ $character->strength }}
                                        </td>
                                        <td class="d-none d-md-table-cell">{{ $character->defense }}
                                        </td>
                                        <td class="d-none d-md-table-cell">{{ $character->speed }}
                                        </td>
                                        <td class="d-none d-md-table-cell">{{ $character->intelligence }}
                                        </td>
                                        <td class="d-none d-md-table-cell">{{ $character->life }}
                                        </td>
                                        <td>
                                            <span
                                                class="text-{{ strtolower($character->type->name) }}">{{ $character->type->name }}</span>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-6">
                                                    <a class="color"
                                                        href="{{ route('characters.edit', ['character' => $character->id]) }}"><svg
                                                            width="20" height="20" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M18 2H16V4H18V2ZM3.99988 4.00002H9.99988V6.00002H3.99988V20H17.9999V14H19.9999V22H19.9999V22H1.99988V22V20V6.00002V4.00002H3.99988ZM8.00006 12H6.00006V16V18V18H12.0001V16L13.9999 16V14H11.9999V16L8.00006 16V12ZM11.9999 10H10V11.9999H8V9.99994H9.99994V8.00002H11.9999V6.00002H13.9999V8.00002H11.9999V10ZM14.0001 4.00002H16.0001V6.00002H14.0001V4.00002ZM17.9999 4.00002H19.9999V6.00002H21.9999V8.00002H19.9999V10H18V11.9999H16V9.99994H17.9999V8.00002H19.9999V6.00002H17.9999V4.00002ZM14.0001 12H16.0001V14H14.0001V12Z"
                                                                fill="yellow" />
                                                        </svg>
                                                    </a>
                                                </div>
                                                <div class="col-6">
                                                    <form
                                                        action="{{ route('characters.destroy', ['character' => $character->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm p-0 delete-character"
                                                            data-characterName="{{ $character->name }}"><svg width="20"
                                                                height="20" viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M15.9995 2H15.9998V4H15.9995V6H17.9995H19.9995H21.9995V8H19.9995V20H19.9998V22L19.9995 22H17.9995H5.99976L3.99976 22V20V8H1.99951V6H3.99976H5.99976H7.99976V4V2H9.99976H13.9995H15.9995ZM13.9995 4H9.99976V6H13.9995V4ZM13.9995 8H9.99976H7.99976L5.99976 8V20H17.9995V8L15.9995 8H13.9995ZM8.99951 10H10.9995V18H8.99951V10ZM14.9998 10H12.9998V18H14.9998V10Z"
                                                                    fill="red" />
                                                            </svg>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
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
