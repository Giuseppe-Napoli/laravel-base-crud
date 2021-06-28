@extends('layouts.main')

@section('content')
   
<section class="container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Type</th>
                <th colspan="3">Actions</th>
            </tr>
        </thead>
        <tbody>
            
            {{-- @foreach ($fumettos as $fumetto)
                <tr>
                    <td>{{ $fumetto->id }}</td>
                    <td>{{ $fumetto->title }}</td>
                    <td>{{ $fumetto->type }}</td>
                    <td>SHOW</td>
                    <td>EDIT</td>
                    <td>DELETE</td>
                </tr>
            @endforeach --}}

        </tbody>
    </table>
</section>

@endsection