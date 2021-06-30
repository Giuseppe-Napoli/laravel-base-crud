
@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Nuovo fumetto</h1>
        <div class="row col-8 offset-2 pt-5">
            <form action="{{ route('fumettos.store') }}" method="post">
                @csrf
                @method('POST')

                <div class="mb-3">
                    <label for="title" class="form-label">Nome fumetto</label>
                    <input type="text" id="title" name="title" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea  id="description" name="description" class="form-control" rows="6"></textarea>
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">tipo</label>
                    <select  id="type" name="type" class="form-control">
                        <option value="comic book">comic book</option>
                        <option value="graphic novel">graphic novel</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="text" id="thumb" name="thumb" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" id="price" name="price" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" id="series" name="series" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data</label>
                    <input type="text" id="sale_date" name="sale_date" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-secondary ">Reset</button>

            </form>

        </div>
    </div>
@endsection