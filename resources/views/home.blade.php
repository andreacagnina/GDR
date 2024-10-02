@extends('layouts.app')
@section('content')
    <div class="container">
        <div id="home">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Pixel GDR World</h1>
                    <p class="text-center">Immergiti nel nostro fantastico mondo in pixel art</p>
                    <div class="text-center">
                        <a href="{{ route('homepage') }}" class="btn-start">Inizia</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
