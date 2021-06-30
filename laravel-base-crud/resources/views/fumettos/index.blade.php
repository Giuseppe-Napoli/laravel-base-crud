@extends('layouts.main')

@section('content')
<section class="container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Price</th>
                <th colspan="3">Actions</th>
            </tr>
        </thead>
        <tbody>
            
             @foreach ($fumettos as $fumetto)
                <tr>
                    <td>{{ $fumetto->id }}</td>
                    <td>{{ $fumetto->title }}</td>
                    <td>{{ $fumetto->price }}€</td>
                    <td>
                        <a href="{{ route('fumettos.show', $fumetto) }} " class="btn btn-success">SHOW</a>
                    </td>
                    <td>
                        <a href="{{ route('fumettos.edit', $fumetto) }}" class="btn btn-primary">EDIT</a>
                    </td>
                    <td>
                        <form action="{{ route('fumettos.destroy', $fumetto) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>
            @endforeach 

        </tbody>
    </table>
</section>

@endsection