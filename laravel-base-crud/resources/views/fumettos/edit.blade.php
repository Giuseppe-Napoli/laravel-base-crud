@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Modifica:
            <a href="{{ route('fumettos.show',$fumetto) }}">{{ $fumetto->title }}</a>
        </h1>
        <div class="row col-8 offset-2 pt-5">
            <form action="{{ route('fumettos.update', $fumetto) }}" method="post">
                @csrf
                @method('PATCH')

                <div class="mb-3">
                    <label for="title" class="form-label">Nome prodotto</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ $fumetto->title  }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea  id="description" name="description" class="form-control" rows="6">{{ $fumetto->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">tipo</label>
                    <select  id="type" name="type" class="form-control">
                        <option value="comic book" @if ($fumetto->type === 'comic book') selected @endif>comic book</option>
                        <option value="graphic novel" @if ($fumetto->type === 'graphic novel') selected @endif>graphic novel</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="text" id="thumb" name="thumb" class="form-control" value="{{ $fumetto->thumb }}">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" id="price" name="price" class="form-control" value="{{ $fumetto->price }}">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Tempo di cottura</label>
                    <input type="text" id="series" name="series" class="form-control" value="{{ $fumetto->series }}">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Tempo di cottura</label>
                    <input type="text" id="sale_date" name="sale_date" class="form-control" value="{{ $fumetto->sale_date }}">
                </div>

                <button type="submit" class="btn btn-primary">Invia</button>

            </form>

        </div>
    </div>
@endsection