@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content text-center d-flex justify-content-between align-items-baseline">
                    <h1>Weapons</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <table class="table table-dark table-striped-columns">
                        <thead>
                            <tr class="text-center">
                                <th>Nome</th>
                                <th>Arma a distanza o ravvicinata</th>
                                <th>Peso</th>
                                <th>Prezzo</th>
                                <th>Bonus al danno</th>
                            </tr>
                        </thead>

                        <tbody class="table-group-divider">
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->name }}
                                    </td>
                                    <td>{{ $item->category }}
                                    </td>
                                    <td>{{ $item->weight }}
                                    </td>
                                    <td>{{ $item->cost }}
                                    </td>
                                    <td>{{ $item->dice }}
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
