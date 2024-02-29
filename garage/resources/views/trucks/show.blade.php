@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card mt-5">
                    <div class="card-header"><b>{{ $truck->brand }}</b> {{ $truck->plate }}</div>
                    <div class="card-body">
                        @foreach ($truck->mechanics as $mechanic)
                            <p>Prižiūrintis mechanikas <a
                                    href="{{ route('mechanics-show', $mechanic->id) }}">{{ $mechanic->name }}
                                    {{ $mechanic->surname }}</a></p>
                        @endforeach

                        <div>
                            <a href="{{ route('trucks-index') }}" class="btn btn-secondary m-1">Visi sunkvežimiai</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title', 'Sunkvežimio informacija')
