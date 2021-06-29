@extends('layouts.main')

@section('content')

    <section class="container">

        <div>
            <h1>{{ $fumetto->title }}</h1>
        </div>

        <div class="my-3">
            <span class="badge bg-primary">{{ $fumetto->type }}</span>
            {{ $fumetto->price }}€
        </div>

        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid" src="{{ $fumetto->thumb }}" alt="{{ $fumetto->title }}">
            </div>
            <div class="col-md-6">
                <p>{!! $fumetto->description !!}</p>
                <p class="mt-3">
                    <a href="{{ route('fumettos.index') }}" class="btn btn-success"><< back</a>
                </p>
            </div>
        </div>

    </section>
@endsection